<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->role="admin";
        $role->display_name="Admin";
        $role->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $role->save();

        $role = new Role();
        $role->role="super-admin";
        $role->display_name="Super Admin";
        $role->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $role->save();

        $role = new Role();
        $role->role="author";
        $role->display_name="Author";
        $role->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $role->save();

        $role = new Role();
        $role->role="editor";
        $role->display_name="Editor";
        $role->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $role->save();
    }
}
