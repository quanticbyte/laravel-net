<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
		'company_id' 		=> App\Companie::all()->random()->id,
		'user_id'	  		=> App\User::all()->random()->id,		//asignado a un trabajador
		'id_op_empresa'		=> $faker->city, 
		'firstname'			=> $faker->firstName($gender = 'male'|'female'),
		'lastname'			=> $faker->lastName,
		'phone'				=> $faker->e164PhoneNumber,
    ];
});
