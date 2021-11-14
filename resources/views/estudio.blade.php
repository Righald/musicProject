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
        <style>
            @font-face {
                font-family: sketchy;
                src: url(fonts/SKETCHY.otf);
            }
            :root{
                --backgroundcolor:  white;
            }
            html, body {
                font-family: "sketchy";
                background-repeat: no-repeat;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: bold;
                min-height: 100vh;
                height: 100%;
                width: 100%;
                margin: 0;
                z-index: 200;
                display: flex;
                flex-direction: column;
                align-content: center;
                padding-bottom: 10px;
                padding-top: 10px;
                position: relative;
                align-self: center;
            }
            body::before {
                content: "";
                display: flex;
                position: absolute;
                top: 0px;
                right: 0px;
                bottom: 0px;
                left: 0px;
                width: 100%;
                height: 100%;
                z-index: 0;
                background-image: url('{{asset('Backgrounds/music-notes-abstract-png.png')}}');
                background-repeat: no-repeat;
                background-attachment: fixed;
                opacity: 0.2;
            }
            
            a{
                text-decoration: none;
            }
            a:visited{
                color: orange!important;
                -webkit-text-stroke-width: 3px;
                -webkit-text-stroke-color: black;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                text-align-last: center;
                max-width:1080px;
                margin: 0 auto;
            }

            .title {
                text-align: center;
                font-size: 65px;
                color: orange;
                text-transform: uppercase;
                -webkit-text-stroke-width: 2px;
                -webkit-text-stroke-color: black;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            p{
            	color: #000000;
            	text-indent: center;
            	font-size: 20px;
                padding: 5px 10px; border: black solid 2px;
                border-radius: 10px;
                box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
                background-color: var(--backgroundcolor);
            }

            img{
            	max-width:100%;
                height:auto;
            }
            p{
               font-family: 'Nunito', sans-serif; 
            }
            @media (max-width: 500px) {
                body{
                /* margin-top: 20px; */
                display: block;
                }
                .title{
                    font-size: 40px;
                }
                .links > button{
                    display: block;
                }
                button{
                    margin: 20px auto;
                }
            }

        </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                
                <div class="title m-b-md">
                    <a href="{{ url('/') }}">{{ $info->titulo }}</a>
                </div>

                <div class="m-b-md">
                    
                    @isset($info->informacion)
                        <p>{{ $info->informacion }}</p>
                    @endisset

                    @isset($info->media)
                       <img src="{{ url('/informacion/',$info->media) }}">
                    @endisset

                    @isset($info->parrafo)
                        <p>{{ $info->parrafo }}</p>
                    @endisset
                    
                    @isset($info->auxmedia)
                       <img src="{{ url('/informacion/',$info->auxmedia) }}">
                    @endisset

                    @isset($info->parrafodos)
                       <p>{{ $info->parrafodos }}</p>
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
