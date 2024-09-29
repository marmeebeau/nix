<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Client;
use App\Models\EventPreference;
use App\Models\EventPackage;

class Recommendation extends Model
{
    use HasFactory;

    protected $primaryKey = 'reco_id';

    protected $fillable = [
        'reco_id',
        'client_id',
        'preferences_id',
        'package_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function eventPreference()
    {
        return $this->belongsTo(EventPreference::class, 'preferences_id');
    }

    public function eventPackage()
    {
        return $this->belongsTo(EventPackage::class, 'package_id');
    }
}
