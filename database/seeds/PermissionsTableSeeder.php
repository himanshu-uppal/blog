<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission();
        $permission->name ="create-post";
        $permission->display_name = "create-post";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        $permission = new Permission();
        $permission->name ="update-post";
        $permission->display_name = "update-post";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        $permission = new Permission();
        $permission->name ="delete-post";
        $permission->display_name = "delete-post";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        $permission = new Permission();
        $permission->name ="create-admin";
        $permission->display_name = "create-admin";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        $permission = new Permission();
        $permission->name ="delete-admin";
        $permission->display_name = "delete-admin";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();
    }
}
