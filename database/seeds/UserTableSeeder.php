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

        factory(App\User::class)->create([
            'name'  => 'Juanset' ,
            'email' => 'jnset@hotmail.com' ,
            'role'  => 'admin' ,
            'password' => 'admin'
        ]);
        factory(App\User::class, 29)->create();

    }
}
