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
use App\Models\Post;
use App\Models\User;
//Route::view('/', 'login');

Route::view('/', 'login');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');


Route::middleware('auth')->group(function () {
    Route::view('/create', 'create')->middleware('auth')->name('create');
    Route::view('/settings', 'settings')->middleware('auth')->name('settings');

    Route::get('/homePage', function () {
        $posts = DB::table('posts')->get();
        return view('homePage')->with('posts',$posts);
    });

    Route::get('/post/{postId}', function ($postId=NULL) {
        $posts = DB::table('posts')->where('id',$postId)->select('id','title','body')->first();
        $comments = DB::table('comment')->where('post_id',$postId)->select('message')->get();
        $data=array('posts'=>$posts,'comments'=>$comments);
        return view('comment_post')->with('data',$data);
    })->name('post');
});

Route::post('login','loginController@signin');
Route::post('register','registerController@signup');
Route::post('create','CreateController@store');
Route::post('/post/comment/{id}','CommentController@store');
Route::post('comment_post','CommentController@store');
Route::post('re_password','settingController@rePassword');
Route::post('set_language','LanguageController@setLanguage');