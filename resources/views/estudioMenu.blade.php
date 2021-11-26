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
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                
                <div class="title m-b-md">
                   <a href="{{ url('/') }}"> Selecciona el tema.</a>
                </div>

                <div class="links" style="display: flex;flex-wrap: wrap;justify-content: center;max-width: 1080px;">
                    
                    <button value="Lectura de pentagrama en clave de Sol." class="green text-black" onclick="window.location.href='{{ url('/estudio/1') }}'">
                        Lectura de pentagrama en clave de Sol.
                    </button>
                    
                    <button value="Lectura de pentagrama en clave de Fa." class="green text-black" onclick="window.location.href='{{ url('/estudio/2') }}'">
                        Lectura de pentagrama en clave de Fa.
                    </button>
                   
                   <button value="Lectura de pentagrama en clave de Do." class="green text-black" onclick="window.location.href='{{ url('/estudio/3') }}'">
                        Lectura de pentagrama en clave de Do.
                    </button>
                    
                    <button value="Intervalos (Armónicos Y Melódicos)." class="green text-black" onclick="window.location.href='{{ url('/estudio/4') }}'">
                        Intervalos (Armónicos Y Melódicos).
                    </button>
                   
                    <button value="Escalas (Mayores Y Menores)." class="green text-black" onclick="window.location.href='{{ url('/estudio/5') }}'">
                       Escalas (Mayores Y Menores).
                    </button>      

                    <button value="Modos griegos." class="green text-black" onclick="window.location.href='{{ url('/estudio/6') }}'">
                        Modos griegos.
                    </button>
                   
                    <button value="Formas rítmicas." class="green text-black" onclick="window.location.href='{{ url('/estudio/7') }}'">
                        Formas rítmicas.
                    </button> 

                </div>
            </div>
        </div>
        <x-header/>
    </body>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=Q05sEj9b"></script>
    <script type="text/javascript">

        
        let voz = 'Spanish Latin American Female';
        
        if (!window.localStorage.getItem('audio') === 'true') {
            window.localStorage.setItem('audio', 'false');
        }

        if (window.localStorage.getItem('fontsize') == null) {
            window.localStorage.setItem('fontsize', '1.5rem');
        }else{
            let fontsize = window.localStorage.getItem('fontsize', '1.5rem');
            let root = window.document.querySelector(":root");
            root.style.setProperty('--bodysize', fontsize);
        }

        function speach() {

            $("a").hover(function(){                
                if (window.localStorage.getItem('audio') === 'true') {
                    responsiveVoice.speak(this.innerHTML,voz);
                }
            });
            $("label").hover(function(){                
                if (window.localStorage.getItem('audio') == 'true') {
                    responsiveVoice.speak(this.innerHTML,voz);
                }
            });
            let botones = document.querySelectorAll("button");
            botones.forEach(boton => {
                boton.addEventListener("mouseenter",() => {                    
                    if (window.localStorage.getItem('audio') == 'true') {
                        responsiveVoice.speak(boton.value,voz);
                    }
                });
            });
        }

        speach();

    </script>
</html>
