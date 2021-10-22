<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>musicProject</title>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
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

                <div class="m-b-md">
                    
                    @isset($info->nivel)
                        <p>{{ $info->nivel }}</p>
                    @endisset

                    @isset($info->descripcion)
                        <p>{!! $info->descripcion !!}</p>
                    @endisset

                </div>
            </div>
        </div>
    </body>
</html>
