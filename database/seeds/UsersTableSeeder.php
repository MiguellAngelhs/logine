<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'nombre1' => 'Jairo',
                    'apellido1' => 'Angel',
                    'email' => 'andres20k@gmail.com',
                    'password' => bcrypt('12345')

                ],
                [
                    'nombre1' => 'Pepito',
                    'apellido1' => 'Ramirez',
                    'email' => 'pepito05@gmail.com',
                    'password' => bcrypt('123456')
                ],
                [
                    'nombre1' => 'Daniel',
                    'apellido1' => 'gil',
                    'email' => 'empty@gmail.com',
                    'password' => bcrypt('12345')

                ],
                [
                    'nombre1' => 'Miguelin',
                    'apellido1' => 'Angelito',
                    'email' => 'migue@gmail.com',
                    'password' => bcrypt('123456')
                ]

            ]);
    }
}
