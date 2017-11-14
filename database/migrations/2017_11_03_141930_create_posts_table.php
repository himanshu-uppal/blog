<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('admin_id')->unsigned();
            $table->longText('content');
            $table->string('title');
            $table->string('featured_image');
            $table->text('excerpt');
            $table->text('tags');
            $table->integer('comment_count')->unsigned()->default(0);
            $table->dateTime('published_at');
            $table->bigInteger('post_id')->unsigned()->nullable('true'); //post_parent            
            $table->integer('status')->unsigned()->default(1);
            $table->integer('type')->unsigned()->default(1);          
            $table->timestamps();
            
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->foreign('post_id')->references('id')->on('posts');
            // ->onDelete('CASCADE')->onUpdate('CASCADE');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
