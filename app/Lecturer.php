<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model

{   protected $fillable = ['name','age','education','practice'];
    public function courses(){
		return $this->hasMany('App\Course','lecturers_id','id');
	}
}
