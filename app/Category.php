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
        return $this->hasMany('app\product','idCategory', 'id');
    }
}
