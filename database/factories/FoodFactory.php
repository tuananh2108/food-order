<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\{food, category};
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(food::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => Str::random(100),
        'price' => $faker->randomFloat(0),
        'image'  => $faker->image,
        'category_id' => category::all()->random()->id,
        'region' => $faker->randomElement(['northern', 'central', 'southern']),
    ];
});
