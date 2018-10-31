<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserVolunteerExpTest extends TestCase
{
    public function testCreateUserVolunteerExp()
    {
        $result = factory(\App\UserVolunteerExp::class)->create([
            'user_id'=> 1,
            'role' => 'role test',
            'organization' => 'organization test'
            ]);

        $expected = \App\UserVolunteerExp::find($result->id);

        $this->assertEquals($expected->role, $result->role);
        $this->assertEquals($expected->organization, $result->organization);

    }

    public function testUpdateUserVolunteerExp()
    {
        $updated = [
            'role' => 'role test',
            'organization' => 'organization test'
        ];
        
        $this->assertTrue(\App\UserVolunteerExp::where('user_id',1)->first()->fill($updated)->save());

    }

    public function testDeleteUserVolunteerExp()
    {
        $this->assertEquals(1,\App\UserVolunteerExp::where('user_id',1)->delete());
    }
}
