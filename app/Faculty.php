<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function university(){
        return $this->belongsTo('App\University');
    }
    public function departments(){
        return $this->hasMany('App\Department');
    }
}
