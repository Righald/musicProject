<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards') -> truncate();

        DB::table('cards')->insert([
            'titulo' => 'Lorem ipsum',
            'anotacion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'id_information' => '6',
            'id_usuario' => '1',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('cards')->insert([
            'titulo' => 'Lorem ipsum',
            'anotacion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'id_information' => '5',
            'id_usuario' => '1',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('cards')->insert([
            'titulo' => 'Lorem ipsum',
            'anotacion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'id_information' => '1',
            'id_usuario' => '1',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('cards')->insert([
            'titulo' => 'Lorem ipsum',
            'anotacion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'id_information' => '2',
            'id_usuario' => '2',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('cards')->insert([
            'titulo' => 'Lorem ipsum',
            'anotacion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'id_information' => '3',
            'id_usuario' => '2',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('cards')->insert([
            'titulo' => 'Lorem ipsum',
            'anotacion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'id_information' => '4',
            'id_usuario' => '2',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('cards')->insert([
            'titulo' => 'Lorem ipsum',
            'anotacion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'id_information' => '5',
            'id_usuario' => '3',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('cards')->insert([
            'titulo' => 'Lorem ipsum',
            'anotacion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'id_information' => '6',
            'id_usuario' => '3',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('cards')->insert([
            'titulo' => 'Lorem ipsum',
            'anotacion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'id_information' => '7',
            'id_usuario' => '3',
            'created_at' => date("Y-m-d H:i:s"),
        ]);


    }
}
