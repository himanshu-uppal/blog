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
        $post->admin_id=1;
        $post->content="Post 1 content";
        $post->title="Consectetur adipiscing elit Consectetur adipiscing elit";
        $post->featured_image="image1.jpg";
        $post->slug="post-1";        
        $post->excerpt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. id est laborum.";
        $post->tags="";
        $post->comment_count=0;
        $post->published_at=date('Y-m-d H:i:s');
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();        
        $post->admin_id=2;
        $post->content="Dolor sit amet";
        $post->title="Dolor sit amet Dolor sit amet Dolor sit ametDolor sit amet";
        $post->featured_image="image1.jpg";
        $post->slug="post-2";        
        $post->excerpt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. id est laborum.";
        $post->tags="";
        $post->comment_count=0;
        $post->published_at=date('Y-m-d H:i:s');
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();


        $post = new Post();        
        $post->admin_id=1;
        $post->content="Post 3 content";
        $post->title="Sed do eiusmod";
        $post->featured_image="image1.jpg";
        $post->slug="post-3";         
        $post->excerpt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. id est laborum.";
        $post->tags="";
        $post->comment_count=0;
        $post->published_at=date('Y-m-d H:i:s');
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();


        $post = new Post();        
        $post->admin_id=2;
        $post->content="Post 4 content";
        $post->title="Incididunt ut labore Incididunt ut labore Incididunt ut labore Incididunt ut laboreIncididunt ut laboreIncididunt";
        $post->featured_image="image1.jpg";
        $post->slug="post-4";        
        $post->excerpt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. id est laborum.";
        $post->tags="";
        $post->comment_count=0;
        $post->published_at=date('Y-m-d H:i:s');
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();


        $post = new Post();        
        $post->admin_id=1;
        $post->content="Post 5 content";
        $post->title="Ut enim ad minim veniam Ut enim ad minim veniam Ut enim ad minim veniam";
        $post->featured_image="image1.jpg";
        $post->slug="post-5";        
        $post->excerpt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. id est laborum.";
        $post->tags="";
        $post->comment_count=0;
        $post->published_at=date('Y-m-d H:i:s');
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();        
        $post->admin_id=2;
        $post->content="Post 6 content";
        $post->title="Incididunt ut labore";
        $post->featured_image="image1.jpg";
        $post->slug="post-6";        
        $post->excerpt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. id est laborum.";
        $post->tags="";
        $post->comment_count=0;
        $post->published_at=date('Y-m-d H:i:s');
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();


        $post = new Post();        
        $post->admin_id=1;
        $post->content="Post 7 content";
        $post->title="Ut enim ad minim veniam Ut enim ad minim veniam Ut enim ad minim veniam";
        $post->featured_image="image1.jpg";
        $post->slug="post-7";        
        $post->excerpt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. id est laborum.";
        $post->tags="";
        $post->comment_count=0;
        $post->published_at=date('Y-m-d H:i:s');
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

    }
}
