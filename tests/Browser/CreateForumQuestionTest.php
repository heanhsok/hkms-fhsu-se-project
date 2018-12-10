<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateForumQuestionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCreateForumQuestion()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->loginAs(\App\user::find(1))
                    ->visit('/forum')
                    ->assertPathIs('/forum');
                    // ->value('#header','This is Question Autogenerated By Test.')
                    // ->value('#description','This is the description of the above test question.')
                    // ->click('#submit')
                    // ->assertPathIs('/forum');
        });
         
    }
}
