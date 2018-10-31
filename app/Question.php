<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = ['header','description','user_id','created_at','updated_at'];

    //
	public function user()
	{
		return $this->belongsTo('App\User', 'user_id');
	}

	public function tags() 
    {
        return $this->hasMany('App\Tag');
    }

}
