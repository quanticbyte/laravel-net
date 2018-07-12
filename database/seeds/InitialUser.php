<?php

use Illuminate\Database\Seeder;

class InitialUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
        	'rol' => 0,
        	'is_active' => 1,
        	'name' => 'Pau',
        	'email' => 'paucatalan80@gmail.com',
        	'password' =>  Hash::make('123456'),
        	'api_token' => Hash::make('123456'),
        ]);
    }
}
