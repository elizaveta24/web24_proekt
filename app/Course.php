<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{ 
    protected $fillable = ['title','cost','level','lecturer_id','info'];
    public function lecturer(){
		return $this->belongsTo('App\Lecturer','lecturer_id');
	}

	public function lessons(){
		return $this->hasMany('App\Lesson','course_id');
	}
	public function users()
{
    return $this->hasMany('App\User');
}
}
