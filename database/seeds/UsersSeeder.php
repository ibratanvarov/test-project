<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Ibrat',
            'phone'=>'998935735870',
            'email'=>'ibratanvar@gmail.com',
            'birthdate'=>date('1993-05-28'),
            'password'=>bcrypt('i2651480'),
        ]);
        User::create([
            'name'=>'Jamshid',
            'phone'=>'998908059669',
            'email'=>'ibratjamshid@gmail.com',
            'birthdate'=>date('1995-05-28'),
            'password'=>bcrypt('i2651481'),
        ]);
        User::create([
            'name'=>'Oybek',
            'phone'=>'99845420909',
            'email'=>'ibradanvar@gmail.com',
            'birthdate'=>date('1998-05-28'),
            'password'=>bcrypt('i2651470'),
        ]);
        User::create([
            'name'=>'Xurshid',
            'phone'=>'998946757575',
            'email'=>'ibratxurshidr@gmail.com',
            'birthdate'=>date('1999-05-28'),
            'password'=>bcrypt('i3651480'),
        ]);
        User::create([
            'name'=>'Elnur',
            'phone'=>'998935635870',
            'email'=>'ibranvar@gmail.com',
            'birthdate'=>date('1999-03-30'),
            'password'=>bcrypt('i2650480'),
        ]);

    }
}
