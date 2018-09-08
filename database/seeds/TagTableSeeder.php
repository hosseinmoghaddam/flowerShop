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
        $Tag->id = 1;
        $Tag->name = 'گل های آپارتمانی';
        $Tag->description = 'سبزی کامل گیاهان آپارتمانی هماهنگی بیشتری با رنگ ‌های دکوراسیون منزل شما دارند';
        $Tag->en_name = 'apartment flowers';
        $Tag->save();


        $Tag = new Tag();
        $Tag->id = 2;
        $Tag->name = 'گل های فضای باز';
        $Tag->description = 'این یه تسته';
        $Tag->en_name = 'Outdoor flowers';
        $Tag->save();


        $Tag = new Tag();
        $Tag->id = 3;
        $Tag->name = 'کاکتوس';
        $Tag->description = 'گیاهان فضای باز مناسب تزیین فضای سبز';
        $Tag->en_name = 'Cactus';
        $Tag->save();

    }
}
