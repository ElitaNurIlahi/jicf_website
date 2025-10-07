<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ParticipantRegistration extends Model
{
    use HasFactory;

    // Nama tabel secara eksplisit (Opsional, karena Laravel akan mencari 'participant_registrations')
    protected $table = 'participant_registrations';

    /**
     * Atribut yang dapat diisi secara massal (mass assignable).
     * Kolom id, created_at, dan updated_at dilindungi secara default.
     */
    protected $fillable = [
        'event_id',
        'user_id',
        'approved',
        'qr_code',
    ];

    /**
     * Atribut yang harus di-cast ke tipe data tertentu.
     * Kolom 'approved' akan otomatis dikonversi menjadi tipe boolean (true/false).
     */
    protected $casts = [
        'approved' => 'boolean',
    ];

    // ------------------------------------------------------------------------
    // RELATIONS (Relasi)
    // ------------------------------------------------------------------------

    /**
     * Relasi ke Model Event.
     * Setiap pendaftaran (registration) milik satu Event.
     */
    public function event(): BelongsTo
    {
        // Asumsi Model Event bernama 'App\Models\Event'
        return $this->belongsTo(Event::class, 'event_id');
    }

    /**
     * Relasi ke Model User.
     * Setiap pendaftaran (registration) milik satu User.
     */
    public function user(): BelongsTo
    {
        // Asumsi Model User bernama 'App\Models\User'
        return $this->belongsTo(User::class, 'user_id');
    }
}