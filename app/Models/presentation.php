<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'speaker_id',
        'event_id',
        'start_time',
        'end_time',
        'approved',
    ];

    protected $casts = [
        'approved' => 'boolean',
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
    ];

    // Relationship dengan Speaker
    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }

    // Relationship dengan Event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}