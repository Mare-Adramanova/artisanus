<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

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

Route::get('/timemk', function () {
    $posts = [
     
       ["title" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odit.",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ducimus quia beatae alias sint, atque id perspiciatis repudiandae iste. Quaerat.",
        "updated" => "32",
        "slug" => "first-post"],

        
       ["title" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odit.",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ducimus quia beatae alias sint, atque id perspiciatis repudiandae iste. Quaerat.",
        "updated" => "32",
        "slug" => "secund-post"],

        
       ["title" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odit.",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ducimus quia beatae alias sint, atque id perspiciatis repudiandae iste. Quaerat.",
        "updated" => "10",
        "slug" => "third-post"]
    ];
    //dd($user);
    return view('time_mk_posts', ['posts' => $posts]);
});

Route::get('/timemk/{slug}', function ($slug) {
    $posts = [
     
       ["title" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odit.",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ducimus quia beatae alias sint, atque id perspiciatis repudiandae iste. Quaerat.",
        "updated" => "32",
        "slug" => "first-post"],

        
       ["title" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odit.",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ducimus quia beatae alias sint, atque id perspiciatis repudiandae iste. Quaerat.",
        "updated" => "32",
        "slug" => "second-post"],

        
       ["title" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odit.",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ducimus quia beatae alias sint, atque id perspiciatis repudiandae iste. Quaerat.",
        "updated" => "10",
        "slug" => "third-post"]
    ];
   
    $posts_collection = collect($posts);
    
    $filtered_collection = $posts_collection->filter(function($element) use ($slug){
       
        return $element['slug'] === $slug ;
    });
    
   // return view('time_mk_posts', ['posts' => [$posts[$slug]]]);
   return view('time_mk_posts', ['posts' => $filtered_collection]);
});

Route::get('/zadaca', function () {
    $posts = DB::table('posts')->get();
    $posts = DB::table('posts')->where('slug', 'first-post')->get(); //ako ima poveke rekordi da vrati
    $posts = DB::table('posts')->where('slug', 'first-post')->first();  //ako ima samo eden rekord
   
    dd($posts);
    return view('zadaca', ['posts' => $posts]);
});

Route::get('/zadaca/{slug}', function ($slug) {
    $posts = [
     
        ["title" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odit.",
         "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ducimus quia beatae alias sint, atque id perspiciatis repudiandae iste. Quaerat.",
         "updated" => "12",
         "slug" => "first-post"],
 
         
        ["title" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odit.",
         "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ducimus quia beatae alias sint, atque id perspiciatis repudiandae iste. Quaerat.",
         "updated" => "32",
         "slug" => "second-post"],
 
         
        ["title" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odit.",
         "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ducimus quia beatae alias sint, atque id perspiciatis repudiandae iste. Quaerat.",
         "updated" => "10",
         "slug" => "third-post"]
     ];

     foreach($posts as $post){
         $slug = $post['slug'];
        
            if($slug === 'second-post'){
                $new_arr = $post;
               
            }
     }

       
    return view('zadaca', ['posts' => $new_arr]);
});



