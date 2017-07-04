<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::truncate();

        User::create([
            'name'=>'michael',
            'email'=>'michael@mail.com',
            'password'=>'1234',
        ]);

        User::create([
            'name'=>'nathan',
            'email'=>'nathan@mail.com',
            'password'=>'1234',
        ]);

        User::create([
            'name'=>'simon',
            'email'=>'simon@mail.com',
            'password'=>'1234',
        ]);
    }
}
