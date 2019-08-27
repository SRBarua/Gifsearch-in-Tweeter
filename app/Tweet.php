<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    // Carbon instance fields
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    
    public function user()
    {
     return $this->belongsTo('App\user');
    }

    public function likes()
    {
        return $this->hasMany('App\like');
    }
    public function comments()
    {
        return $this->hasMany('App\comment');
    }
}
