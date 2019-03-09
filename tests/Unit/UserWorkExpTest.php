<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserWorkExpTest extends TestCase
{
    public function testCreateUserUserWorkExp()
    {
        $result = factory(\App\UserWorkExp::class)->create([
            'user_id'=> 1,
            'specialty' => 'specialty test',
            'position' => 'position test',
            'workplace' => 'workplace test'
            ]);

        $expected = \App\UserWorkExp::find($result->id);

        $this->assertEquals($expected->specialty, $result->specialty);
        $this->assertEquals($expected->position, $result->position);
        $this->assertEquals($expected->workplace, $result->workplace);

    }

    public function testUpdateUserWorkExp()
    {
        $updated = [
            'specialty' => 'specialty test',
            'position' => 'position test',
            'workplace' => 'workplace test'
        ];
        
        $this->assertTrue(\App\UserWorkExp::where('user_id',1)->first()->fill($updated)->save());

    }

    public function testDeleteUserWorkExp()
    {
        $this->assertEquals(1,\App\UserWorkExp::where('user_id',1)->delete());
    }
}
