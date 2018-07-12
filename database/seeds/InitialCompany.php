<?php

use Illuminate\Database\Seeder;

class InitialCompany extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('companies')->insert([
        	
            'comercial_name' 	=>  'EmpresaDemo',
            'real_name'			=>  'Demo SL',
            'cif'				=>	'A1234567',
            'address'			=>	'Carrer Ramon Muntaner nº4 GIRONA 17000',
            'contact_name'		=> 	'Pau',
            'contact_mail'		=> 	'suport@empresademo.com',
            'admin_name'		=>	'Pau',
            'contact_tel'		=>	'123123123',
        ]);
    }
}
