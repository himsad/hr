<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\invitation;
use Faker\Generator as Faker;

$factory->define(invitation::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'sender_contact' => $faker->word,
        'receiver_user_id' => $faker->randomDigitNotNull,
        'organisation_id' => $faker->randomDigitNotNull,
        'job_id' => $faker->randomDigitNotNull,
        'interview_status' => $faker->word,
        'date_of_interview' => $faker->date('Y-m-d H:i:s'),
        'invitation_note' => $faker->text,
        'employer_interview_note' => $faker->text,
        'jobseeker_post_interview_review' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
