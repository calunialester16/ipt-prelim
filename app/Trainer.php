<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    function courses(){
        return $this->hasMany('App\Course');
    }
    function users() {
        return $this->belongsTo('App\User');
    }
}
