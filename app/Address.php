<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable =['product_id','province_id','district_id','ward_id','village_id'];
}
