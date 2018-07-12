<?php

use Faker\Generator as Faker;

$factory->define(App\Tool::class, function (Faker $faker) {
    
    $employee_id = App\Employee::all()->random()->id;
    //$company_id  = DB::table('users')->where('id', $employee_id)->select("id")->get();
    $company_id  = DB::table('employees')->where('id', $employee_id)->select("company_id")->get(); //Incorrect integer value: '[{"company_id":6}]'
    $company_id = json_decode($company_id, true);
    //$company_id  = $company_id->company_id;
    //var_dump($company_id);
    $company_id = $company_id[0]['company_id'];
    //var_dump($company_id);

    $array = [
		//creant tools
		'name'	 			=> $faker->bothify('herramienta ##??'),
		'model'	 			=> $faker->citySuffix,
		'image_url'			=> $faker->imageUrl($width = 200, $height = 200),
		'state'				=> $faker->boolean,
		//'employee_id'		=> App\Employee::all()->random()->id,
		//'company_id'		=> DB::table('users')->where('id', $array->employee_id)->select("id")->get(),
		'employee_id'		=> $employee_id,
		'company_id'		=> $company_id,
		'is_active'			=> $faker->boolean,
		'serial_number'		=> $faker->ean13,
	];
	return $array;
});

