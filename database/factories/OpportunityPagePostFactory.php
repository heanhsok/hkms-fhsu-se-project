<?php

use Faker\Generator as Faker;

$factory->define(App\OpportunityPagePost::class, function (Faker $faker) {
    return [
        'opportunity_page_id' => App\OpportunityPage::all()->random()->id,
        'user_id' => App\User::all()->random()->id,
        'title' => $faker->sentence(5),
        'institution' => $faker->company(),
        'category' => $faker->randomElement(['Technology', 'Bank', 'Telecommunication', 'Business', 'Economic']),
        'picture' =>  'opportunity.png',
        'description' => $faker->paragraph(rand(15,20)),
        'requirement' => $faker->paragraph(rand(15,20)),
        'contact' => $faker->phoneNumber(),
        'location' => $faker->address(),
        'start_date' => $faker->dateTimeBetween('-5 months', '-2 months')->format('Y-m-d'),
        'end_date' => $faker->dateTimeBetween('+2 months', '+5 months')->format('Y-m-d')

    ];
});

// factory(App\OpportunityPagePost::class,50)->create()
