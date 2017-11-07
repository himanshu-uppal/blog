<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user= new User();
        $user->name="user1";
        $user->email="user1@gmail.com";        
        $user->password=bcrypt('123456');
        $user->save();

        $user= new User();
        $user->name="user2";
        $user->email="user2@gmail.com";        
        $user->password=bcrypt('123456');
        $user->save();
    }
}
