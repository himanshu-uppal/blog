<?php

use Illuminate\Database\Seeder;

class AdminsRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_role')->insert(
            [ 'admin_id' => 1,'role_id' => 2]
        );

        DB::table('admin_role')->insert(
            [ 'admin_id' => 2,'role_id' => 2]
        );

       


    }
}
