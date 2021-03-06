<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
         $this->call(FontsTableSeeder::class);
         $this->call(PostsTableSeeder::class);         
         $this->call(CategoriesTableSeeder::class);
         $this->call(CommentsTableSeeder::class);
         $this->call(CategoryPostTableSeeder::class);      
         $this->call(PermissionsTableSeeder::class);
         $this->call(PermissionsRolesTableSeeder::class);
         $this->call(PreviousDataSeeder::class);

         
    }
}
