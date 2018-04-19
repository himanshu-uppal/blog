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
        $font->size="xx-large";
        $font->save();

        $font = new Font();
        $font->name="Pacifico";
        $font->size="xx-large";
        $font->save();

        $font = new Font();
        $font->name="Kanit";
        $font->size="xx-large";
        $font->save();

        $font = new Font();
        $font->name="Satisfy";
        $font->size="xx-large";
        $font->save();

        $font = new Font();
        $font->name="Sacramento";
        $font->size="xx-large";
        $font->save();

        $font = new Font();
        $font->name="Ruthie";
        $font->size="xx-large";
        $font->save();

        $font = new Font();
        $font->name="Lovers Quarrel";
        $font->size="xx-large";
        $font->save();

        $font = new Font();
        $font->name="Monsieur La Doulaise";
        $font->size="xx-large";
        $font->save();

        $font = new Font();
        $font->name="Mrs Saint Delafield";
        $font->size="xx-large";
        $font->save();

    }
}
