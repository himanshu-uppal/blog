<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $category = new Category();
        $category->category = "Programming";
        $category->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $category->save();

        $category = new Category();
        $category->category = "Life";
        $category->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $category->save();

        $category = new Category();
        $category->category = "Foods";
        $category->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $category->save();

        $category = new Category();
        $category->category = "Technology";
        $category->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $category->category_id = 1 ;
        $category->save();

        $category = new Category();
        $category->category = "Java";
        $category->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $category->category_id = 1;
        $category->save();

        $category = new Category();
        $category->category = "Android";
        $category->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $category->category_id = 2;
        $category->save();

        $category = new Category();
        $category->category = "Java Interfaces";
        $category->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo";
        $category->category_id = 5;
        $category->save();
    }
}
