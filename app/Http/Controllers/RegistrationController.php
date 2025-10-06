<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Mail\RegistrationConfirmation;
use App\Mail\RegistrationApproved;
use App\Mail\RegistrationRejected;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class RegistrationController extends Controller
{
    /**
     * Menyimpan pendaftaran baru, membuat nomor registrasi,
     * dan mengirim email konfirmasi secara otomatis.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:registrations,email',
            'phone' => 'required|string|max:20',
            'organization' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'role' => 'required|string',
            'consent' => 'required|accepted',
        ]);

        // Buat Nomor Registrasi unik
        $validated['registration_number'] = 'JICF-' . strtoupper(Str::random(8));

        // Simpan data pendaftaran ke database
        $registration = Registration::create($validated);

        // Kirim email konfirmasi otomatis
        try {
            Mail::to($registration->email)->send(new RegistrationConfirmation($registration));
        } catch (\Exception $e) {
            \Log::error('Gagal mengirim email konfirmasi: ' . $registration->email . '. Error: ' . $e->getMessage());
        }
        
        return redirect()->route('registration')
            ->with('success', 'Pendaftaran berhasil! Silakan cek email Anda. Nomor Registrasi: ' . $registration->registration_number);
    }

    /**
     * Kirim email konfirmasi manual
     */
    public function sendConfirmation(Registration $registration)
    {
        Mail::to($registration->email)->send(
            new RegistrationConfirmation($registration)
        );
    }
    
    /**
     * Approve registrasi dan kirim QR code
     */
    public function approve($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->status = 'approved';
        $registration->ticket_code = 'JICF-' . strtoupper(uniqid());
        $registration->save();
        
        $qrCode = QrCode::format('png')->size(300)->generate($registration->ticket_code);
        $qrCodeUrl = 'data:image/png;base64,' . base64_encode($qrCode);
        
        Mail::to($registration->email)->send(
            new RegistrationApproved($registration, $qrCodeUrl)
        );
        
        return redirect()->back()->with('success', 'Registration approved!');
    }
    
    /**
     * Reject registrasi
     */
    public function reject($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->status = 'rejected';
        $registration->save();
        
        Mail::to($registration->email)->send(
            new RegistrationRejected($registration)
        );
        
        return redirect()->back()->with('success', 'Registration rejected!');
    }
}