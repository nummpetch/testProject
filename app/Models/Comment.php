<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table = "comment";
    public function user(){
        return $this->belongTo('App\Models\User');      
    }
    public function post(){
        return $this->belongTo('App\Models\Post');
        
    }
}
