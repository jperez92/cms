<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 29)->create();
       
       App\User::create([

       	'name' => 'Jose',
       	'email' => 'jose.perez.2392@gmail.com',
       	'password' => bcrypt('123456'),

       ]); 
    }
}
