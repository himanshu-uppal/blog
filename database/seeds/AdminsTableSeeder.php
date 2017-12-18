<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= new Admin();
        $admin->name="himanshu";
        $admin->email="himanshu94uppal@gmail.com";
        $admin->role_id=1;
        $admin->password=bcrypt('123456');
        $admin->description="description";
        $admin->save();

        $admin= new Admin();
        $admin->name="kunal";
        $admin->email="kunal.p.rai11@gmail.com";
         $admin->role_id=2;
        $admin->password=bcrypt('123456');
        $admin->description="description";
        $admin->save();

        $admin= new Admin();
        $admin->name="editor";
        $admin->email="editor@gmail.com";
        $admin->role_id=3;
        $admin->password=bcrypt('123456');
        $admin->description="description";
        $admin->save();
    }
}
