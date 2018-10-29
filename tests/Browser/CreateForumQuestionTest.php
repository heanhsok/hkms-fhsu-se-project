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
                    ->assertSee('Join The Biggest Community Built for Cambodian University Students');
        });
    }
}
