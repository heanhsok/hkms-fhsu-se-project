<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpportunityPage extends Model
{
    //
    protected $fillable = [
        'title',
        'type',
        'desc',
        'status'
    ];

    public function post() {
        return $this->hasMany('App\OpportunityPagePost');
    }


}
