<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateOpportunityPagePostTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCreateOpportunityPagePost()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->loginAs(\App\User::find(2))
                    ->visit('/opportunity')
                    ->assertPathIs('/opportunity')
                    ->clickLink('Create New Opportunity')
                    ->assertSee('Post in Opportunity Page')
                    ->attach('picture_file', storage_path('app/public/testing/opportunity.png'))
                    ->value('#title', 'Title Test')
                    ->value('#institution', 'Institution Test')
                    ->value('#category', 'Category Test')
                    ->value('#description', 'Description Tet')
                    ->value('#requirement', 'Requirement Test')
                    ->value('#contact', 'Contact Test')
                    ->value('#location', 'Location Test')
                    ->click('#create')
                    ->assertSee('Edit');
                });
    }

    //php artisan dusk tests/Browser/CreateOpportunityPagePostTest.php
}
