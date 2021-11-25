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

            <div class="py-5">
                
                <div class="title m-b-md">
                    <a href="{{ url('/') }}">Selecciona un juego.</a>
                </div>

                <div class="links">
                    
                    <button value="SpaceInvaders" class="green" onclick="window.location.href='{{ url('/invaders') }}'">
                        <img src="Icons/napster-brands.svg" style="height: 90px; width: 90px; color: white;">
                        <br>
                        SpaceInvaders.
                    </button>
                    
                    <button value="MusicalMemory" class="green" onclick="window.location.href='{{ url('/memorama') }}'">
                        <img src="Icons/icons-solid.svg" style="height: 90px; width: 90px; color: white;">
                        <br>
                        MusicalMemory.
                    </button>
                   
                   <button value="MusicalQuizz" class="green" onclick="window.location.href='{{ url('/quiz') }}'">
                        <img src="Icons/music-solid.svg" style="height: 90px; width: 90px; color: white;">
                        <br>
                        MusicalQuizz.
                    </button>

                    <br>

                    <button value="Tutorial de SpaceInvaders" class="green" onclick="window.location.href='{{ url('/tutorial/1') }}'">
                        <img src="Icons/napster-brands.svg" style="height: 90px; width: 90px; color: white;">
                        <br>
                        Tutorial.
                    </button>
                    
                    <button value="Tutorial de MusicalMemory" class="green" onclick="window.location.href='{{ url('/tutorial/2') }}'">
                        <img src="Icons/icons-solid.svg" style="height: 90px; width: 90px; color: white;">
                        <br>
                        Tutorial.
                    </button>
                   
                   <button value="Tutorial de MusicalQuizz" class="green" onclick="window.location.href='{{ url('/tutorial/3') }}'">
                        <img src="Icons/music-solid.svg" style="height: 90px; width: 90px; color: white;">
                        <br>
                        Tutorial.
                    </button>


                </div>
            </div>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
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
