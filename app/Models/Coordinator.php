<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    use HasFactory;

    protected $primaryKey = 'coordinator_id';

    protected $fillable = [
        'coordinator_id',
        'coordinator_username',
        'coordinator_email',
        'coordinator_password',
        'coordinator_fname',
        'coordinator_lname',
        'coordinator_birthday',
        'coordinator_gender',
        'coordinator_contact',
        'coordinator_city',
        'account_created',
    ];


}
