<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>musicProject</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="my-2 my-lg-0 ml-auto">
                    @if(Auth::check())
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('update/')}}">Cambiar Datos</a>
                            </li>
                            <li>
                                <script>
                                    console.log("");
                                </script>
                                <a class="nav-link" href="{{url('logout/')}}">Logout</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('scoreTable')}}">Tabla de puntuación</a>
                            </li>
                        </ul>
                    @else
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('register')}}">Registro</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('login')}}">Login</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('scoreTable')}}">Tabla de puntuación</a>
                            </li>
                        </ul>
                    @endif
                </div>
            </div>
        </nav>
        <div class="flex-center position-ref full-height">

            <div class="content">
                
                <div class="title m-b-md">
                    <label>
                        music
                    </label>
                    <label>
                        Project
                    </label>
                </div>

                <div class="links">
                    <button class="green" onclick="window.location.href='{{ url('/estudioMenu') }}'">
                        <img src="Icons/newspaper-solid.svg" style="height: 100px; width: 100px; color: white;">
                        <br>
                        Estudiar
                    </button>
                    
                    <button class="green" onclick="window.location.href='{{ url('/juegosMenu') }}'">
                        <img src="Icons/gamepad-solid.svg" style="height: 100px; width: 100px; color: white;">
                        <br>
                        Jugar
                    </button>
               
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!-- <script src="jquery-3.5.0.min.js"></script> -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="sweetalert2.js"></script>
    <script>
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
    </script>
</html>
