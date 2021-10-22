<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions') -> truncate();
        
        DB::table('questions')->insert([
            'pregunta' => 'El conjunto de 5 líneas y 4 espacios donde se escribe la música se llama: ',
            'respuesta' => 'Pentagrama',
          
      
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿Cómo se llama este símbolo musical? -> #',
            'respuesta' => 'Sostenido',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => 'En el siguiente cifrado -> 4/4',
            'respuesta' => 'la negra vale 1 tiempo',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿Cómo se llama la línea curva que une a las notas ilustradas?',
            'respuesta' => 'ligadura (de prolongación)',
            'imagen' => 'quizz/q4.png',
            
        ]);

         DB::table('questions')->insert([
            'pregunta' => '¿Cómo se llaman los siguientes símbolos?',
            'respuesta' => 'Barras De Repetición',
            'imagen' => 'quizz/q5.png',
            
        ]);  

        DB::table('questions')->insert([
            'pregunta' => '¿Qué nota es esta?',
            'respuesta' => 'Do',
            'imagen' => 'quizz/q6.png',
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿Qué nota es esta?',
            'respuesta' => 'Mi',
            'imagen' => 'quizz/q7.png',
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿Qué nota es esta?',
            'respuesta' => 'Fa',
            'imagen' => 'quizz/q8.png',
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿Qué cifrado o cifra de compás debe llevar el siguiente fragmento musical?',
            'respuesta' => '4/4',
            'imagen' => 'quizz/q9.png',
            
        ]);

         DB::table('questions')->insert([
            'pregunta' => '¿Tono o semitono?',
            'respuesta' => 'Tono',
            'imagen' => 'quizz/q10.png',
            
        ]);   

        DB::table('questions')->insert([
            'pregunta' => '¿Tono o semitono?',
            'respuesta' => 'Semitono',
            'imagen' => 'quizz/q11.png',
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿Tono o semitono?',
            'respuesta' => 'Tono',
            'imagen' => 'quizz/q12.png',
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿Tono o semitono?',
            'respuesta' => 'Semitono',
            'imagen' => 'quizz/q13.png',
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => 'En cifrado de 4 por 4, ¿qué valor tiene la corchea?',
            'respuesta' => '1/2 Tiempo',
          
            
        ]);

         DB::table('questions')->insert([
            'pregunta' => '¿Qué cifrado o cifra de compás debe llevar el siguiente fragmento musical?',
            'respuesta' => '3/4',
            'imagen' => 'quizz/q15.png',
            
        ]);  

        DB::table('questions')->insert([
            'pregunta' => '¿Qué nota es esta?',
            'respuesta' => 'Sol',
            'imagen' => 'quizz/q16.png',
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => 'En un cifrado con 4 abajo, ¿qué valor tendría la redonda con puntillo?',
            'respuesta' => '6 Tiempos',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => 'La "C" en el cifrado o cifra de compás es lo mismo que: ',
            'respuesta' => '4/4',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿Qué figura vale 2 tiempos en un cifrado de 4 por 4?',
            'respuesta' => 'Blanca',
          
            
        ]);

         DB::table('questions')->insert([
            'pregunta' => '¿Qué cifrado o cifra de compás debe llevar el siguiente fragmento musical?',
            'respuesta' => '2/4',
            'imagen' => 'quizz/q20.png',
            
        ]);

        // SEGUNDO BLOQUE //

        DB::table('questions')->insert([
            'pregunta' => ' ¿Cuál es el nombre que se le da al 4º grado de una escala?',
            'respuesta' => 'Subdominante',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => 'Si escribimos una escala cromática partiendo de DO ¿qué alteraciones utilizamos? ¿bemoles o sostenidos?',
            'respuesta' => 'Sostenidos ascendentemente y bemoles descendentemente',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿Entre qué grados de la escala mixolídia hay semitonos?',
            'respuesta' => 'entre el 3 y 4, 6 y 7',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿Cuál es la equivalencia de un intervalo de 4ª aumentada si ponemos las notas al revés?',
            'respuesta' => 'Quinta disminuida',
          
            
        ]);

         DB::table('questions')->insert([
            'pregunta' => 'De cuantas triadas mayores, menores y disminuidas consta una escala mayor? (sin tener en cuenta la octava de la tónica)',
            'respuesta' => '3 mayores, 3 menores y 1 disminuida',
          
            
        ]);  

        DB::table('questions')->insert([
            'pregunta' => '¿Cuál es el orden de los sostenidos en una armadura?',
            'respuesta' => 'Fa Do Sol Re La Mi Si',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿Cuál de las siguientes cadencias no es conclusiva?',
            'respuesta' => 'Semi-cadencia',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => 'El intervalo cuyas notas suenan simultáneamente se llama: ',
            'respuesta' => 'Armónico',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿Orden de las voces de un coro? Desde el más agudo a grave.',
            'respuesta' => 'Mezzo-Soprano, Contra-Tenor, Tenor, Barítono',
          
            
        ]);

         DB::table('questions')->insert([
            'pregunta' => '¿Con qué intervalos se construyen los acordes de séptima de dominante?',
            'respuesta' => '3ª M, 5ª j, 7ª m',
          
            
        ]);   


         DB::table('questions')->insert([
            'pregunta' => '¿A qué grado pertenece el modo Eólico?',
            'respuesta' => 'I Grado',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿A qué grado pertenece el modo Locrio?',
            'respuesta' => 'II Grado',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿A qué grado pertenece el modo Jónico?',
            'respuesta' => 'III Grado',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿A qué grado pertenece el modo Dórico?',
            'respuesta' => 'IV Grado',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿A qué grado pertenece el modo Frigio?',
            'respuesta' => 'V Grado',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿A qué grado pertenece el modo Lidio?',
            'respuesta' => 'VI Grado',
          
            
        ]);

        DB::table('questions')->insert([
            'pregunta' => '¿A qué grado pertenece el modo Mixolídio?',
            'respuesta' => 'VII Grado',
          
            
        ]);            

    }
}
