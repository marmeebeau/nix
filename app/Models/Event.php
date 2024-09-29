<?php

namespace App\Models;
use App\Models\Client;
use App\Models\EventPackage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'event_id';

    protected $fillable = [
        'event_id',
        'event_name',
        'event_date',
        'budget',
        'client_id',
    ];

    public function client(){
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function eventPackages() {
        return $this->hasMany(EventPackage::class, 'event_id');
    }
}
