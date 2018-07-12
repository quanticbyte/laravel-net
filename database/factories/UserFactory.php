<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
/*
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
*/

//comensem creant companyies
/*
$factory->define(App\Companie::class, function(Generator $faker){
	$array = [
		'Comercial_name'	=>	$faker->unique()->companies,
		'real_name'			=>	$faker->unique()->companies,
		'cif'				=> 	$faker->unique()->bothify($string = '?########'), //a12345678
		'address'			=>	$faker->adresse,
		'contact_mail'		=>	$faker->unique()->email,
		'contact_name'		=> 	$faker->name,
		'admin_name'		=>	$faker->name,
		'contact_tel'		=>	$faker->e164PhoneNumber,
		'logo'				=>	$faker->imageUrl($width = 200, $height = 200),
	];
	return $array;
});
*/
//creant users
$factory->define(App\User::class, function(Faker $faker){
	$array = [
		'name'				=> $faker->name, 
		'email'				=> $faker->unique()->email, 
		'password'			=> Hash::make('123456'),
		'api_token'			=> Hash::make('123456'),
		//'password'			=> bcrypt('123456'),
		//'api_token'			=> bcrypt('123456'),
	];
	return $array;
});
//creant treballadors
/*
$factory->define(App\Employee::class, function(Generator $faker){
// => $faker->unique()->numberBetween($min = 1, $max = 50), //App\User::all()->random()->id,
	$array = [
		'company_id', 		=> App\Companie::all()->random()->id,
		'user_id',	  		=> App\User::all()->random()->id,		//asignado a un trabajador
		'id_op_empresa',	=> $faker->city, 
		'firstname',		=> $faker->firstName($gender = 'male'|'female'),
		'lastname',			=> $faker->lastName,
		'phone'				=> $faker->e164PhoneNumber,
	];
	return $array;
});
*/
//creant tools
/*
$factory->define(App\Tool::class, function(Generator $faker){
	$array = [
		'name', 			=> $faker->bothify('herramienta ##??'),
		'model', 			=> $faker->citySuffix,
		'image_url',		=> $faker->imageUrl($width = 200, $height = 200),
		'state',			=> $faker->boolean,
		'employee_id',		=> App\Employee::all()->random()->id,
		//'company_id',		=> DB::table('employees')->where('id', $array->employee_id)->get();//solo las id de employee de una misma empresa
		'company_id'		=> DB::table('users')->where('id', $array->employee_id)->select("id")->get(),
		'is_active',		=> $faker->boolean,
		'serial_number'		=> $faker->ean13,
	];
	return $array;
});
*/

