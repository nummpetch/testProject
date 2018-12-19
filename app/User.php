<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function Post(){
          return  $this->haMany('App\User');
    
    }
    public function Comment(){
        return  $this->haMany('App\User');
  
  }
}
