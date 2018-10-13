<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFollow extends Model
{
    protected $fillable = [
        'follower_id',
        'following_id',
        'follow_status'
    ];


    public function follower()
    {
        return $this->belongsTo('App\User');
    }

    public function following()
    {
        return $this->belongsTo('App\User');
    }
}
