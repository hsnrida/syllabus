<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
    
}
