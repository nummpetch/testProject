<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongTo('App\Models\User');
        
    }
    public function comments(){
        return $this->hasMany('App\Models\Comment');
        
    }
}