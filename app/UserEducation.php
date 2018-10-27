<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    //

    protected $fillable = [
        'user_id', 
        'school', 
        'degree',
        'major',
        'grade',
        'desc',
        'start_date',
        'start_date'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
