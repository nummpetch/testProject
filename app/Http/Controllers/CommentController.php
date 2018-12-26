<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store($id, Request $request){
        //dd( $request->input('comment'));
        request()->validate([
            'comment' => 'required', 
        ]);
        $comment=new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $id;
        $comment->message = request('comment');
        $comment->save();
        return redirect('post/'.$id);

    }
}