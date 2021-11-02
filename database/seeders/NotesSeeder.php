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
            'color' => '#28ff01',
        ]);

        DB::table('notes')->insert([
            'nombre' => 'D',
            'descripcion' => 'RE',
            'pentagrama' => 'path',
            'acorde' => 'path',
            'escala' => 'path',
            'color' => '#007dfe',
        ]);

        DB::table('notes')->insert([
            'nombre' => 'E',
            'descripcion' => 'MI',
            'pentagrama' => 'path',
            'acorde' => 'path',
            'escala' => 'path',
            'color' => '#4400e9',
        ]);

        DB::table('notes')->insert([
            'nombre' => 'F',
            'descripcion' => 'FA',
            'pentagrama' => 'path',
            'acorde' => 'path',
            'escala' => 'path',
            'color' => '#520100',
        ]);

        DB::table('notes')->insert([
            'nombre' => 'G',
            'descripcion' => 'SOL',
            'pentagrama' => 'path',
            'acorde' => 'path',
            'escala' => 'path',
            'color' => '#b30101',
        ]);

        DB::table('notes')->insert([
            'nombre' => 'A',
            'descripcion' => 'LA',
            'pentagrama' => 'path',
            'acorde' => 'path',
            'escala' => 'path',
            'color' => '#ff6300',
        ]);

        DB::table('notes')->insert([
            'nombre' => 'B',
            'descripcion' => 'SI',
            'pentagrama' => 'path',
            'acorde' => 'path',
            'escala' => 'path',
            'color' => '#99fe00',
        ]);

    }
}
