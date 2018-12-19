<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    public function User(){
        return $this->belongTo('App\Comment')
    }
    public function Post(){
        return $this->belongTo('App\Comment')
    }
}
