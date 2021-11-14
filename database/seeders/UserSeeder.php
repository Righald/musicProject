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
            'name' => 'Alan Salvador',
            'lastname' => 'Piha Hernandez',
            'email' => 'alan@gmail.com',
            'password' => bcrypt('1234'),
        ]);
        
        DB::table('users')->insert([
            'nickname' => 'El Wapo',
            'name' => 'Sergio',
            'lastname' => 'Rojas Noris',
            'email' => 'sergio@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        DB::table('users')->insert([
            'nickname' => 'Pelonchas',
            'name' => 'Mario Alberto',
            'lastname' => 'Bastida Argueta',
            'email' => 'mario@gmail.com',
            'password' => bcrypt('1234'),
        ]);

    }
}
