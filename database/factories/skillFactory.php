<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\skill;
use Faker\Generator as Faker;

$factory->define(skill::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'start_date' => $faker->word,
        'skill_level' => $faker->word,
        'past_work_history' => $faker->text,
        'any_other_information' => $faker->text,
        'admin_interview' => $faker->date('Y-m-d H:i:s'),
        'admin_user_id' => $faker->randomDigitNotNull,
        'score' => $faker->word,
        'interview_status' => $faker->word,
        'interview_amount_paid' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
