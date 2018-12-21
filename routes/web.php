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
});
Route::get('/post/{postId}', function ($postId) {
   
    $posts = DB::table('posts')->where('id',$postId)->select('title','body')->get();
    $comment = DB::table('comment')->where('post_id',$postId)->value('message');
    
    //dd($post[0]->body);
    
    //eturn $id;
    return view('comment_post')->with('posts',$posts);
});



Route::post('login','loginController@signin');
Route::post('register','registerController@signup');
Route::post('create','CreateController@store');
