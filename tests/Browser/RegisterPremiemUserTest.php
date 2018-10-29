<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterPremiemUsertest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegisterPremiemUser()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Sign up')
                    ->assertSee('Register')
                    ->click('#register_premeiem_tab')
                    ->value('#firstname_prm','john')
                    ->value('#lastname_prm','cena')
                    ->value('#position_prm','Professor')
                    ->value('#specialty_prm','Computer Science')
                    ->value('#workplace_prm','American Univeristy of Phnom Penh')
                    ->value('#name_prm','abcde3')
                    ->value('#email_prm', 'abcde3@gmail.com')
                    ->value('#phone_number_prm', '0123456789123')
                    ->value('#password_prm', 'john123456')
                    ->value('#password_confirmation_prm', 'john123456')
                    ->click('#register_prm')
                    ->assertPathIs('/home');
        });
    }
}
