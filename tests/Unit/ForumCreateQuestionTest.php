<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ForumCreateQuestionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateForumQuestion()
    {
        
        $question = \App\Question::create([
        	'user_id' => 2,
        	'header' => 'This is test question',
        	'description' => 'This is test description'
        ]);

        $this->assertNotNull($question);

        $this->assertEquals('This is test question',$question->header);
        $this->assertEquals('This is test description',$question->description);
        $this->assertEquals(2,$question->user_id);
    }

    public function testUpdateForumQuestion() {
        $updated = [
        	'user_id' => 2,
        	'header' => 'This is test question test',
        	'description' => 'This is test description test'
        ];

        $this->assertTrue(\App\Question::where('user_id',2)->first()->fill($updated)->save());

    }

    public function testDeleteForumQuestion()
    {
        $this->assertEquals(1,\App\Question::where('user_id',2)->first()->delete());
    }

}
