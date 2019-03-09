<?php

use Faker\Generator as Faker;

$factory->define(App\UserProfile::class, function (Faker $faker) {
    return [
        //
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),                                
        'isStudent' => $faker->randomElement([0,1]),
        'gender' => $faker->randomElement(['male','female']),
        'phone_number' => $faker->phoneNumber(),
        'biography' => $faker->text(150),
        'profile_picture' => 'default.png',
        'street_number' => $faker->buildingNumber(),
        'street_name' => $faker->streetName(),
        'commune' => $faker->streetName(),
        'district' => $faker->streetName(),
        'city' => $faker->city(),
        'country' => $faker->country()
    ];
});

// factory(App\UserProfile::class)->create(['user_id'=>1])
