<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    public function faculties(){
        return $this->hasMany('App\Faculty');
    }
}
