<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function User(){
        return $this->belongTo('App/Post');
        
    }
    public function Comment(){
        return $this->hasMany('App/Post');
        
    }
}
