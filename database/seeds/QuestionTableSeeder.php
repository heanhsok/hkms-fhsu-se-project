<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
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
                'header'		=>  'How does my GPA affect my future career?',
                'description'	=>  'What does GPA really tell about how am I going to perform at work, or how I play as a team. While it tells about how good I am with test taking but it doesn\'t explicit what matters to perform well on a job. But will it affect my chance of getting a job anyway?',
                'user_id'		=>  '1'
            ],
            [
                'header'		=>  'Should I consider taking a gap year?',
                'description'	=>  'I\'ll finish high school by next year and I haven\'t figured what path I want to choose for my college education yet. I\'m turning 20 now and I\'m afraid it might be too late to go to college after taking one year of gap year. What do you think?',
                'user_id'		=>  '1'
            ]
    }

    Question::insert($data);

}
