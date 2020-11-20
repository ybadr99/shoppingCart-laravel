<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        // 'title' => $faker->sentence(6),
        // 'price' => $faker->numberBetween(50,300),
        // // 'image' => $faker->imageUrl($width = 480, $height = 280,'technics'),
        // 'image' => $faker->image('public/storage/images',640,480,'technics'),
    ];
});
