<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class CreateController extends Controller
{
    public function store(Request $request){
        //return(Auth::user()->id);
        request()->validate([
            'title' => 'required|min:"3"|max:"255"',
            'body' => 'required|min:"3"|max:"255"'
        ]);

        $post=new Post();
        $post->user_id = Auth::user()->id;    
        $post->title =request('title');
        $post->body =request('body');
        //return $post;
        $post->save();
        return redirect()->intended('homePage');
    }
}