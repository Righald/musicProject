<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>musicProject</title>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="../style.css">
        
        <style>
            @font-face {
                font-family: sketchy;
                src: url(fonts/SKETCHY.otf);
            }
            html, body {
                font-family: "sketchy";
                background-image: 'Backgrounds/music-notes-abstract-png.png';
                background-repeat: no-repeat;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                min-height: 100vh;
                margin: 0;
            }
            a{
                text-decoration: none;
            }
            a:visited{
                color: orange!important;
                -webkit-text-stroke-width: 3px;
                -webkit-text-stroke-color: black;
            }

            .full-height {
                min-height: 100vh;
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
            }

            .title {
                font-size: 65px;
                color: orange;
                text-transform: uppercase;
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: black;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            p{
            	color: #000000;
            	text-indent: center;
            	font-size: 35px;
            }

            img{
            	max-width:100%;
                height:auto;
            }
            p{
               font-family: 'Nunito', sans-serif;
                color: orange;
                font-weight: bold;
                font-size: 35px;
                text-transform: uppercase;
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: black; 
            }
            ul{
                list-style: none;
                font-size: 2.2rem;
                color: orange;
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: black;
                text-transform: uppercase;
            }
            li{
                margin: 15px 0;
            }

            .contenedor{
                padding: 10px 20px;
                background-color: white;
                box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
                max-width: 1080px;
                margin: 10px auto;
                border: 2px solid black;
                border-radius: 25px;
            }

            .less{
                font-size: 3rem;
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
                    <a href="{{ url('/') }}">{{ $info->nombre }}</a>
                </div>

                <div class="m-b-md contenedor">
                    
                    @isset($info->nivel)
                        <div class="title less">{{ $info->nivel }}</div>
                    @endisset

                    @isset($info->descripcion)
                        <div>{!! $info->descripcion !!}</div>
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
