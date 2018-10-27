<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Sign up')
                    ->assertSee('Register')
                    ->value('#firstname_std','john')
                    ->value('#lastname_std','cena')
                    // ->value('#major_std','IT Management')
                    // ->value('#degree_std','Phd')
                    // ->value('#university_std','American University of Phnom Penh')
                    ->value('#name_std','abc123aaa12')
                    ->value('#email_std', 'abc123aaa12@gmail.com')
                    ->value('#phone_number_std', '0123456789123')
                    ->value('#password_std', 'john123456')
                    ->value('#password_confirmation_std', 'john123456')
                    ->click('#register_std')
                    // ->click('input[type="submit"]')
                    ->assertPathIs('/home');
                    // ->press('Register')
        });
    }
}
