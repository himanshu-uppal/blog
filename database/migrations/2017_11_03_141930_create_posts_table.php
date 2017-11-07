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
            $table->increments('id');
           // $table->integer('admin_id')->unsigned();
            $table->longText('content');
            $table->string('title',255);
            $table->text('exerpt');
            $table->integer('status')->unsigned()->default(1);
            $table->integer('type')->unsigned()->default(1);                      
            $table->timestamps();

            //$table->foreign('admin_id')->references('id')->on('admins')->onDelete('CASCADE')->onUpdate('CASCADE');
        
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
