<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->agregandousuario();
        factory(cinema\User::class,49)->create();
    }

    private function agregandousuario(){
    	\DB::table('users')->insert(array(
    		'name'=>'Gustavo Inocente',
    		'email'=>'gustavo.inocente.17@gmail.com',
    		'password'=>bcrypt('admin123'),
    	));
    }
}
