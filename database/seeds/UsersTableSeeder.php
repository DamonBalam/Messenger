<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' 		=> 'Arturo',
        	'email' 	=> 'damonbalam@gmail.com',
        	'password' 	=> bcrypt('123456')
        ]);

        User::create([
        	'name' 		=> 'Omar',
        	'email' 	=> 'omar@gmail.com',
        	'password' 	=> bcrypt('123456')
        ]);
    }
}
