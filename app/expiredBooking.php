<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expiredBooking extends Model
{
    protected $table = "tbl_expired_booking";

    protected $fillable = ['expiredDate', 'userId', 'itemId',
	];
}
