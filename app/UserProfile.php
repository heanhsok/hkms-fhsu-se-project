<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //

    protected $fillable = [
        'user_id', 
        'first_name', 
        'middle_name',
        'last_name',
        'isStudent',
        'isVerified',
        'isApproved',
        'gender',
        'biography',
        'profile_picture',
        'street_number',
        'street_name',
        'commune',
        'district',
        'city',
        'country'
    ];

    public function user() {
        return $this->belongsTo('App\User')
    }

}
