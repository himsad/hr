<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\country;
use Faker\Generator as Faker;

$factory->define(country::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'code' => $faker->word,
        'currency' => $faker->word,
        'phone' => $faker->word,
        'flag' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
