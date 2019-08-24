<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name'=>"ADMIN",
            'username' =>  'heroku@gmail.com',
            'email' => 'heroku@gmail.com',
            'password' => bcrypt('11111111'),
        ]);
    }
}
