<?php

// app/Models/Admin.php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function approvedRegistrations()
    {
        return $this->hasMany(Registration::class, 'approved_by');
    }
}

// app/Models/Setting.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];

    public static function get($key, $default = null)
    {
        $setting = self::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    public static function set($key, $value)
    {
        return self::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
    }
}

// Update app/Models/Registration.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Registration extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'organization',
        'country',
        'role',
        'consent',
        'registration_number',
        'status',
        'rejection_reason',
        'qr_code',
        'qr_sent_at',
        'approved_at',
        'approved_by'
    ];

    protected $casts = [
        'consent' => 'boolean',
        'qr_sent_at' => 'datetime',
        'approved_at' => 'datetime'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($registration) {
            $registration->registration_number = 'JICF' . date('Y') . strtoupper(substr(uniqid(), -6));
            $registration->status = 'pending';
        });
    }

    public function approvedBy()
    {
        return $this->belongsTo(Admin::class, 'approved_by');
    }

    public function generateQrCode()
    {
        $qrData = json_encode([
            'registration_number' => $this->registration_number,
            'name' => $this->first_name . ' ' . $this->last_name,
            'email' => $this->email,
            'organization' => $this->organization,
            'country' => $this->country
        ]);

        $qrCodePath = 'qrcodes/' . $this->registration_number . '.png';
        $fullPath = storage_path('app/public/' . $qrCodePath);

        if (!file_exists(dirname($fullPath))) {
            mkdir(dirname($fullPath), 0755, true);
        }

        QrCode::format('png')
            ->size(300)
            ->generate($qrData, $fullPath);

        $this->qr_code = $qrCodePath;
        $this->save();

        return $qrCodePath;
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }
}