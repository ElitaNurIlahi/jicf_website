<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Registration;
use App\Mail\RegistrationConfirmation;
use App\Mail\RegistrationApproved;
use App\Mail\RegistrationRejected;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    // Kirim email konfirmasi saat registrasi
    public function sendConfirmation(Registration $registration)
    {
        Mail::to($registration->email)->send(
            new RegistrationConfirmation($registration)
        );
    }
    
    // Kirim email approval dengan QR code
    public function approve($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->status = 'approved';
        $registration->ticket_code = 'JICF-' . strtoupper(uniqid());
        $registration->save();
        
        // Generate QR Code
        $qrCode = QrCode::format('png')
            ->size(300)
            ->generate($registration->ticket_code);
        $qrCodeUrl = 'data:image/png;base64,' . base64_encode($qrCode);
        
        Mail::to($registration->email)->send(
            new RegistrationApproved($registration, $qrCodeUrl)
        );
        
        return redirect()->back()->with('success', 'Registration approved!');
    }
    
    // Kirim email rejection
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
