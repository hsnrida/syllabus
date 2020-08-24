<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
     public function departmnet(){
         return $this->belongsTo('App\Department');
     }
     public function syllabi()
     {
         return $this->hasMany('App\Syllabus');
     }
     public function latestSyllabus()
     {
         return $this->hasOne('App\Syllabus')->latest();
     }
}
