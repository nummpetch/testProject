<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use DB;
class settingController extends Controller
{
    public function rePassword(Request $request, User $user) {
        request()->validate([
            'oldPassword' => 'required|min:"6"',
            'first_password' => 'required|min:"6"|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:"6"'
            
        ]);
        $userModel = $user->where('id', Auth::user()->id)->first();
        $userModel->password = bcrypt(request('first_password'));
        $userModel->save();
            //->update(['password' => bcrypt(request('first_password'))]);
        //User::where('password',bcrypt(request('oldPassword'))->update(bcrypt(request('first_password')))
        return redirect('login');
    }
    }