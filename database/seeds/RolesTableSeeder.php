<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'name'          =>  'standard',
                'display_name'  =>  'Vendor',
                'description'   =>  'Role for Standard User'
            ],
            [
                'name'          =>  'premiem',
                'display_name'  =>  'Premiem',
                'description'   =>  'Role for Premiem User'
            ],
            [
                'name'          =>  'admin',
                'display_name'  =>   'Administrator',
                'description'   =>  'Role for Administrator User'
            ]
        ];

        Role::insert($data);

    }
}
