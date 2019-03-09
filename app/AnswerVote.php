<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerVote extends Model
{
    //
    protected $fillable = [
        'answer_id',
        'user_id',
        'vote'
    ];

    public function answer() 
    {
        return $this->belongsTo('App\Answer');
    }

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
