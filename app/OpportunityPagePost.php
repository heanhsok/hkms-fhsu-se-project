<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpportunityPagePost extends Model
{
    //
    protected $fillable = [
        'opportunity_page_id',
        'user_id',
        'title',
        'institution',
        'category',
        'picture',
        'description',
        'requirement',
        'contact',
        'location',
        'start_date',
        'end_date',
        'status'
    ];

    public function page() {
        return $this->belongsTo('App\OpportunityPage', 'opportunity_page_id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
