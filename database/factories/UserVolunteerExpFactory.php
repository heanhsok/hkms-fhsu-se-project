<?php

use Faker\Generator as Faker;

$factory->define(App\UserVolunteerExp::class, function (Faker $faker) {
    return [
        //
        'role' => $faker->randomElement(['Sale','Logistic','Public Relation','Technical']),
        'organization' => $faker->randomElement(['United Nation','FUSAAC','AISEEC','PUC']),
        'desc' => $faker->text(150),
        'start_date' => $faker->dateTimeBetween('-5 years', '-2 years')->format('Y-m-d'),
        'end_date' => $faker->dateTimeBetween('+2 years', '+5 years')->format('Y-m-d')
    ];
});

// factory(App\UserVolunteerExp::class)->create(['user_id'=>1])