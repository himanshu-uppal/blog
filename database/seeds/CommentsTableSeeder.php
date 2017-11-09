<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       


        $comment = new Comment();
        $comment->post_id=1;
        $comment->content="Nice";
        $comment->approved=1;
        $comment->author_id=1;
        $comment->author_type="admin";
        $comment->save();

        $comment = new Comment();
        $comment->post_id=2;
        $comment->content="Great";
        $comment->approved=0;
        $comment->author_id=1;
        $comment->author_type="user";
        $comment->save();

        $comment = new Comment();
        $comment->post_id=3;
        $comment->content="Wow";
        $comment->approved=1;
        $comment->author_id=2;
        $comment->author_type="admin";
        $comment->save();

        $comment = new Comment();
        $comment->post_id=4;
        $comment->content="No Way!!";
        $comment->approved=0;
        $comment->author_id=2;
        $comment->author_type="user";
        $comment->save();

        $comment = new Comment();
        $comment->post_id=1;
        $comment->content="Damn!";
        $comment->approved=1;
        $comment->author_id=1;
        $comment->author_type="admin";
        $comment->comment_id=1;
        $comment->save();

        $comment = new Comment();
        $comment->post_id=2;
        $comment->content="Good ";
        $comment->approved=1;
        $comment->author_id=1;
        $comment->author_type="user";
        $comment->comment_id=2;
        $comment->save();

        $comment = new Comment();
        $comment->post_id=3;
        $comment->content="Hell No!!";
        $comment->approved=1;
        $comment->author_id=2;
        $comment->author_type="user";
        $comment->comment_id=3;
        $comment->save();

    }
}
