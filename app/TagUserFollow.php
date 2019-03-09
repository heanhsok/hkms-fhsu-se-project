<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagUserFollow extends Model
{
    //
    protected $fillable = [
        'tag_id',
        'user_id',
        'follow_status'
    ];

    public function tag()
    {
        return $this->belongsTo('App\Tag');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
