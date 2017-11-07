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
        $post->content="Post 1 content";
        $post->slug="post-1";
        $post->title="Post 1";
        $post->exerpt="Post 1 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();
        $post->content="Post 2 content";
        $post->slug="post-2";
        $post->title="Post 2";
        $post->exerpt="Post 2 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();
        $post->content="Post 3 content";
        $post->slug="post-3";
        $post->title="Post 3";
        $post->exerpt="Post 3 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();
        $post->content="Post 4 content";
        $post->slug="post-4";
        $post->title="Post 4";
        $post->exerpt="Post 4 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();
        $post->content="Post 5 content";
        $post->slug="post-5";
        $post->title="Post 5";
        $post->exerpt="Post 5 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();
        $post->content="Post 6 content";
        $post->slug="post-6";
        $post->title="Post 6";
        $post->exerpt="Post 6 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();
        $post->content="Post 7 content";
        $post->slug="post-7";
        $post->title="Post 7";
        $post->exerpt="Post 7 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();
        $post->content="Post 8 content";
        $post->slug="post-8";
        $post->title="Post 8";
        $post->exerpt="Post 8 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();
        $post->content="Post 9 content";
        $post->slug="post-9";
        $post->title="Post 9";
        $post->exerpt="Post 9 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();
        $post->content="Post 10 content";
        $post->slug="post-10";
        $post->title="Post 10";
        $post->exerpt="Post 10 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();
        $post->content="Post 11 content";
        $post->slug="post-11";
        $post->title="Post 11";
        $post->exerpt="Post 11 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();
        $post->content="Post 12 content";
        $post->slug="post-12";
        $post->title="Post 12";
        $post->exerpt="Post 12 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();
        $post->content="Post 13 content";
        $post->slug="post-13";
        $post->title="Post 13";
        $post->exerpt="Post 13 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

        $post = new Post();
        $post->content="Post 14 content";
        $post->slug="post-14";
        $post->title="Post 14";
        $post->exerpt="Post 14 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');

        $post->save();$post = new Post();
        $post->content="Post 15 content";
        $post->slug="post-15";
        $post->title="Post 15";
        $post->exerpt="Post 15 exerpt";
        $post->status="1";
        $post->type="1";
        $post->created_at= date('Y-m-d H:i:s');
        $post->save();

    }
}
