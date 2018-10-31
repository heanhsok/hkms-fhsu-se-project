<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->assertSee('Login')
                    ->value('#inputEmail', 'standard@gmail.com')
                    ->value('#inputPassword', 'standard')
                    ->click('#login')
                    ->assertPathIs('/home');
        });
    }
}
