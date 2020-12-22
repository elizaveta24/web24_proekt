<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
	protected $fillable = ['title','time','level','course_id','info'];
    public function course(){
		return $this->belongsTo('App\Course','course_id');
	}
}
