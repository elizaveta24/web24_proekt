<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
	protected $fillable = ['title','time','level'];
    public function courses(){
		return $this->belongsTo('App\Course','courses_id','id');
	}
}
