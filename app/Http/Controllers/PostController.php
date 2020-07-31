<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function time_mk() {
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

        $footer_copiright = "Copiright@2020";

        
        
        //dd($user);
        return view('time_mk_posts', ['posts' => $posts, 'footer' => $footer_copiright]);
    }

    function get_by_slug ($slug) {
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
}

function get_posts() {
    $posts = DB::table('posts')->get();
    $posts = DB::table('posts')->where('slug', 'first-post')->get(); //ako ima poveke rekordi da vrati
    $posts = DB::table('posts')->where('slug', 'first-post')->first();  //ako ima samo eden rekord
   
    dd($posts);
    return view('zadaca', ['posts' => $posts]);
}

function get_secont_post($slug) {
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
}

}
