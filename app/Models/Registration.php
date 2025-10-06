<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        'registration_number'
    ];

    protected $casts = [
        'consent' => 'boolean',
    ];
}
