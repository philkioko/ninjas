<?php

use Illuminate\Database\Seeder;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
    		 'email' =>' kiokophil@gmail.com',
    		 'name'  => 'philip',
    		 'password' =>bcrypt("123")
    		]);
    }
}
