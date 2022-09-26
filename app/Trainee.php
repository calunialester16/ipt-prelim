<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    function users() {
        return $this->belongsTo('App\User');
    }

    function courses() {
        return $this->belongsTo('App\Course');
    }
}
