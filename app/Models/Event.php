<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'location',
        'approved',
        'qr_code',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'approved' => 'boolean',
    ];

    /**
     * Get the participant registrations for the event.
     */
    public function participantRegistrations()
    {
        return $this->hasMany(ParticipantRegistration::class);
    }

    /**
     * Get the speakers for the event.
     */
    public function speakers()
    {
        return $this->hasMany(Speaker::class);
    }

    /**
     * Get the presentations for the event.
     */
    public function presentations()
    {
        return $this->hasMany(Presentation::class);
    }

    /**
     * Scope a query to only include approved events.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeApproved($query)
    {
        return $query->where('approved', true);
    }

    /**
     * Scope a query to only include pending events.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePending($query)
    {
        return $query->where('approved', false);
    }
}
