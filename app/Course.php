<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function lecturers(){
		return $this->belongsTo('App\Lecturer','lecturers_id','id');
	}

	public function lessons(){
		return $this->hasMany('App\Lesson','lessons_id','id');
	}
	
	public function users(){
		return $this->belongsToMany('App\Models\User');
	}
}
