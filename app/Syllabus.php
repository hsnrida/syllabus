<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function department()
    {
        return $this->belongsTo('App\Department');
    }
    public function confirmation()
    {
        return $this->hasOne('App\Confirmation');
    }
    public function validation()
    {
        return $this->hasOne('App\Validation');
    }
}
