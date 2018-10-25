<?php

namespace Tests\Feature;

// use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laracasts\Integrated\Extensions\Laravel as IntegrationTest;

class UserTest extends IntegrationTest
{
    // /**
    //  * A basic test example.
    //  *
    //  * @return void
    //  */
    // public function testExample()
    // {
    //     $response = $this->get('/about');

    //     $response->assertStatus(200);
    // }

    // public function test_about_return_sth() {
    //     $response = $this->get('/about');

    //     $response->assertSee('about');
    // }

    /* A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/');
    }
}
