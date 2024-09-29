<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPreference extends Model
{
    use HasFactory;

    protected $primaryKey = 'preferences_id';

    protected $fillable = [
        'preferences_id',
        'event_type',
        'theme',
        'budget_range',
        'guest_count',
        'client_id',
        'event_id',
    ];

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function event() {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
