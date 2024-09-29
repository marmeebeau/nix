<?php

namespace App\Models;

use App\Models\EventPackage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $primaryKey = 'service_id';

    protected $fillable = [
        'service_id',
        'inclusion',
        'quantity',
        'package_id',
    ];


    // Define relationship with EventPackage (belongs-to)
    public function eventPackage()
    {
        return $this->belongsTo(EventPackage::class, 'package_id');
    }
}
