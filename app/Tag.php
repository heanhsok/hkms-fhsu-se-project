<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
     protected $fillable = [
        'description','status','user_id'
    ];
}
