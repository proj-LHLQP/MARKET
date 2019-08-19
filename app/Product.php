<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name','customer_id','seller_id','buyer_id','detail','price','sale','new','status','active'];


    public function images(){
        return $this->hasMany('App\ProductImage','product_id','id');
    }
    public function customer(){
        return $this->belongsTo('App\Customer','customer_id','id');
    }
    public function address(){
        return $this->hasOne('App\Address','product_id','id');
    }
    public function category(){
        return $this->belongsToMany('App\Category','product_categories','product_id','category_id');
    }
    public function view(){
        return $this->hasOne('App\View','product_id','id');
    }

    public function productActived($listProducts){
        $result =[];
        foreach ($listProducts as $product){
            if($product->actived == 1){
                $result[] = $product;
            }
        }
        return $result;
    }
}
