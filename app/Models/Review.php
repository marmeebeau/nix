<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $primaryKey = 'review_id';

    protected $fillable = [
        'review_id',
        'rating',
        'comments',
        'package_id',
        'booking_id',
        'client_id'
    ];
    public function eventPackage()
    {
        return $this->belongsTo(EventPackage::class, 'package_id');
    }

    public function bookingDetail()
    {
        return $this->belongsTo(BookingDetail::class, 'booking_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
