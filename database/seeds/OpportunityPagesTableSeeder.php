<?php

use Illuminate\Database\Seeder;
use \App\OpportunityPage;

class OpportunityPagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Event',
                'type' => 'event',
                'desc'=> 'Event Page'
            ],
            [
                'title' => 'Competition',
                'type' => 'competition',
                'desc'=> 'Competition Page'
            ],
            [
                'title' => 'Scholarship',
                'type' => 'scholarship',
                'desc'=> 'Scholarship Page'
            ],
            [
                'title' => 'Internship',
                'type' => 'internship',
                'desc'=> 'Internship Page'
            ],
            [
                'title' => 'Career',
                'type' => 'career',
                'desc'=> 'Career Page'
            ],
            [
                'title' => 'Volunteer',
                'type' => 'volunteer',
                'desc'=> 'Volunteer Page'
            ]
        ];

        OpportunityPage::insert($data);
    }

    
}
