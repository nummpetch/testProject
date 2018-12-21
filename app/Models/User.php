<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Contracts\Auth\Authenticatable;
//use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

//class User extends \Eloquent implements Authenticatable
//class User extends Eloquent  implements Authenticatable
//class User extends Model
class User extends Authenticatable
{
    public function posts() {
        return  $this->hasMany('App\Models\Post');
    }
    
    public function comments() {
      return  $this->hasMany('App\Models\Comment');
    }
}
