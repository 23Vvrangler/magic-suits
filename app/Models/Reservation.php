<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'room_id',
        'guest_name',
        'checkin_date',
        'checkout_date',
    ];
}