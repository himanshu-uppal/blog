<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
         $post->id=2;        
        $post->admin_id=1;
        $post->content=" 
       <p>Initially, life is about sleeping to get and to know your dreams<br />\r\n
       <br />\r\n
       And when you get them<br />\r\n
       <br />\r\n
       Life is all about to wake up and working hard enough to make your dreams come true.<br />\r\n
       <br />\r\n
       So,<br />\r\n
       <br />\r\n
       Get up, find your stairs, take those first steps and the momentum will take you there.</p>
       ";
        $post->title="Get Started with your life";
        $post->featured_image="stairs.jpg";
        $post->slug="get-started-with-your-life";        
        $post->excerpt="";
        $post->tags="#getStarted";
        $post->comment_count=0;
        $post->published_at="2018-04-26 07:46:31";
        $post->status=0;
        $post->type=0;
        $post->created_at= "2018-04-26 07:46:31";
        $post->updated_at= "2018-04-26 07:46:31";
        $post->font_id=2;
        $post->save();

    }
}
