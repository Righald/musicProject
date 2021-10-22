<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>musicProject</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <!-- Styles -->
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                
                <div class="title m-b-md">
                   <a href="{{ url('/') }}"> Selecciona el tema.</a>
                </div>

                <div class="links">
                    
                    <button class="green" onclick="window.location.href='{{ url('/estudio/1') }}'">
                        Lectura de pentagrama en clave de Sol.
                    </button>
                    
                    <button class="green" onclick="window.location.href='{{ url('/estudio/2') }}'">
                        Lectura de pentagrama en clave de Fa.
                    </button>
                   
                   <button class="green" onclick="window.location.href='{{ url('/estudio/3') }}'">
                        Lectura de pentagrama en clave de Do.
                    </button>
                    
                    <button class="green" onclick="window.location.href='{{ url('/estudio/4') }}'">
                        Intervalos (Armónicos Y Melódicos).
                    </button>
                   
                    <button class="green" onclick="window.location.href='{{ url('/estudio/5') }}'">
                       Escalas (Mayores Y Menores).
                    </button>      

                    <button class="green" onclick="window.location.href='{{ url('/estudio/6') }}'">
                        Modos griegos.
                    </button>
                   
                    <button class="green" onclick="window.location.href='{{ url('/estudio/7') }}'">
                        Formas rítmicas.
                    </button> 

                </div>
            </div>
        </div>
    </body>
</html>
