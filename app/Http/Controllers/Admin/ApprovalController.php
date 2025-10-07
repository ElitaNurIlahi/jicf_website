<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event; // Import semua model yang dibutuhkan
use App\Models\ParticipantRegistration;
use App\Models\Speaker; 

class ApprovalController extends Controller
{
    // Logika persetujuan dasar untuk semua model

    private function checkAdminAccess()
    {
        // Pengecekan dasar, tanpa middleware
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Akses Ditolak. Anda bukan Admin.');
        }
    }
    
    // ------------------------------------------------------------------------
    // Persetujuan EVENT
    // ------------------------------------------------------------------------

    public function approveEvent(Event $event)
    {
        $this->checkAdminAccess(); // Pastikan Admin yang mengakses

        // 1. Set status menjadi disetujui
        $event->approved = true;
        
        // 2. Generate QR Code
        $event->qr_code = $this->generateUniqueQrCode(); // Panggil fungsi QR
        
        $event->save();

        return back()->with('success', 'Event berhasil disetujui dan QR Code dibuat.');
    }

    // ------------------------------------------------------------------------
    // Persetujuan PARTISIPAN
    // ------------------------------------------------------------------------

    public function approveParticipant(ParticipantRegistration $registration)
    {
        $this->checkAdminAccess(); 

        $registration->approved = true;
        $registration->save();
        
        // Kirim konfirmasi email (gunakan Laravel Mailables)
        // Mail::to($registration->user->email)->send(new ParticipantApproved($registration));

        return back()->with('success', 'Partisipan berhasil disetujui.');
    }
    
    // ... fungsi-fungsi lain untuk rejectParticipant, approveSpeaker, dll.
    
    // Fungsi dummy untuk QR Code (Implementasi nyata butuh package)
    private function generateUniqueQrCode(): string
    {
        return 'EVENT-' . \Illuminate\Support\Str::random(10);
    }
}