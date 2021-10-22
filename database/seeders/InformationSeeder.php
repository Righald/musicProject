<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('information') -> truncate();
        
        DB::table('information')->insert([
            'titulo' => 'Lectura de pentagrama en clave de Sol.',
            
            'informacion' => 'Como lo indica su nombre, la clave de sol es una clave musical. Las claves musicales son representadas con un símbolo de referencia que se escribe al principio de un pentagrama para señalizar qué nombre le daremos a las notas.',
            
            'parrafo' => 'La clave señaliza con el símbolo, una línea especifica del pentagrama que nos indicará un punto de partida. El resto de las notas cambiará su nombre en relación a esta. En este caso, la Clave de Sol señaliza la segunda línea (contando de abajo hacia arriba) e indica que a ella se le asigna la nota Sol. Para dibujar la clave de Sol es importante recordar que el trazo del espiral termine precisamente en la línea correcta.',
            
            'parrafodos' => 'Estos son algunos de los instrumentos que leen las notas en clave de Sol como clave principal: Picolo, flauta travesera, flauta dulce, oboe, clarinete, corno inglés, glockenspiel, trompeta, trompa, trombón, saxofón alto, saxofón soprano, saxofón tenor, guitarra, ukelele y más.',
            
            'media' => 'Escala-de-do-mayor.jpg',
        ]);

        DB::table('information')->insert([
            'titulo' => 'Lectura de pentagrama en clave de Fa.',
            
            'informacion' => 'La clave de Fa se usa para escribir las notas musicales más graves en el pentagrama.',
            
            'parrafo' => 'En la imagen superior se puede ver la Clave de Fa en cuarta
                      Las notas en esta clave se centran en la nota Fa que está en la cuarta línea.
              En la imagen inferior podemos ver la Clave de Fa en tercera línea
              Las notas se redistribuyen de la siguiente manera:.',
            
            'media' => 'clavefacuarta.gif',
            
            'auxmedia' => 'clavedefatercera.png',
        ]);

        DB::table('information')->insert([
            'titulo' => 'Lectura de pentagrama en clave de Do.',
            'informacion' => 'La clave señaliza una línea especifica del pentagrama que nos indicará el punto de referencia. Las notas a seguir cambiarán su nombre en relación a ésta. La clave de Do indica la línea a la que se le asignará la nota Do.',
            
            'parrafo' => 'En la Edad Media solía utilizarse la clave de Do con mayor frecuencia. Actualmente, la clave utilizada para mayor número de instrumentos es la clave de Sol. Sin embargo, eso no significa que la clave de Do haya quedado en desuso. La razón para utilizar una clave musical u otra, tiene relación con el registro musical.',
            
            'parrafodos' => 'Cuando la clave de Do se coloca en la tercera línea, se le llama clave de Do - Alto. Esto es lo más común. Pero cuando la clave de Do se coloca en la cuarta línea, se le llama clave de Do - Tenor. Los instrumentos que utilizan generalmente la clave de Do – Tenor son el fagot, el violonchelo, el bombardino, el contrabajo y el trombón. Es importante mencionar que cuando la utilizan, generalmente se debe a que necesiten tocar notas más agudas y el cambio de clave a clave de Do es una manera de facilitar la lectura.',
            
            'media' => 'clavedo.png',
        ]);

        DB::table('information')->insert([
            'titulo' => 'Intervalos (Armónicos Y Melódicos).',
            'informacion' => 'En la música, un intervalo se encarga de medir la distancia entre dos tonos musicales, es decir, distingue la altura entre dos notas, ya sean simultáneas o sucesivas. Los intervalos se miden con tonos y semitonos, lo que quiere decir que estos mismos son sus unidades de medida. 
                
                Intervalos armónicos = un sonido encima del otro

                Intervalos melódicos = un sonido detrás de otro',
            
            'parrafo' => 'Así como las distancias o longitudes las medimos en metros y centímetros, o el líquido en litros, en la música los intervalos se miden en tonos y semitonos.
                Los tonos y semitonos son unidades de medición de los intervalos. Para expresar en cantidades una distancia entre dos notas, empleamos los tonos y semitonos como unidad de medida referencial.',
            
            'parrafodos' => 'Semitono: es la distancia mínima que existe entre dos sonidos, en nuestro sistema musical. Separa a dos grados o tonos musicales entre los cuales no existe ninguna nota de por medio.
                Existen dos tipos:
                Semitono cromático: Es la distancia mínima que existe entre dos notas con el mismo nombre. Por ejemplo: do-do#; la-lab; sol-sol#.
                Semitono diatónico: Es la distancia mínima que existe entre dos notas con distinto nombre. Por ejemplo: do-reb; la-sib; sol-lab.',
            
            'media' => 'intervalos.png',
            
        ]);

        DB::table('information')->insert([
            'titulo' => 'Escalas (Mayores Y Menores).',
            'informacion' => 'Una escala, a nivel general, consiste en una secuencia de elementos. En este caso, las escalas musicales son secuencias de sonidos en serie que se encuentran ordenados según su altura; cada sonido nuevo que aparece es más agudo que el anterior a medida que la escala asciende, y más grave a medida que la escala desciende.',
            
            'parrafo' => 'Lo que le otorga a una escala su sonoridad particular son los intervalos que existen entre cada una de sus notas, y la cantidad de notas que la conforman. Los intervalos se miden por tonos y semitonos. Para construir, por ejemplo, una escala base como nuestra escala de Do mayor, el orden de los intervalos entre las notas que constituyen la escala mayor es el siguiente:

                tono – tono – semitono – tono – tono – tono – semitono',
            
            'parrafodos' => 'La escala menor contiene una distribución diferente de tonos y semitonos:

                Tono - semitono - tono - tono - semitono - tono - tono',
            
            'media' => 'escalasmay.png',
            'auxmedia' => 'escalas.png',
            
        ]);

        DB::table('information')->insert([
            'titulo' => 'Modos Griegos',
            'informacion' => 'Los modos griegos es una organización de los sonidos, que va en forma descendente estableciendo distancias de tono o medio tono entre los 7 sonidos que lo conforman. Los modos griegos son los fundamentos teóricos para lo que se conoció luego como las escalas musicales. En realidad, vas a leer muchísimas cosas sobre los modos griegos, y en especial sobre su historia. Sin duda, para simplificarlo debes comprender lo siguiente.',
            
            'parrafo' => 'Hay 7 modos griegos: Jónico, Dórico, Frigio, Lidio, Mixolidio, Eólico, y Locrio.
                Seguramente ya sabes el modo jónico, al cual se lo conoce comúnmente como escala mayor y abarca las notas: do, re, mi, fa, sol, la, si, do.

                El Eólico, posiblemente también lo conozcas es lo que se conoce como escala menor y abarca las notas la, si, do, re, mi fa, sol y la. Y suele denominarse como relativa menor.

                En conclusión, los 7 modos abarcan las 7 notas en sus octavas: Jónico (de do a do), Dórico (de re a re), Figio (de mi a mi), Lidio, (de fa a fa), Mixolidio (de sol a sol), Eólico de (la a la), y Locrio (si a si).',
            
            'parrafodos' => 'Es decir, un modo griego es una serie de escalas musicales que se puede construir si se usan las notas de una escala mayor cambiando el “punto de partida”. Por lo que para empezar el modo que desee simplemente debes ubicarte en que grado se encuentra.',
            
            'media' => 'modos.png',
            
            'auxmedia' => 'codigos.jpg',
        ]);

        DB::table('information')->insert([
            'titulo' => 'Formas rítmicas.',
            
            'informacion' => 'Las  figuras musicales son símbolos o caracteres de notación musical empleados para representar gráficamente los sonidos musicales de forma escrita. Así como empleamos las letras para representar palabras, o los números para representar cifras; en la música es necesario utilizar símbolos que registren sonidos.

                La cualidad principal de las figuras musicales es que representan la duración del sonido según el valor de cada figura, y la altura del sonido según su ubicación en el pentagrama.',
            
            'parrafo' => 'Figuras musicales
                Son los símbolos que representan duración del sonido según su valor, y la altura del sonido según la ubicación en el pentagrama. Cada una de ellas tiene un nombre propio, por ejemplo: negra, corchea, blanca, etc.

                Silencios
                    Los silencios son símbolos musicales que representan, como su nombre lo indica, el silencio. En la música, la práctica del silencio es fundamental; por ejemplo, en ocasiones un instrumento debe silenciarse para que otro sea escuchado con mayor claridad, o todos los instrumentos se callan al mismo tiempo para generar un cambio de ambiente.',
            
            'parrafodos' => 'Son los compases que tienen por numerador (ver fórmula de compás en NIVEL I) 2, 3 ó 4. Los que tienen dos y cuatro tiempos son binarios, y el de tres tiempos es ternario.

                Pueden tener cualquier denominador. Uno de los más usados es el 4 que representa la negra.

                En cualquier compás simple cada tiempo (UNIDAD DE TIEMPO), es divisible por dos, por consiguiente son de división binaria.',
            
            'media' => 'formas.png',
            
            'auxmedia' => 'compas.jpg',
        ]);

    }
}
