<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes') -> truncate();

        DB::table('notes')->insert([
            'nombre' => 'C',
            'descripcion' => 'DO',
            'pentagrama' => 'path',
            'acorde' => 'path',
            'escala' => 'path',
        ]);

        DB::table('notes')->insert([
            'nombre' => 'D',
            'descripcion' => 'RE',
            'pentagrama' => 'path',
            'acorde' => 'path',
            'escala' => 'path',
        ]);

        DB::table('notes')->insert([
            'nombre' => 'E',
            'descripcion' => 'MI',
            'pentagrama' => 'path',
            'acorde' => 'path',
            'escala' => 'path',
        ]);

        DB::table('notes')->insert([
            'nombre' => 'F',
            'descripcion' => 'FA',
            'pentagrama' => 'path',
            'acorde' => 'path',
            'escala' => 'path',
        ]);

        DB::table('notes')->insert([
            'nombre' => 'G',
            'descripcion' => 'SOL',
            'pentagrama' => 'path',
            'acorde' => 'path',
            'escala' => 'path',
        ]);

        DB::table('notes')->insert([
            'nombre' => 'A',
            'descripcion' => 'LA',
            'pentagrama' => 'path',
            'acorde' => 'path',
            'escala' => 'path',
        ]);

        DB::table('notes')->insert([
            'nombre' => 'B',
            'descripcion' => 'SI',
            'pentagrama' => 'path',
            'acorde' => 'path',
            'escala' => 'path',
        ]);

    }
}
