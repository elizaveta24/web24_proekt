<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    public function courses(){
		return $this->hasMany('App\Course','lecturers_id','id');
	}
}
