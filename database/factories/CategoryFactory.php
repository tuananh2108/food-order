<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\category;
use Faker\Generator as Faker;

$factory->define(category::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->title,
    ];
});
