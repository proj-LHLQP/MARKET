<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','seller_id','buyer_id','detail','price','sale','new','status','active'];
}
