<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{

    // use RefreshDatabase;

    // /**
    //  * A basic test example.
    //  *
    //  * @return void
    //  */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }

    public function test_if_it_fetches_all_users() 
    {
        // assumption - create playground

        factory(\App\User::class, 10)->create()->each(function($u) { $u->attachRole(1); });

        $result = factory(\App\User::class,1)->create(['name'=>'aheanhsok'])->each(function($u) { $u->attachRole(2); })->first();


        // call actual method to test

        $expected = \App\User::where('name','aheanhsok')->first();


        // test using assertions

        $this->assertEquals($expected->name, $result->name);
    }

}


// given i have two records in the db that are posts
// and each oen is posted a month a part

// when i fetch the archives

// then the response should be in the proper format