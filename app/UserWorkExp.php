<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWorkExps extends Model
{
    //
    protected $fillable = [
        'user_id',
        'specialty',
        'position',
        'institution',
        'desc',
        'start_date',
        'end_date'
    ];

    public function user() {
        return $this->belongsTo('App\User')
    }
}
