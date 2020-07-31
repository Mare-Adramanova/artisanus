<?php

use Illuminate\Support\Facades\Route;



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
    $user = [
       "name" => "Neven",
       "lastname" => "Gjoreski",
       "age" => "32"
    ];
    //dd($user);
    return view('test', ['user' => $user]);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/timemk', 'PostController@time_mk');

Route::get('/timemk/{slug}', 'PostController@get_by_slug');
    
  
Route::get('/zadaca', 'PostController@get_posts');

Route::get('/zadaca/{slug}', 'PostController@get_secont_post');



