<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\Input;

class loginController extends Controller
{
    public function signin(Request $data){

    // validate the info, create rules for the inputs
    /*request()->validate([
        'username' => 'required',
        'password' => 'required'
    ]);

    


    $userdata = ([
        'username'     => Input::get('username'),
        'password'  => Input::get('password')
    ]);

    if (Auth::attempt($userdata)) {
        echo 'SUCCESS!';
    }*/

       // return $data->All();
       //dd($data->all(), $data->username, Input::get('username'));
       request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        //if (Auth::attempt([Input::get('username') => $username, Input::get('password') => $password])) {
        if (Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')])) {
            // Success
            //return ("success");
            return redirect()->intended('homePage');
        } else {
            // Go back on error (or do what you want)
            return redirect()->back();
            //return("back");
        }
    }
}
