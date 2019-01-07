<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function setLanguage(Request $request){
        
        session(['language'=>request('language')]);
        
        //dd(session('language'));
        return back();
    }
}
