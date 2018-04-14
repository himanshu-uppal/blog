<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class BlogController extends Controller
{

    public function getIndex(){
        $posts= Post::orderBy('id','DESC')->take(6)->get();
        $recommended_posts = Post::orderBy('id','DESC')->take(3)->get();
        $popular_posts = Post::orderBy('id','DESC')->take(3)->get();
        
        return view('blog.index')->withPosts($posts)->withRecommendedPosts($recommended_posts)->withPopularPosts($popular_posts);
    }
   public function getSingle($slug){

    $post = Post::where('slug','=',$slug)->first();
    $recommended_posts = Post::orderBy('id','DESC')->take(3)->get();
    $popular_posts = Post::orderBy('id','DESC')->take(3)->get();
    return view('blog.single')->withPost($post)->withRecommendedPosts($recommended_posts)->withPopularPosts($popular_posts);
    //return view('blog.template');
   }
}
