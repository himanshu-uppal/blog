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
        $post->title="Post 1";
        $post->slug="post-1";        
        $post->excerpt="Post 1 excerpt";
        $post->tags="";
        $post->comment_count=0;
        $post->published_at=date('Y-m-d H:i:s');
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();        
        $post->admin_id=2;
        $post->content="Post 2 content";
        $post->title="Post 2";
        $post->slug="post-2";        
        $post->excerpt="Post 2 excerpt";
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
        $post->title="Post 3";
        $post->slug="post-3";        
        $post->excerpt="Post 3 excerpt";
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
        $post->title="Post 4";
        $post->slug="post-4";        
        $post->excerpt="Post 4 excerpt";
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
        $post->title="Post 5";
        $post->slug="post-5";        
        $post->excerpt="Post 5 excerpt";
        $post->tags="";
        $post->comment_count=0;
        $post->published_at=date('Y-m-d H:i:s');
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

    }
}
