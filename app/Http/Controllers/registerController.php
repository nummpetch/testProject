<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class registerController extends Controller
{
    
    public function signup(Request $data){
        request()->validate([
            'username' => 'required|unique:users|min:3',
            'password' => 'required|min:6|confirmed'
        ]);
        $user=new User();
        $user->username =request('username');
        $user->display_name =request('username');
        $user->password = bcrypt(request('password'));
        $user->save();
        return redirect()->intended('login');
        
        
    }
}
