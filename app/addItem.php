<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addItem extends Model
{
   	protected $table="tbl_items";

    
    protected $fillable = [
         'itemType', 'brand', 'modelName', 'cc', 'cylinder', 'noOfGears', 'mileage', 'frontBrake', 'rearBrake', 'ABS', 'fuelType', 'price', 'img', 'modelYear', 'description',
    ];

}
