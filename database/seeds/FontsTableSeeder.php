<?php

use Illuminate\Database\Seeder;
use App\Font;


class FontsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $font = new Font();
        $font->name="Gaegu";
        $font->size="x-large";
        $font->save();

        $font = new Font();
        $font->name="Pacifico";
        $font->size="x-large";
        $font->save();

        $font = new Font();
        $font->name="Kanit";
        $font->size="x-large";
        $font->save();

        $font = new Font();
        $font->name="Satisfy";
        $font->size="x-large";
        $font->save();

        $font = new Font();
        $font->name="Sacramento";
        $font->size="x-large";
        $font->save();

        $font = new Font();
        $font->name="Ruthie";
        $font->size="x-large";
        $font->save();

        $font = new Font();
        $font->name="Lovers Quarrel";
        $font->size="x-large";
        $font->save();

        $font = new Font();
        $font->name="Monsieur La Doulaise";
        $font->size="x-large";
        $font->save();

        $font = new Font();
        $font->name="Mrs Saint Delafield";
        $font->size="x-large";
        $font->save();

    }
}
