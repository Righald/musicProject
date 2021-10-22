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
                    <a href="{{ url('/') }}">Selecciona un juego.</a>
                </div>

                <div class="links">
                    
                    <button class="green" onclick="window.location.href='{{ url('/invaders') }}'">
                        <img src="Icons/napster-brands.svg" style="height: 90px; width: 90px; color: white;">
                        <br>
                        SpaceInvaders.
                    </button>
                    
                    <button class="green" onclick="window.location.href='{{ url('/memorama') }}'">
                        <img src="Icons/icons-solid.svg" style="height: 90px; width: 90px; color: white;">
                        <br>
                        MusicalMemory.
                    </button>
                   
                   <button class="green" onclick="window.location.href='{{ url('/quiz') }}'">
                        <img src="Icons/music-solid.svg" style="height: 90px; width: 90px; color: white;">
                        <br>
                        MusicalQuizz.
                    </button>

                    <br>

                    <button class="green" onclick="window.location.href='{{ url('/tutorial/1') }}'">
                        <img src="Icons/napster-brands.svg" style="height: 90px; width: 90px; color: white;">
                        <br>
                        Tutorial.
                    </button>
                    
                    <button class="green" onclick="window.location.href='{{ url('/tutorial/2') }}'">
                        <img src="Icons/icons-solid.svg" style="height: 90px; width: 90px; color: white;">
                        <br>
                        Tutorial.
                    </button>
                   
                   <button class="green" onclick="window.location.href='{{ url('/tutorial/3') }}'">
                        <img src="Icons/music-solid.svg" style="height: 90px; width: 90px; color: white;">
                        <br>
                        Tutorial.
                    </button>


                </div>
            </div>
        </div>
    </body>
</html>
