<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>musicProject</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('style.css')}}">
        <!-- Styles -->

    </head>
    <body>
        <div class="flex-center position-ref full-height py-5">

            <div class="text-gray-800">
                
                <div class="title text-gray-900">
                    <a href="{{ url('/') }}">{{ $info->titulo }}</a>
                </div>

                <div class="px-5">
                    
                    @isset($info->informacion)
                        <p class="py-4 px-5 bg-white border-2 border-black mt-10 rounded-3xl ">{{ $info->informacion }}</p>
                    @endisset

                    @isset($info->media)
                       <img class="mx-auto my-5 px-5 py-4 border-2 border-black bg-white rounded-3xl" src="{{ url('/informacion/',$info->media) }}">
                    @endisset

                    @isset($info->parrafo)
                        <p class="py-4 px-5 bg-white border-2 border-black mt-10 rounded-3xl ">{{ $info->parrafo }}</p>
                    @endisset
                    
                    @isset($info->auxmedia)
                       <img class="mx-auto my-5 px-5 py-4 border-2 border-black bg-white rounded-3xl" src="{{ url('/informacion/',$info->auxmedia) }}">
                    @endisset

                    @isset($info->parrafodos)
                       <p class="py-4 px-5 bg-white border-2 border-black mt-10 rounded-3xl ">{{ $info->parrafodos }}</p>
                    @endisset

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
            $("p").click(function(){                
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
