<?php
// app/Mail/QrCodeSent.php
namespace App\Mail;

use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QrCodeSent extends Mailable
{
    use Queueable, SerializesModels;

    public $registration;

    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
    }

    public function build()
    {
        return $this->subject('JICF 2025 - Your Event QR Code')
                    ->view('emails.qr-code')
                    ->attach(storage_path('app/public/' . $this->registration->qr_code));
    }
}