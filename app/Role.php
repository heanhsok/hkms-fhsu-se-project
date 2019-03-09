<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// class Role extends Model
// {
//     //
// }

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable = [
        'name',
        'display_name',
        'description'
    ];
}
