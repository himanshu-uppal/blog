<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',60)->unique();   
            $table->integer('role_id')->unsigned();         
            $table->string('password');
            $table->text('description');
            $table->rememberToken();
            $table->timestamps();

            
           $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    
        
        Schema::dropIfExists('admins');
    }
}
