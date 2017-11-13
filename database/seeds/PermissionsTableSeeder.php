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
        //1
        $permission = new Permission();
        $permission->name ="view-dashboard";
        $permission->display_name = "View Dashboard";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //2
        $permission = new Permission();
        $permission->name ="view-post";
        $permission->display_name = "View Post";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //3
        $permission = new Permission();
        $permission->name ="create-post";
        $permission->display_name = "create-post";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //4
        $permission = new Permission();
        $permission->name ="update-post";
        $permission->display_name = "update-post";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //5
        $permission = new Permission();
        $permission->name ="delete-post";
        $permission->display_name = "delete-post";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //6
        $permission = new Permission();
        $permission->name ="view-category";
        $permission->display_name = "View category";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //7
        $permission = new Permission();
        $permission->name ="create-category";
        $permission->display_name = "create-category";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //8
        $permission = new Permission();
        $permission->name ="update-category";
        $permission->display_name = "update-category";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //9
        $permission = new Permission();
        $permission->name ="delete-category";
        $permission->display_name = "delete-category";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //10
        $permission = new Permission();
        $permission->name ="view-media";
        $permission->display_name = "View Media";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //11
        $permission = new Permission();
        $permission->name ="create-media";
        $permission->display_name = "create-media";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

     
        //12
        $permission = new Permission();
        $permission->name ="delete-media";
        $permission->display_name = "delete-media";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //13
        $permission = new Permission();
        $permission->name ="view-role";
        $permission->display_name = "View Role";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //15
        $permission = new Permission();
        $permission->name ="create-role";
        $permission->display_name = "create-role";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //16
        $permission = new Permission();
        $permission->name ="update-role";
        $permission->display_name = "update-role";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //17
        $permission = new Permission();
        $permission->name ="delete-role";
        $permission->display_name = "delete-role";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //18
        $permission = new Permission();
        $permission->name ="view-permission";
        $permission->display_name = "View Permission";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //19
        $permission = new Permission();
        $permission->name ="create-permission";
        $permission->display_name = "create-permission";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //20
        $permission = new Permission();
        $permission->name ="update-permission";
        $permission->display_name = "update-permission";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //21
        $permission = new Permission();
        $permission->name ="delete-permission";
        $permission->display_name = "delete-permission";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //22
        $permission = new Permission();
        $permission->name ="view-admin";
        $permission->display_name = "View Admin";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //23
        $permission = new Permission();
        $permission->name ="create-admin";
        $permission->display_name = "create-admin";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //24
        $permission = new Permission();
        $permission->name ="update-admin";
        $permission->display_name = "update-admin";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //25
        $permission = new Permission();
        $permission->name ="delete-admin";
        $permission->display_name = "delete-admin";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

          //26
        $permission = new Permission();
        $permission->name ="draft-post";
        $permission->display_name = "Draft post";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

         //27
        $permission = new Permission();
        $permission->name ="publish-post";
        $permission->display_name = "Publish post";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();


         //28
        $permission = new Permission();
        $permission->name ="perm-delete-post";
        $permission->display_name = "Permanent delete post";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        //29
        $permission = new Permission();
        $permission->name ="restore-post";
        $permission->display_name = "Restore post";
        $permission->description ="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $permission->save();

        
    }
}
