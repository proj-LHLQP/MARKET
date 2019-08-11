<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRate extends Model
{
    public function userRate(){
        return $this->belongsTo('App\User','user_rate_id','id');
    }
}
