<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;

class loginController extends Controller
{
    public function signin(Request $data){
       // return $data->All();
        request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            // Success
            return redirect()->intended('home_page');
        } else {
            // Go back on error (or do what you want)
            return redirect()->back();
        }
    }
}
