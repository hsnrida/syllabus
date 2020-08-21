<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function syllabus(){
        return $this->belongsTo('App\Syllabus');
    }
}
