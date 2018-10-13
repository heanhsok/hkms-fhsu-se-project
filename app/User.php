<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable, EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function questions() 
    {
        return $this->hasMany('App\Question');
    }

    public function answers() 
    {
        return $this->hasMany('App\Answer');
    }

    public function questionVotes() 
    {
        return $this->hasMany('App\QuestionVote');
    }

    public function answerVotes() 
    {
        return $this->hasMany('App\AnswerVote');
    }


}
