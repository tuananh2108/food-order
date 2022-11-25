<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\order;
use Faker\Generator as Faker;

$factory->define(order::class, function (Faker $faker) {
    return [
        'total' => $faker->randomFloat(0),
        'order_date' => $faker->dateTimeBetween('-5 years', now()),
        'customer_name' => $faker->name,
        'customer_email' => $faker->unique()->safeEmail,
        'customer_contact' => $faker->phoneNumber,
        'customer_address' => $faker->address,
    ];
});
