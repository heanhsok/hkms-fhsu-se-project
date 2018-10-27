<?php

use Faker\Generator as Faker;

$factory->define(App\UserWorkExp::class, function (Faker $faker) {
    return [
        //
        'specialty' => $faker->randomElement(['Computer Science','Math','Business','Law']),
        'position' => $faker->randomElement(['Faculty Member','Professor','Researcher','Recruiter']),
        'workplace' => $faker->randomElement(['AUPP', 'RUPP', 'IFL','CamEd']),
        'desc' => $faker->text(150),
        'start_date' => $faker->dateTimeBetween('-5 years', '-2 years')->format('Y-m-d'),
        'end_date' => $faker->dateTimeBetween('+2 years', '+5 years')->format('Y-m-d')
    ];
});

// factory(App\UserWorkExp::class)->create(['user_id'=>1])
