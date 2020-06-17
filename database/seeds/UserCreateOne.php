<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserCreateOne extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'username' => 'test1',
            'first_name' => 'Chen',
            'last_name' => 'YingLu',
            'password' => Hash::make('123456'),
            'sex' => 'man',
            'email' => bcrypt('secret'),
        ]);
    }
}
