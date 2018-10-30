<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $data = [
            [
                'description'	=>  'GPA',
                'user_id'		=>  '3',
                'status'		=>  '1'
            ],
            [
                'description'	=>  'College',
                'user_id'		=>  '3',
                'status'		=>  '1'
            ],
            [
                'description'	=>  'Admission',
                'user_id'		=>  '3',
                'status'		=>  '1'
            ],
            [
                'description'	=>  'Scholarship',
                'user_id'		=>  '3',
                'status'		=>  '1'
            ],
            [
                'description'	=>  'GRE',
                'user_id'		=>  '3',
                'status'		=>  '1'
            ],
            [
                'description'	=>  'Career',
                'user_id'		=>  '3',
                'status'		=>  '1'
            ]
           
           
        ];

        Tag::insert($data);
    }
}
