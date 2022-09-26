<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    function trainees() {
        return $this->hasMany('App\Trainee');
    }

    function trainors() {
        return$this->belongsTo('App\Trainer');
    }
}
