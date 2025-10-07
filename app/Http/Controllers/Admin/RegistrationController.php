<?php

// app/Http/Controllers/Admin/RegistrationController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use App\Models\Setting;
use App\Mail\RegistrationApproved;
use App\Mail\RegistrationRejected;
use App\Mail\QrCodeSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {
        $query = Registration::query();

        if ($request->status) {
            $query->where('status', $request->status);
        }

        if ($request->search) {
            $query->where(function($q) use ($request) {
                $q->where('first_name', 'like', '%' . $request->search . '%')
                  ->orWhere('last_name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%')
                  ->orWhere('registration_number', 'like', '%' . $request->search . '%');
            });
        }

        $registrations = $query->latest()->paginate(20);

        return view('admin.registrations.index', compact('registrations'));
    }

    public function show($id)
    {
        $registration = Registration::findOrFail($id);
        return view('admin.registrations.show', compact('registration'));
    }

    public function approve($id)
    {
        $registration = Registration::findOrFail($id);
        $maxCapacity = Setting::get('max_capacity', 300);
        $approvedCount = Registration::approved()->count();

        if ($approvedCount >= $maxCapacity) {
            return back()->with('error', 'Kuota sudah penuh! Tidak dapat meng-approve lagi.');
        }

        $registration->update([
            'status' => 'approved',
            'approved_at' => now(),
            'approved_by' => auth('admin')->id()
        ]);

        // Generate QR Code
        $registration->generateQrCode();

        // Send approval email
        Mail::to($registration->email)->send(new RegistrationApproved($registration));

        return back()->with('success', 'Registrasi telah di-approve dan email telah dikirim.');
    }

    public function reject(Request $request, $id)
    {
        $request->validate([
            'rejection_reason' => 'required|string|max:500'
        ]);

        $registration = Registration::findOrFail($id);

        $registration->update([
            'status' => 'rejected',
            'rejection_reason' => $request->rejection_reason
        ]);

        // Send rejection email
        Mail::to($registration->email)->send(new RegistrationRejected($registration));

        return back()->with('success', 'Registrasi telah ditolak dan email telah dikirim.');
    }

    public function sendQrCode($id)
    {
        $registration = Registration::findOrFail($id);

        if ($registration->status !== 'approved') {
            return back()->with('error', 'Hanya registrasi yang sudah di-approve yang dapat dikirim QR code.');
        }

        if (!$registration->qr_code) {
            $registration->generateQrCode();
        }

        Mail::to($registration->email)->send(new QrCodeSent($registration));

        $registration->update(['qr_sent_at' => now()]);

        return back()->with('success', 'QR Code telah dikirim ke email peserta.');
    }

    public function bulkSendQrCode()
    {
        $registrations = Registration::approved()
            ->whereNull('qr_sent_at')
            ->get();

        $sent = 0;
        foreach ($registrations as $registration) {
            if (!$registration->qr_code) {
                $registration->generateQrCode();
            }

            Mail::to($registration->email)->send(new QrCodeSent($registration));
            $registration->update(['qr_sent_at' => now()]);
            $sent++;
        }

        return back()->with('success', "QR Code berhasil dikirim ke {$sent} peserta.");
    }

    public function destroy($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->delete();

        return redirect()->route('admin.registrations.index')
            ->with('success', 'Registrasi berhasil dihapus.');
    }
}