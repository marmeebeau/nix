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
        'package_name',
        'package_type',
        'description',
        'photo',
        'price',
        // 'guest',
        'event_id',
    ];

    public function event() {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
