<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Adherant;
use Faker\Generator as Faker;

$factory->define(Adherant::class, function (Faker $faker) {
    return [
        'code' => \Str::random(6),
        'first_name' => $faker->name,
        'last_name'  => $faker->name,
        'email' => $faker->email,
        'country' => $faker->country,
        'city'    => $faker->city,
        'phone' => '68 35 73 97'
    ];
});
