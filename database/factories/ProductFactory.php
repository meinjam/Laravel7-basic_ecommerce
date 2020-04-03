<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'image' => 'img/products/unnamed.jpg',
        'price' => $faker->numberBetween(100, 2000),
        'description' => $faker->paragraph(6),
    ];
});
