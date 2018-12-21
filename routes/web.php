<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/home_page', function () {
    $posts = DB::table('posts')->get();

    return view('home_page')->with('posts',$posts);
})->middleware('auth');
Route::get('/post/{postId}', function ($postId=NULL) {
   
    $posts = DB::table('posts')->where('id',$postId)->select('id','title','body')->first();
    $comments = DB::table('comment')->where('post_id',$postId)->select('message')->get();
    $data=array('posts'=>$posts,'comments'=>$comments);
    //dd($data['comments'][1]->message);
    //dd(compact($posts,$comments));
    //return $id;
    return view('comment_post')->with('data',$data);
});



Route::post('login','loginController@signin');
Route::post('register','registerController@signup');
Route::post('create','CreateController@store');
Route::post('/post/comment/{id}','CommentController@store');
Route::post('comment_post','CommentController@store');