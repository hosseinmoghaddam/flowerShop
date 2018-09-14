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
        $Tag->name = 'گل های تولد و هدایا';
        $Tag->description = 'گل های که مناسب برای هدیه دادن در روز تولد است';
        $Tag->en_name = 'Birthday Flowers & Gifts';
        $Tag->save();


        $Tag = new Tag();
        $Tag->id = 2;
        $Tag->name = 'گلها و توت ها - کاملا جفت شده';
        $Tag->description = 'گل های که با توت فرنگی ست شده اند';
        $Tag->en_name = 'Flowers & Berries - Perfectly Paired';
        $Tag->save();


        $Tag = new Tag();
        $Tag->id = 3;
        $Tag->name = 'گیاهان تولد';
        $Tag->description = 'گیاهان فضای باز مناسب تزیین فضای سبز';
        $Tag->en_name = 'Birthday Plants';
        $Tag->save();


        $Tag = new Tag();
        $Tag->id = 4;
        $Tag->name = 'سبد هدیه و شیرینی';
        $Tag->description = 'سبد گل و شیرینی در کنار یک دیگر';
        $Tag->en_name = 'Gift Baskets & Sweets';
        $Tag->save();

        $Tag = new Tag();
        $Tag->id = 5;
        $Tag->name = 'تحویل در همان روز';
        $Tag->description = 'سبد گل و شیرینی در کنار یک دیگر';
        $Tag->en_name = 'Same Day Delivery';
        $Tag->save();



        //-------------------------------------------------


        $Tag = new Tag();
        $Tag->id = 6;
        $Tag->name = 'همدردی گل و هدایا';
        $Tag->description = 'گل هایی برای ابراز همدردی';
        $Tag->en_name = 'Sympathy Flowers & Gifts';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 7;
        $Tag->name = 'گیاهان همدردی';
        $Tag->description = 'گیاهانی برای ابراز همدردی';
        $Tag->en_name = 'Sympathy Plants';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 8;
        $Tag->name = 'گل های مراسم تشییع جنازه';
        $Tag->description = 'گل هایی که می توانید آن ها را برای مراسم تشییع جنازه استفاده کنید';
        $Tag->en_name = 'Funeral Flowers';
        $Tag->save();




        $Tag = new Tag();
        $Tag->id = 9;
        $Tag->name = 'گیاهان مراسم تشییع جنازه';
        $Tag->description = 'گیاهانی که می توانید آن ها را برای مراسم تشییع جنازه استفاده کنید';
        $Tag->en_name = 'Funeral Flowers';
        $Tag->save();

        //-------------------------------------------------




        $Tag = new Tag();
        $Tag->id = 10;
        $Tag->name = 'سالگرد';
        $Tag->description = 'گل هایی برای مراسم سالگرد';
        $Tag->en_name = 'Anniversary';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 11;
        $Tag->name = 'روز تولد';
        $Tag->description = 'گل هایی برای یادبود روز تولد';
        $Tag->en_name = 'Birthday';
        $Tag->save();


        $Tag = new Tag();
        $Tag->id = 12;
        $Tag->name = 'هدیه کسب و کار';
        $Tag->description = 'هدیه ای برای شروع یک کسب و کار تازه';
        $Tag->en_name = 'Business Gifting';
        $Tag->save();


        $Tag = new Tag();
        $Tag->id = 13;
        $Tag->name = 'نامزدی';
        $Tag->description = 'گل هایی برای هدیه نامزدی';
        $Tag->en_name = 'Engagement';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 14;
        $Tag->name = 'تشکر';
        $Tag->description = 'گل هایی برای تشکر از آنانی که دوستشان داریم';
        $Tag->en_name = 'Thank You';
        $Tag->save();




        $Tag = new Tag();
        $Tag->id = 15;
        $Tag->name = 'عشق و عاشقانه';
        $Tag->description = 'گل هایی برای ابراز عشق';
        $Tag->en_name = 'Love & Romance';
        $Tag->save();


        //-------------------------------------





        $Tag = new Tag();
        $Tag->id = 16;
        $Tag->name = 'تازه ها';
        $Tag->description = 'گل های جدید';
        $Tag->en_name = 'New Arrivals';
        $Tag->save();


        $Tag = new Tag();
        $Tag->id = 17;
        $Tag->name = 'گل سرخ';
        $Tag->description = 'گل سرخ';
        $Tag->en_name = 'Roses';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 18;
        $Tag->name = 'لاله ها';
        $Tag->description = 'لاله ها';
        $Tag->en_name = 'Tulips';
        $Tag->save();




        $Tag = new Tag();
        $Tag->id = 19;
        $Tag->name = 'آفتابگردان';
        $Tag->description = 'آفتابگردان';
        $Tag->en_name = 'Sunflowers';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 20;
        $Tag->name = 'ارکیده ها و گل های عجیب و غریب';
        $Tag->description = 'ارکیده ها و گل های عجیب و غریب';
        $Tag->en_name = 'Orchids & Exotic Flowers';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 21;
        $Tag->name = 'آلسترومریا - نیلوفرهای پرو';
        $Tag->description = 'آلسترومریا - نیلوفرهای پرو';
        $Tag->en_name = 'Alstroemeria - Peruvian Lilies';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 22;
        $Tag->name = 'نیلوفرهای';
        $Tag->description = 'نیلوفرهای';
        $Tag->en_name = 'Lilies';
        $Tag->save();




        $Tag = new Tag();
        $Tag->id = 23;
        $Tag->name = '	میخک صد پر';
        $Tag->description = '	میخک صد پر';
        $Tag->en_name = 'Carnations';
        $Tag->save();




        $Tag = new Tag();
        $Tag->id = 24;
        $Tag->name = 'گل مروارید';
        $Tag->description = 'گل مروارید';
        $Tag->en_name = 'Daisies';
        $Tag->save();


        //------------------------------------




        $Tag = new Tag();
        $Tag->id = 25;
        $Tag->name = 'گیاهان بونسای و گرمسیری';
        $Tag->description = 'گیاهان بونسای و گرمسیری';
        $Tag->en_name = 'Bonsai & Tropical Plants';
        $Tag->save();





        $Tag = new Tag();
        $Tag->id = 26;
        $Tag->name = 'گیاهان گلدار';
        $Tag->description = 'گیاهان گلدار';
        $Tag->en_name = 'Flowering Plants';
        $Tag->save();




        $Tag = new Tag();
        $Tag->id = 27;
        $Tag->name = 'گیاهان گلدار';
        $Tag->description = 'گیاهان گلدار';
        $Tag->en_name = 'Flowering Plants';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 28;
        $Tag->name = 'گیاهان سبز';
        $Tag->description = 'گیاهان سبز';
        $Tag->en_name = 'Green Plants';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 29;
        $Tag->name = 'گیاهان اداری';
        $Tag->description = 'گیاهان اداری';
        $Tag->en_name = 'Office Plants';
        $Tag->save();




        $Tag = new Tag();
        $Tag->id = 30;
        $Tag->name = 'ساکارز و کاکتوس';
        $Tag->description = 'ساکارز و کاکتوس';
        $Tag->en_name = 'Succulents & Cactuses';
        $Tag->save();




        $Tag = new Tag();
        $Tag->id = 31;
        $Tag->name = 'تاج گل';
        $Tag->description = 'تاج گل';
        $Tag->en_name = 'Wreaths';
        $Tag->save();

        //----------------------------------------



        $Tag = new Tag();
        $Tag->id = 32;
        $Tag->name = 'درمان های تولد';
        $Tag->description = 'درمان های تولد';
        $Tag->en_name = 'Birthday Treats';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 33;
        $Tag->name = 'کیک ترش، کیک و ترفل';
        $Tag->description = 'کیک ترش، کیک و ترفل';
        $Tag->en_name = 'Cake Pops, Cakes & Truffles';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 34;
        $Tag->name = 'شکلات ها و شیرینی ها';
        $Tag->description = 'شکلات ها و شیرینی ها';
        $Tag->en_name = 'Chocolates & Sweets';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 35;
        $Tag->name = 'کوکی ها تزئین شده';
        $Tag->description = 'کوکی ها تزئین شده';
        $Tag->en_name = 'Decorated Cookies';
        $Tag->save();

        //------------------------------------------------------------



        $Tag = new Tag();
        $Tag->id = 36;
        $Tag->name = 'هدایای شخصی';
        $Tag->description = 'هدایای شخصی';
        $Tag->en_name = 'Personalized Gifts';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 37;
        $Tag->name = 'هدیه های زیر 30 هزار تومان ';
        $Tag->description = 'هدیه های زیر 30 هزار تومان ';
        $Tag->en_name = 'Gifts Under 30000 Toman';
        $Tag->save();

        //---------------------------------------------------------------------



        $Tag = new Tag();
        $Tag->id = 38;
        $Tag->name = 'استرالیا';
        $Tag->description = 'گل های استرالیایی';
        $Tag->en_name = 'Australia';
        $Tag->save();




        $Tag = new Tag();
        $Tag->id = 39;
        $Tag->name = 'کانادا';
        $Tag->description = 'گل های کانادایی';
        $Tag->en_name = 'Canada';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 40;
        $Tag->name = 'چین';
        $Tag->description = 'گل های چینی';
        $Tag->en_name = 'China';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 41;
        $Tag->name = 'فرانسه';
        $Tag->description = 'گل های فرانسوی';
        $Tag->en_name = 'France';
        $Tag->save();



        $Tag = new Tag();
        $Tag->id = 42;
        $Tag->name = 'آلمان';
        $Tag->description = 'گل های فرانسوی';
        $Tag->en_name = 'Germany ';
        $Tag->save();
    }
}
