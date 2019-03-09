<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserEducationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateUserEducation()
    {
        $result = factory(\App\UserEducation::class)->create([
            'user_id'=> 1,
            'school' => 'school test',
            'degree' => 'degree test',
            'major' => 'major test'
            ]);

        $expected = \App\UserEducation::find($result->id);

        $this->assertEquals($expected->school, $result->school);
        $this->assertEquals($expected->degree, $result->degree);
        $this->assertEquals($expected->major, $result->major);

    }

    public function testUpdateUserEducation()
    {
        $updated_edu = [
            'school' => 'school test updated',
            'degree' => 'degree test updated',
            'major' => 'major test updated'
        ];
        
        $this->assertTrue(\App\UserEducation::where('user_id',1)->first()->fill($updated_edu)->save());

    }

    public function testDeleteUserEducation()
    {
        $this->assertEquals(1,\App\UserEducation::where('user_id',1)->delete());
    }
}
