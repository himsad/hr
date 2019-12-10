<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\account;
use Faker\Generator as Faker;

$factory->define(account::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'balance' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
