<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // load default user account

        $data = [
            [
                'name' => 'standard',
                'email' => 'standard@gmail.com',
                'password' => Hash::make('standard'),
            ],
            [
                'name' => 'premiem',
                'email' => 'premiem@gmail.com',
                'password' => Hash::make('premiem'),
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
            ]
        ];

        User::insert($data);
        
        $user = User::where('email', '=', 'standard@gmail.com')->first();
        $user->attachRole(1);

        $user = User::where('email', '=', 'premiem@gmail.com')->first();
        $user->attachRole(2);

        $user = User::where('email', '=', 'admin@gmail.com')->first();
        $user->attachRole(3);

        // load testing user account

        factory(App\User::class, 147)
            ->create()->each(function($u) { 
                $u->attachRole(rand(1,2));
                factory(App\UserProfile::class)->create(['user_id'=>$u->id]);
                factory(App\UserWorkExp::class,rand(3,4))->create(['user_id'=>$u->id]);
                factory(App\UserEducation::class,rand(1,2))->create(['user_id'=>$u->id]);
                factory(App\UserVolunteerExp::class,rand(3,4))->create(['user_id'=>$u->id]);
            });
    }
}
