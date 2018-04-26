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
        $category->description="";
        $category->save();

        $category = new Category();
        $category->category = "Life";
        $category->description="";
        $category->save();

        $category = new Category();
        $category->category = "Food";
        $category->description="";
        $category->save();

        $category = new Category();
        $category->category = "Technology";
        $category->description="";
        $category->save();

        $category = new Category();
        $category->category = "Nature";
        $category->description="";
        $category->save();

        $category = new Category();
        $category->category = "Songs";
        $category->description="";
        $category->save();

        $category = new Category();
        $category->category = "Travel";
        $category->description="";
        $category->save();

        $category = new Category();
        $category->category = "Random";
        $category->description="";
        $category->save();
    }
}
