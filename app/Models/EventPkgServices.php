<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPkgServices extends Model
{
    use HasFactory;

    protected $table = 'event_pkg_services';

    protected $fillable = [
        'service_id',
        'event_pkg_id',
        'service_price',
        'service_name',
        'service_description',
    ];

    public function package()
    {
        return $this->belongsTo(EventPackage::class, 'event_pkg_id', 'package_id');
    }
}
