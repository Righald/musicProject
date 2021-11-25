<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB; 
 
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') -> truncate();
        
        DB::table('users')->insert([
            'nickname' => 'Nala',
            'nombres' => 'Alan Salvador',
            'apellidos' => 'Piha Hernandez',
            'email' => 'alan@gmail.com',
            'password' => bcrypt('1234'),
        ]);
        
        DB::table('users')->insert([
            'nickname' => 'Lana',
            'nombres' => 'Sergio',
            'apellidos' => 'Rojas Noris',
            'email' => 'sergio@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        DB::table('users')->insert([
            'nickname' => 'Mario Bros',
            'nombres' => 'Mario Alberto',
            'apellidos' => 'Bastida Argueta',
            'email' => 'mario@gmail.com',
            'password' => bcrypt('1234'),
        ]);

    }
}
