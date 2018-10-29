<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterStandardUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegisterStandardUser()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Sign up')
                    ->assertSee('Register')
                    ->value('#firstname_std','john')
                    ->value('#lastname_std','cena')
                    ->value('#major_std','IT Management')
                    ->value('#degree_std','Phd')
                    ->value('#university_std','American University of Phnom Penh')
                    ->value('#name_std','abcde5')
                    ->value('#email_std', 'abcde5@gmail.com')
                    ->value('#phone_number_std', '0123456789123')
                    ->value('#password_std', 'john123456')
                    ->value('#password_confirmation_std', 'john123456')
                    ->click('#register_std')
                    ->assertPathIs('/home');
        });
    }
}
