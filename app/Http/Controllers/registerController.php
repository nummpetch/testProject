<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function signup(Request $data){
        return $data->All();
    }
}
