<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('activities') -> truncate();

        DB::table('activities')->insert([
            'nombre' => 'Space Invaders',
            'nivel' => 'Nivel Principiante, para aprender las notas musicales.',
            'descripcion' => '1.-Clickea los botones para destruír las naves.<br>
                                2.-La clave de la nave debe coincidir con el botón que clickeaste.<br>
                                3.-Mientras más naves destruyas más puntos obtendrás.<br>
                                4.-Después de cierto puntaje las naves bajarán más rápido.<br>
                                5.-Perderás cuando una de las naves toque el fondo.<br>
                                6.-Al final se te notificará tu puntaje y tu tiempo.',
        ]);

        DB::table('activities')->insert([
            'nombre' => 'Musical Memory',
            'nivel' => 'Nivel intermedio, para aprender a identificar las notas sobre el pentagrama.',
            'descripcion' => '1.-Clickea sobre una de las cartas y se te mostrará el reverso.<br>
                                2.-Una vez se muestra esta carta clickea sobre otra para saber si es par.<br>
                                3.-Si no son pares, después de un momento se voltearán boca abajo de nuevo.<br>
                                4.-Una vez terminados los pares se te notificará tu puntaje y tiempo.',
        ]);

        DB::table('activities')->insert([
            'nombre' => 'MusicalQuizz',
            'nivel' => 'Nivel Avanzado, para reforzar conocimiento de conceptos.',
            'descripcion' => '1.-Se te mostrará una pregunta(Puede estár acompañada de una imagen).<br>
                                2.-En la parte inferior se te mostrarán cuatro posibles respuestas.<br>
                                3.-Seleccionar alguna de las respuestas.<br>
                                4.-Si es incorrecta, se te mostrará con color Azul la correcta y en rojo tu respuesta.<br>
                                5.-Al finalizar las 20 preguntas aleatorias, se te mostrará tu puntaje y tu tiempo.',
        ]);

    }
}
