<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use SoftDeletes;
    protected $table ='categories';
    protected $fillable =[
        'name','parent_id','created_at','update_at'
    ];
    public function productType(){
        return $this->hasMany('app\Product','idCategory', 'id');
    }
    public function subCategory(){
        return $this->hasMany('App\Category','parent_id','id');
    }
    public function product(){
        return $this->belongsToMany('App\Product','product_categories','category_id','product_id');
    }
    public function productActived(){
        $products = $this->product;
        $productActived = [];
        foreach ($products as $product){
            if($product->active == 1){
                $productActived[] = $product;
            }
        }
        return $productActived;
    }



}
