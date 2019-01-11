<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'login'  =>  'login',
            'password'  =>  Hash::make('password'),
            'firstname'  =>  'aaa',
            'lastname'  =>  'sss',
            'tel'  =>  '456457',
            'email'  =>  'sss@ss.ss',
            'nickname'  =>  'sss',
            'remember_token'  =>  str_random(10)
        ]);
    }
}
