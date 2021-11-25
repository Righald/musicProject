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
        <!-- Styles -->
        <style>
            h1{
                font-family: 'Nunito', sans-serif;
                font-size: 40px;
            }
            h2{
                font-family: 'Nunito', sans-serif;
                font-size: 25px;
            }
            form{
                display: hidden;
            }
            .links{
                max-width: 1080px;
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                align-items: center;
                margin: 10px auto;
                justify-content: space-around;
            }

        </style>            
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                
                <div class="title m-b-md">
                    <a href="{{ url('/') }}">musicalQuizz</a>
                </div>

                <h2 id="contador"> 1 de 20 </h2>
                <h1 id="question">¿Qué tipo de escala se muestra en la imagen?</h1>
                

                <img id ="imagen" src="quizz/white.png">

                <div class="links">
                    <button id="runo" class="green" onclick="checkAnswer('runo')">
                        Mayor
                    </button>
                    
                    <button id="rdos" class="green" onclick="checkAnswer('rdos')">
                    	 Menor
                    </button>                    

                    <button id="rtres" class="green" onclick="checkAnswer('rtres')">
                        La tusa
                    </button>
                    
                    <button id="rcua" class="green" onclick="checkAnswer('rcua')">
                    	 Musica Metalica
                    </button>
               
                </div>
            </div>
        </div>

        <form id="form" method="POST" action="{{ route('inject.score') }}" style="display: hidden;" > 
                    
            {{ csrf_field() }} 
            
            @if(Auth::check())
                <input name="id_usuario" type="text" value="{{ Auth::user()->id }}">
                <input name="id_actividad" type="text" value="3"> 
                <input id="finala" name="puntaje" type="text" value="0">
                <input id="finalb" name="tiempo" type="text" valie="0">
            @endif
            
        </form>

    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="sweetalert2.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=Q05sEj9b"></script>
    <script>
        const question = document.getElementById('question');
        
        const img = document.getElementById('imagen');

        const r1 = document.getElementById('runo');
        const r2 = document.getElementById('rdos');
        const r3 = document.getElementById('rtres');
        const r4 = document.getElementById('rcua');
        const h2 = document.getElementById('contador');

        var tiempo = Date.now();
        var puntaje = 0;
        var r = 0;
        var res = 0;
        var quotes = {!! json_encode($questions->toArray()) !!};
        var answers = ["Si La Re Sol Mi", "Lam", "Major", "Minor", "Locrio", "Corchea", "Lidio", "Beat",
                        "SiB", "Bémol", "Fortisimo", "Double", " Tenor", "Fusa", "semiCadencia", "C", "D", "A" ];


        var contador = 1;

        refresh();

        function refresh()
        {
            h2.innerText = "Pregunta " + contador + " De 20";
            r1.style.backgroundColor = '#548B2E';
            r2.style.backgroundColor = '#548B2E';
            r3.style.backgroundColor = '#548B2E';
            r4.style.backgroundColor = '#548B2E';

            r = Math.floor((Math.random() * 36) + 0);

            question.innerText = quotes[parseInt(r)]['pregunta'];

            if(quotes[parseInt(r)]['imagen'] != null)
            {
                img.src = quotes[parseInt(r)]['imagen'];
                img.style.display = 'inline';
            }
            else
            {
                img.style.display = 'none';
            }


            res = Math.floor((Math.random() * 4) + 1);
            console.log(res);
            switch(res)
            {
                case 1:
                    r1.innerText = quotes[parseInt(r)]['respuesta'];
                    r2.innerText = answers[Math.floor((Math.random() * 17) + 0)];
                    r3.innerText = answers[Math.floor((Math.random() * 17) + 0)];
                    r4.innerText = answers[Math.floor((Math.random() * 17) + 0)];
                    break;
                case 2:
                    r2.innerText = quotes[parseInt(r)]['respuesta'];
                    r1.innerText = answers[Math.floor((Math.random() * 17) + 0)];
                    r3.innerText = answers[Math.floor((Math.random() * 17) + 0)];
                    r4.innerText = answers[Math.floor((Math.random() * 17) + 0)];
                    break;
                case 3:
                    r3.innerText = quotes[parseInt(r)]['respuesta'];
                    r1.innerText = answers[Math.floor((Math.random() * 17) + 0)];
                    r2.innerText = answers[Math.floor((Math.random() * 17) + 0)];
                    r4.innerText = answers[Math.floor((Math.random() * 17) + 0)];
                    break;
                case 4:
                    r4.innerText = quotes[parseInt(r)]['respuesta'];
                    r1.innerText = answers[Math.floor((Math.random() * 17) + 0)];
                    r2.innerText = answers[Math.floor((Math.random() * 17) + 0)];
                    r3.innerText = answers[Math.floor((Math.random() * 17) + 0)];
                    break;
            }
        }

        function checkAnswer(button)
        {
           var select = document.getElementById(button).innerText;

           if(select == quotes[parseInt(r)]['respuesta'])
           {
                puntaje++;
                document.getElementById(button).style.backgroundColor = '#20D5FD';
           }
           else
           {
                document.getElementById(button).style.backgroundColor = '#FD2020';

                switch(res)
                {
                    case 1:
                        r1.style.backgroundColor = '#20D5FD';
                        break;
                    case 2:
                        r2.style.backgroundColor = '#20D5FD';
                        break;
                    case 3:
                        r3.style.backgroundColor = '#20D5FD';
                        break;
                    case 4:
                        r4.style.backgroundColor = '#20D5FD';
                        break;
                }

           }

           contador++;

           if(contador == 21)
           {
                @if( Auth::check() )
                {  
                    var now = Date.now();
                    tiempo =  now - tiempo; 
                    
                    document.getElementById('finala').value = puntaje;
                    document.getElementById('finalb').value = tiempo;
                    document.getElementById("form").submit();
                    Swal.fire({
                        title: '<div class="title"><a>{{ Auth::user()->nickname }}</a></div>',
                        html:
                            'Ovtuviste: '+ puntaje +' Aciertos De 20!',
                        showCloseButton: true,
                      
                        focusConfirm: false,
                        confirmButtonText:
                            ' Continuar ',
                    });
                }    
                @else
                {    
                    Swal.fire({
                        title: '<div class="title"><a>Quizz</a></div>',
                        html:
                            'Ovtuviste: '+ puntaje +' Aciertos De 20!',
                        showCloseButton: true,
                      
                        focusConfirm: false,
                        confirmButtonText:
                            ' Continuar ',
                    });
                    setTimeout(() => { window.location.href='{{ url('/') }}'; }, 6000);
                    
                }
                @endif
           }
           else
            setTimeout(() => { refresh(); }, 2000);           
          
        }

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
                        responsiveVoice.speak(boton.innerText,voz);
                    }
                });
            });
        }

        speach();


    </script>



</html>
