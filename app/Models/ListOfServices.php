<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListOfServices extends Model
{
    use HasFactory;

    protected $fillable = [
        'list_of_service_id',
        'package_id',
        'event_pkg_id',
    ];

    // Relationships
    public function package()
    {
        return $this->belongsTo(EventPackage::class, 'package_id', 'package_id');
    }

    public function eventPkgServices()
    {
        return $this->belongsTo(EventPkgServices::class, 'event_pkg_id', 'event_pkg_id');
    }
}
