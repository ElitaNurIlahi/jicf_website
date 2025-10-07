<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // ------------------------------------------------------------------------
    // RELATIONS
    // ------------------------------------------------------------------------

    /**
     * Get the participant registrations for the user.
     */
    public function participantRegistrations()
    {
        return $this->hasMany(ParticipantRegistration::class);
    }

    /**
     * Get the speaker registrations for the user.
     */
    public function speakerRegistrations()
    {
        // Pastikan Anda menambahkan "use App\Models\Speaker;" di bagian atas jika belum
        return $this->hasMany(Speaker::class);
    }

    // ------------------------------------------------------------------------
    // SCOPES
    // ------------------------------------------------------------------------

    /**
     * Scope a query to only include admin users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAdmin($query)
    {
        return $query->where('role', 'admin');
    }

    /**
     * Scope a query to only include participant users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeParticipant($query)
    {
        return $query->where('role', 'participant');
    }

    /**
     * Scope a query to only include speaker users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSpeaker($query)
    {
        return $query->where('role', 'speaker');
    }
    
    // ------------------------------------------------------------------------
    // CUSTOM ACCESSORS / METHODS (Fungsi Pemeriksaan Hak Akses)
    // ------------------------------------------------------------------------

    /**
     * Cek apakah user saat ini memiliki peran Admin.
     * Metode yang paling fleksibel adalah mengecek nilai kolom 'role'.
     *
     * @return bool
     */
    public function isAdmin(): bool
    {
        // Mengembalikan TRUE jika nilai kolom 'role' adalah 'admin'
        return $this->role === 'admin';
    }
}