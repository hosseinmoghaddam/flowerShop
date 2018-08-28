<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});



$factory->define(App\Product::class, function () {

    return [
        'name' => 'تستستتستس',
        'description' => 'تستس تستست تستست',
        'image1' =>  '/site/image/product/apple_cinema_30-220x330.jpg',
        'image2' =>  '/site/image/product/apple_cinema_30-220x330.jpg',
        'image3' =>  '/site/image/product/apple_cinema_30-220x330.jpg',
        'image4' =>  '/site/image/product/apple_cinema_30-220x330.jpg',
        'rate' => 5,
        'price' => 5,
    ];
});