<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Tag = new Tag();
        $Tag->name = 'گل های آپارتمانی';
        $Tag->description = 'این یه تسته';
        $Tag->en_name = 'sdfew';
        $Tag->save();


        $Tag = new Tag();
        $Tag->name = 'گل های فضای باز';
        $Tag->description = 'این یه تسته';
        $Tag->en_name = 'dsmf';
        $Tag->save();


        $Tag = new Tag();
        $Tag->name = 'کاکتوس';
        $Tag->description = 'این یه تسته';
        $Tag->en_name = 'smdfj';
        $Tag->save();

    }
}
