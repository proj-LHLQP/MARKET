<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','user_id','seller_id','buyer_id','detail','price','sale','new','status','active'];

    public function images(){
        return $this->hasMany('App\ProductImage','product_id','id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function address(){
        return $this->hasOne('App\Address','product_id','id');
    }
    public function category(){
        return $this->belongsToMany('App\Category','product_categories','product_id','category_id');
    }

}
