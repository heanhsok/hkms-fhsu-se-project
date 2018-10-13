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

    public function user_profile() {
        return $this->hasOne('App\UserProfile');
    }

    public function user_education() {
        return $this->hasMany('App\UserEducation');
    }

    public function user_work_experience() {
        return $this->hasMany('App\UserWorkExp');
    }

    public function user_volunteer_experience() {
        return $this->hasMany('App\UserVolunteerExperience');
    }
    
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
