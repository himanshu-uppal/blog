<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use DB;


class BlogController extends Controller
{

    public function getIndex(){
        $posts= Post::orderBy('id','DESC')->where('type','=',0)->where('status','=',0)->simplePaginate(5);

        //$recommended_posts = Post::orderBy('id','DESC')->where('type','=',0)->take(3)->get();
        $popular_posts = Post::orderBy('id','DESC')->where('type','=',0)->where('status','=',0)->take(3)->get();
        $categories = Category::all();


        //return view('blog.index')->withPosts($posts)->withRecommendedPosts($recommended_posts)->withPopularPosts($popular_posts);
        return view('blog.index')->withPosts($posts)->withPopularPosts($popular_posts)->withCategories($categories);
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
    $popular_posts = Post::orderBy('id','DESC')->where('type','=',0)->where('status','=',0)->take(3)->get();
    //return view('blog.single')->withPost($post)->withRecommendedPosts($recommended_posts)->withPopularPosts($popular_posts);
    return view('blog.single')->withPost($post)->withPopularPosts($popular_posts);
    //return view('blog.template');
   }

   public function getCategoryPosts($category){
    //print_r($category);
        $category = Category::where('category','=',$category)->first();
        $title = "Category :" + $category->category ;
        $categories = Category::all();
        //$posts = $category->posts();
        $post_ids = DB::table('category_post')->select('post_id')->distinct()->where('category_id','=', $category->id)->get();
         //print_r($post_ids);
         $posts_id = array();
         foreach($post_ids as $i)
        {
             $posts_id[] =  $i->post_id;
        }
         //print_r($posts_id);
       
         $posts = Post::whereIn('id', $posts_id)->where('type','=',0)->where('status','=',0)->simplePaginate(5);;
        // $posts->all();
                     

        
                   
        $popular_posts = Post::orderBy('id','DESC')->where('type','=',0)->where('status','=',0)->take(3)->get();
        return view('blog.archive')->withTitle($title)->withPosts($posts)->withPopularPosts($popular_posts)->withCategories($categories);

   }
}
