<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{ 
	protected $fillable = ['name','age','education','practice','info'];

    public function courses(){
		return $this->hasMany('App\Course','lecturer_id');
	}
}
