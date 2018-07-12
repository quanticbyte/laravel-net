<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	//creando primera empresa
        $this->call(InitialCompany::class);
        //creando usuario inicial
    	$this->call(InitialUser::class);
        //creando primer trabajador
        $this->call(InitialEmployee::class);

        //afegint els factory
        //empresas
        factory(App\Companie::class, 15)->create();
        //usuaris
        factory(App\User::class, 25)->create();
        //Employees
        factory(App\Employee::class,25)->create();
        //tools
        factory(App\Tool::class,100)->create();

    }
}
