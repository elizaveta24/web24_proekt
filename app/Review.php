<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['title','info'];
    public function users(){
		return $this->belongsTo('App\User','user_id');
	}
}
