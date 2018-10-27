<?php

use Illuminate\Database\Seeder;

class OpportunityPagePostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\OpportunityPagePost::class,50)->create();
    }
}
