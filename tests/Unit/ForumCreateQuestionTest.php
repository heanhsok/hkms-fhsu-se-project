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
        $question = factory(\App\Question::class)->create([
        	'user_id' => 1,
        	'header' => 'This is test question',
        	'description' => 'This is test description'
        ]);

        $this->assertNotNull($question);

        $this->assertEquals('This is test question',$question->header);
        $this->assertEquals('This is test description',$question->description);
        $this->assertEquals(1,$question->user_id);
    }

}
