<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVolunteerExp extends Model
{
    //

    protected $fillable = [
        'user_id',
        'role',
        'organization',
        'desc',
        'start_date',
        'end_date'
    ];

    public function user() {
        return $this->belongsTo('App\User')
    }
}
