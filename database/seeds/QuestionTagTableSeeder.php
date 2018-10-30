<?php

use Illuminate\Database\Seeder;

class QuestionTagTableSeeder extends Seeder
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
        		'question_id' = '1',
        		'tag_id' 	  = '1'
        	],
        	[
        		'question_id' = '1',
        		'tag_id' 	  = '2'
        	],
        	[
        		'question_id' = '6',
        		'tag_id' 	  = ''
        	],
        	[
        		'question_id' = '2',
        		'tag_id' 	  = '2'
        	],
        	[
        		'question_id' = '2',
        		'tag_id' 	  = '3'
        	]
        ];
    }

    QuestionTag::insert($data);
}
