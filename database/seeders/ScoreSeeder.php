<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores') -> truncate();
        
        DB::table('scores')->insert([
            'puntaje' => '100',
            'tiempo' => '400',
            'id_actividad' => '1',
            'id_usuario' => '1',
        ]);

        DB::table('scores')->insert([
            'puntaje' => '100',
            'tiempo' => '400',
            'id_actividad' => '2',
            'id_usuario' => '1',
        ]);
        
        DB::table('scores')->insert([
            'puntaje' => '100',
            'tiempo' => '400',
            'id_actividad' => '3',
            'id_usuario' => '1',
        ]);

        DB::table('scores')->insert([
            'puntaje' => '200',
            'tiempo' => '500',
            'id_actividad' => '1',
            'id_usuario' => '2',
        ]);

        DB::table('scores')->insert([
            'puntaje' => '200',
            'tiempo' => '500',
            'id_actividad' => '2',
            'id_usuario' => '2',
        ]);
        
        DB::table('scores')->insert([
            'puntaje' => '200',
            'tiempo' => '500',
            'id_actividad' => '3',
            'id_usuario' => '2',
        ]);

        DB::table('scores')->insert([
            'puntaje' => '300',
            'tiempo' => '600',
            'id_actividad' => '1',
            'id_usuario' => '3',
        ]);

        DB::table('scores')->insert([
            'puntaje' => '300',
            'tiempo' => '600',
            'id_actividad' => '2',
            'id_usuario' => '3',
        ]);
        
        DB::table('scores')->insert([
            'puntaje' => '300',
            'tiempo' => '600',
            'id_actividad' => '3',
            'id_usuario' => '3',
        ]);

    }
}
