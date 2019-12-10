<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\organisation;
use Faker\Generator as Faker;

$factory->define(organisation::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'description' => $faker->text,
        'city' => $faker->word,
        'state' => $faker->word,
        'country_id' => $faker->word,
        'contact_details' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
