<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'client_id';

    protected $fillable = [
        'client_id',
        'client_username',
        'client_fname',
        'client_lname',
        'client_phonenum',
        'client_email',
    ];
}
