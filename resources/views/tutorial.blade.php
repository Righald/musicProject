<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>musicProject</title>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('style.css')}}">

    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="px-5">
                
                <div class="title m-b-md">
                    <a href="{{ url('/') }}">{{ $info->nombre }}</a>
                </div>

                <div class="m-b-md contenedor">
                    
                    @isset($info->nivel)
                        <div class="py-4 px-5 bg-white border-2 border-black mt-10 rounded-3xl">{{ $info->nivel }}</div>
                    @endisset

                    @isset($info->descripcion)
                        <div class="py-4 px-5 bg-white border-2 border-black mt-10 rounded-3xl">{!! $info->descripcion !!}</div>
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
            $("li").click(function(){                
                if (window.localStorage.getItem('audio') == 'true') {
                    let listitem = document.querySelectorAll("li");
                    let texttoread;
                    listitem.forEach(item => {
                        if (window.localStorage.getItem('audio') == 'true') {
                            responsiveVoice.speak(item.innerHTML,voz);
                        }
                    });
                }
            });
            $("div.title.less").click(function(){                
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
