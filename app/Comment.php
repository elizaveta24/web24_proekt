<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $fillable = ['title','info','lecturer_id'];
    public function users(){
		return $this->belongsTo('App\User','user_id');
	}
	public function lecturers(){
		return $this->belongsTo('App\Lecturer','lecturer_id');
	}
}
