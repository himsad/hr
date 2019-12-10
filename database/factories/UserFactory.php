<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\user;
use Faker\Generator as Faker;

$factory->define(user::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'email' => $faker->word,
        'email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'password' => $faker->word,
        'status' => $faker->word,
        'role_id' => $faker->word,
        'city' => $faker->word,
        'state' => $faker->word,
        'country_id' => $faker->word,
        'skills' => $faker->text,
        'is_actively_seeking_employment' => $faker->word,
        'remember_token' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
