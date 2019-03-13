<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table="tbl_booking";

    protected $fillable=['bookingDate','userId','itemId',
    ];
}
