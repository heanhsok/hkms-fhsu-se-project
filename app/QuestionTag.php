<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionTag extends Model
{
    //
    protected $fillable = [
        'question_id',
        'tag_id'
    ];


    public function question() 
    {
        return $this->belongsTo('App\Question');
    }

    public function tag() 
    {
        return $this->belongsTo('App\Tag');
    }
}
