<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = 'events';
	protected $fillable = [
        'id',
        'event_name',
        'start_date',
        'end_date',
        'event_status',
        'event_slug',
        'event_organizer',

    ];
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'event_organizer');
    }
}
