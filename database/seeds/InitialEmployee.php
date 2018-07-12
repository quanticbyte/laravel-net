<?php

use Illuminate\Database\Seeder;

class InitialEmployee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('employees')->insert([
        	'company_id' 		=> 1,
        	'user_id'			=> 1,
        	'id_op_empresa'		=> 'Master Of Universe',
        	'firstname'			=> 'Pau',
        	'lastname'			=> 'Catalán',
        	'phone'				=> '321321321',
        ]);
    }
}
