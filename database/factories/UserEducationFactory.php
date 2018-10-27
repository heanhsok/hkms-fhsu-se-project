<?php

use Faker\Generator as Faker;

$factory->define(App\UserEducation::class, function (Faker $faker) {
    return [
        'school' => $faker->randomElement(['AUPP', 'RUPP', 'IFL']) ,
        'degree' => $faker->randomElement(['BS','MS', 'Phd']),
        'major' => $faker->randomElement(['CS', 'ITM','Business']),
        'grade' => $faker->randomFloat(2,2,4),
        'desc' => $faker->text(150),
        'start_date' => $faker->dateTimeBetween('-5 years', '-2 years')->format('Y-m-d'),
        'end_date' => $faker->dateTimeBetween('+2 years', '+5 years')->format('Y-m-d')
    ];
});
// factory(App\UserEducation::class)->create(['user_id'=>1])
