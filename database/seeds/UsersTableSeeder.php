<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\User')->create([
            'name'      => 'Vladimir',
            'email'     => 'vladimir.vulovic@quantox.com',
            'password'  => bcrypt('password')
        ]);
    }
}
