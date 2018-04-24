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
            $table->string('slug')->unique();
            $table->string('featured_image');
            $table->text('excerpt')->nullable('true');
            $table->text('tags');
            $table->integer('comment_count')->unsigned()->default(0);          
            $table->bigInteger('post_id')->unsigned()->nullable('true'); //post_parent            
            $table->integer('status')->unsigned()->default(1);
            $table->integer('type')->unsigned()->default(1);
            $table->integer('font_id')->unsigned()->nullable('true');
            $table->dateTime('published_at');
            $table->softDeletes();          
            $table->timestamps();
           

            
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            // ->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('font_id')->references('id')->on('fonts')->onDelete('cascade');

        
           
        
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
