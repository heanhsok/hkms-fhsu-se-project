<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateUserProfile()
    {
        $result = factory(\App\UserProfile::class)->create(['user_id'=>1]);
        $expected = \App\User::find(1)->user_profile()->first();

        $this->assertEquals($expected->first_name, $result->first_name);
        $this->assertEquals($expected->last_name, $result->last_name);
        $this->assertEquals($expected->gender, $result->gender);
        $this->assertEquals($expected->biography, $result->biography);
        $this->assertEquals($expected->profile_picture, $result->profile_picture);
        $this->assertEquals($expected->street_number, $result->street_number);
        $this->assertEquals($expected->street_name, $result->street_name);
        $this->assertEquals($expected->commune, $result->commune);
        $this->assertEquals($expected->district, $result->district);
        $this->assertEquals($expected->city, $result->city);
        $this->assertEquals($expected->country, $result->country);
        $this->assertEquals($expected->phone_number, $result->phone_number);
    }

    public function testUpdateUserProfile() {

        $updated_profile = [
            'first_name' => 'first_name test',
            'last_name' => 'last_name test',
            'biography' => 'biography test',
            'street_number' => 'street_number test',
            'street_name' => 'street_name test',
            'commune' => 'commune test',
            'district' => 'district test',
            'city' => 'city test',
            'country' => 'country test',
            'phone_number' => 'phone_number test',
        ];

        $this->assertTrue(\App\UserProfile::where('user_id',1)->first()->fill($updated_profile)->save());

        $result = \App\User::find(1)->user_profile()->first();
    
        $this->assertEquals('first_name test', $result->first_name);
        $this->assertEquals('last_name test', $result->last_name);
        $this->assertEquals('biography test', $result->biography);
        $this->assertEquals('street_number test', $result->street_number);
        $this->assertEquals('street_name test', $result->street_name);
        $this->assertEquals('commune test', $result->commune);
        $this->assertEquals('district test', $result->district);
        $this->assertEquals('city test', $result->city);
        $this->assertEquals('country test', $result->country);
        $this->assertEquals('phone_number test', $result->phone_number);
    }

    public function testDeleteUserProfile() {
        $this->assertEquals(1,\App\UserProfile::where('user_id',1)->delete());
    }

}
