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
        'guest_count',
        'budget_range',
        'theme',
        'client_id',
    ];

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }

}
