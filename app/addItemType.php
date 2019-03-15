<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addItemType extends Model
{
    protected $table = "tbl_item_type";

    protected $fillable = ['itemType']; 
}
