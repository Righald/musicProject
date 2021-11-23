<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>musicProject</title>
        <link rel="stylesheet" href="style.css">
        <style type="">
            :root{
                --fontsize: 5rem;
            }
            .sound{
                height: 50px;
                width: 50px;
                border: 5px solid #8CC24A;
                background-color: #548B2E;
                border-radius: 15px;
            }
            .muted{
                height: 50px;
                width: 50px;
                border: 5px solid #f0484d;
                background-color: #a02128;
                border-radius: 15px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="mx-auto md:mx-20" id="navbarSupportedContent">
                <div class="my-2 lg:my-0 ml-auto">
                    <ul class="flex gap-5 place-content-end" style="align-content: center;">
                        @if(Auth::check())
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('update')}}">Cambiar Datos</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('logout')}}">Logout</a>
                            </li>
                            <li>

                                <a class="nav-link" href="{{url('scoreTable')}}">Tabla de puntuación</a>
                            </div>
                        @else
                    
                            <div class="nav-item active">
                                <a class="nav-link" href="{{url('register')}}">Registro</a>
                            </div>
                            <div>
                                <a class="nav-link" href="{{url('login')}}">Login</a>
                            </div>
                            <div>
                                <a class="nav-link" href="{{url('scoreTable')}}">Tabla de puntuación</a>
                            </div>
                        @endif
                        <div class="my-auto">
                            <button id="sound" class="sound">
                                <img id="soundimg" class="mx-auto" src="{{asset('Icons/sound.svg')}}">
                            </button>
                        </div>
                        <div class="my-auto">
                            <button class="sound p-1">
                                <img id="fontminus" class="mx-auto my-auto text-center" src="{{asset('Backgrounds/minus.svg')}}">
                            </button>
                            <button class="sound button p-1">
                                <img id="fontplus" class="mx-auto my-auto text-center" src="{{asset('Backgrounds/plus.svg')}}">

                            </button>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="flex-center position-ref full-height">

            <div class="content">
                
                <div class="title m-b-md">
                    <label>
                        music
                        Project
                    </label>
                </div>

                <div class="links">
                    <button class="text-black green" onclick="window.location.href='{{ url('/estudioMenu') }}'" value="Estudiar">
                        <img class="mx-auto" src="Icons/newspaper-solid.svg" style="height: 100px; width: 100px; color: white;">
                        Estudiar
                    </button>
                    
                    <button class="text-black green" onclick="window.location.href='{{ url('/juegosMenu') }}'" value="Jugar">
                        <img class="mx-auto" src="Icons/gamepad-solid.svg" style="height: 100px; width: 100px; color: white;">
                        Jugar
                    </button>
                    @if(Auth::check())
                        <button class="green" onclick="window.location.href='{{ url('/misCartas') }}'" value="Jugar">
                            <img src="Icons/pen-solid.svg" style="height: 100px; width: 100px; color: white;">
                            <br>
                            Apuntes/Cartas
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=Q05sEj9b"></script>
    <!-- <script src="jquery-3.5.0.min.js"></script> -->{{-- 
    <script src="/js/bootstrap.min.js"></script> --}}
    <script src="sweetalert2.js"></script>
    <script>
        
        let voz = 'Spanish Latin American Female';
        if (window.localStorage.getItem('audio') === 'true') {
            window.localStorage.setItem('audio', 'false');
        }else{
            $("#soundimg").attr('src','{{asset('Icons/mute.svg')}}');
            $("#sound").removeClass("sound");
            $("#sound").addClass("muted");
        }
        
        @if(Session::get('message') != null)
                Swal.fire({
                    html:
                        '{{ Session::get('message') }}',
                    showCloseButton: true,
                  
                    focusConfirm: false,
                    confirmButtonText:
                        ' Continuar ',
                });
        @endif


        function speach() {

            $("a").mouseenter(function(){                
                if (window.localStorage.getItem('audio') === 'true') {
                    responsiveVoice.speak(this.innerHTML,voz);
                }
            });
            $("label").mouseenter(function(){                
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

        $("#sound").click(function(){
            if (window.localStorage.getItem('audio') === 'true') {
                responsiveVoice.speak('Voz del texto desactivada',voz);
                window.localStorage.setItem('audio', 'false');                
                $("#soundimg").attr('src','{{asset('Icons/mute.svg')}}');
                $("#sound").removeClass("sound");
                $("#sound").addClass("muted");
            }else{
                responsiveVoice.speak('Voz del texto activada',voz);
                window.localStorage.setItem('audio', 'true');                
                $("#soundimg").attr('src','{{asset('Icons/sound.svg')}}');
                $("#sound").removeClass('muted');
                $("#sound").addClass('sound');
            }
        });

        speach();
    </script>
</html>
