<?php

use Faker\Generator as Faker;

//$factory->define(Model::class, function (Faker $faker) {
$factory->define(App\Companie::class, function (Faker $faker) {
    return [
		'Comercial_name'	=>	$faker->unique()->company,
		'real_name'			=>	$faker->unique()->company,
		'cif'				=> 	$faker->unique()->bothify($string = '?########'), //a12345678
		'address'			=>	$faker->address,
		'contact_mail'		=>	$faker->unique()->email,
		'contact_name'		=> 	$faker->name,
		'admin_name'		=>	$faker->name,
		'contact_tel'		=>	$faker->e164PhoneNumber,
		'logo'				=>	$faker->imageUrl($width = 200, $height = 200),
    ];
});
