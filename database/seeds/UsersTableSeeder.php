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
            'name'=>'ณัฐพล เจริญชัย',
            'username' => 'nattaponJ',
            'position'=> 'เจ้าหน้าที่หน่วยสุขภาวะ',
            'employee_number'=>'5030145721',
            'email'=>'nattaponJ@mail.com',
            'password'=>'1234',
        ]);

        User::create([
            'name'=>'พีระพงศ์ ศรีเจริญกุล',
            'username' => 'peerapongS',
            'position'=> 'เจ้าหน้าที่หน่วยสุขภาวะ',
            'employee_number'=>'5030145722',
            'email'=>'peerapongS@mail.com',
            'password'=>'1234',
        ]);

        User::create([
            'name'=>'กุลธิดา นามดี',
            'username' => 'kulthidaN',
            'position'=> 'เจ้าหน้าที่การเงิน',
            'employee_number'=>'5030145723',
            'email'=>'kulthidaN@mail.com',
            'password'=>'1234',
        ]);
    }
}
