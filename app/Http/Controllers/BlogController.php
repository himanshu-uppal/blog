<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;


class BlogController extends Controller
{

    public function getIndex(){
        $posts= Post::orderBy('id','DESC')->where('type','=',0)->simplePaginate(6);
        //$recommended_posts = Post::orderBy('id','DESC')->where('type','=',0)->take(3)->get();
        $popular_posts = Post::orderBy('id','DESC')->where('type','=',0)->take(3)->get();
        
        //return view('blog.index')->withPosts($posts)->withRecommendedPosts($recommended_posts)->withPopularPosts($popular_posts);
        return view('blog.index')->withPosts($posts)->withPopularPosts($popular_posts);
    }
   public function getSingle($slug){

    $post = Post::where('slug','=',$slug)->first();
    // $post_categories = $post->categories;
    // foreach ($post_categories as $post_category) {
    //     $categories[] = $post_category->id;
    // }

    // $post_ids_get = DB::table('category_post')
    //             ->select('post_id')
    //             ->whereIn('category_id', $categories)
    //             ->get();
        
    // foreach ($post_ids_get as $post_id) {
    //     $post_ids[] = $post_id->post_id;
    // }


    
    
   //  print_r(array_unique($post_ids));
   // // $recommeded_post_ids = array_rand(array_unique($post_ids),3);
   //  print_r(array_unique($post_ids));

        


                    

    //$recommended_posts = Post::orderBy('id','DESC')->where('type','=',0)->take(3)->get();
    $popular_posts = Post::orderBy('id','DESC')->where('type','=',0)->take(3)->get();
    //return view('blog.single')->withPost($post)->withRecommendedPosts($recommended_posts)->withPopularPosts($popular_posts);
    return view('blog.single')->withPost($post)->withPopularPosts($popular_posts);
    //return view('blog.template');
   }
}
