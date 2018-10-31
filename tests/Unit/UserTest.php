<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{

    public function testCreateUser() 
    {
        $result = factory(\App\User::class,1)
                    ->create(['name'=>'heanhsok'])
                    ->each(function($u) { $u->attachRole(2); })
                    ->first();
        
        $expected = \App\User::where('name','heanhsok')->first();

        $this->assertEquals($expected->name, $result->name);
    }

    //.\vendor\bin\phpunit
}