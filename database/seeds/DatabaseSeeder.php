<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(OpportunityPagesTableSeeder::class);
        $this->call(OpportunityPagePostsTableSeeder::class);
        $this->call(QuestionTagTableSeeder::class);
        $this->call(TagTableSeeder::class);
        
    }
}
