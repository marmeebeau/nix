<?php

namespace App\Models;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPackage extends Model
{
    use HasFactory;

    protected $primaryKey = 'package_id';

    protected $fillable = [
        'package_id',
        'package_guest',
        'package_price',
        'package_name',
        'package_type',
        'package_description',
        'package_image',
    ];


}
