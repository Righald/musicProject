<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>musicalMemory</title>
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
	
	<style>
		button.green{
			background-image: ;
		    border-radius: 45px 45px 45px 45px;
		    -moz-border-radius: 45px 45px 45px 45px;
		    -webkit-border-radius: 45px 45px 45px 45px;
		    transition: 0.2s;
		    border: 5px solid #8CC24A;
		    height: 140px;
		    width: 140px;
		    font-family: "sketchy",'Nunito', sans-serif!important;
		    font-size: 30px;
		    background-repeat: no-repeat;
		    background-size: cover;
		    margin: 15px;
		}

		button.green:hover{
			background-image: ;
		    border-radius: 50%;
		    transition: 0.5s;
		    border: 5px solid #548B2E;
		    height: 140px;
		    width: 140px;
		    font-family: 'Nunito', sans-serif;
		    background-repeat: no-repeat;
		    background-size: cover;
		    margin: 15px;
		    justify-content: space-around;
		}

		img{
			height: 85px;
			width: 85px;
			text-align: center;
		}
	</style>
</head>
<body>
    <div class="flex-center position-ref full-height">

        <div class="content">
            
            <div class="title m-b-md">
                <a href="{{ url('/') }}">musicalMemory</a>
            </div>

            <button class="green" onclick="voltear(0)"><img id="0" src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(1)"><img id="1" src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(2)"><img id="2" src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(3)"><img id="3" src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(4)"><img id="4" src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(5)"><img id="5" src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(6)"><img id="6" src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(7)"><img id="7" src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(8)"><img id="8" src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(9)"><img id="9"src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(10)"><img id="10"src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(11)"><img id="11"src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(12)"><img id="12"src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(13)"><img id="13"src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(14)"><img id="14"src="Icons/stroopwafel-solid.svg"></button>
            <button class="green" onclick="voltear(15)"><img id="15"src="Icons/stroopwafel-solid.svg"></button>

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

    <script>
    	var cartas = ["0", "1", "2", "3", "4", "5", "6", "7","8", "9", "10", "11", "12", "13", "14", "15", ];

    	var encontradas = [];
		//Randomizar Arreglo De Cartas
		var tiempo = Date.now();
	  	var currentIndex = cartas.length, temporaryValue, randomIndex;
	  	var pares = 0;
	  	var puntaje = 0;
	  	var activa = undefined;
	  	var element = undefined;

	  	while (0 !== currentIndex) 
	  	{

	    	randomIndex = Math.floor(Math.random() * currentIndex);
	    	currentIndex -= 1;

	    	temporaryValue = cartas[currentIndex];
	    	cartas[currentIndex] = cartas[randomIndex];
	    	cartas[randomIndex] = temporaryValue;
	 	}

    	function voltear(index)
    	{	
    		var valor = cartas[index];

    		if(activa == undefined)
	    	{
	    		activa = cartas[index];

	    		if(cartas[index]>7)
	    		{
	    			valor-=8;
	    		}
	    		
	    		element = document.getElementById(index);
	    		element.src = 'memory/'+valor+'.png';	
	    	}
	    	else
	    	{
	    		if(cartas[index]>7)
	    		{
	    			valor-=8;
	    		}
	    		
	    		var comp = cartas[index];
	    		document.getElementById(index).src = 'memory/'+valor+'.png';
	    		
	    		console.log('activa');
	    		console.log(activa);
	    		console.log('carta');
	    		console.log(cartas[index]);
	    		console.log('menos 8');
	    		console.log(comp-8);
	    		console.log('mas 8');
	    		console.log(parseInt(comp)+8);
	    			
	    		

	    		if(activa == (comp-8) || activa == (parseInt(comp)+8))
	    		{
	    			if(!encontradas.includes(activa) || !encontradas.includes(comp))
	    			{
	    				pares++;
	    			}

	    			encontradas.push(activa);
	    			encontradas.push(comp);
	    			console.log('PAR!');
	    			console.log(pares);
	    			puntaje+=5;
	    			activa = undefined;

	    			if(pares == 8)
		           	{
		                @if( Auth::check() )
		                {  
		                    var now = Date.now();
		                    var totalTime = (Math.floor((now - tiempo)/1000)+"");
		                    document.getElementById('finala').value = puntaje;
		                    document.getElementById('finalb').value = tiempo;
		                    document.getElementById("form").submit();
		                    Swal.fire({
		                        title: '<div class="title"><a>{{ Auth::user()->nickname }}</a></div>',
		                        html:
		                            '¡Ovtuviste: '+ puntaje +' puntos! en '+totalTime+' segundos',
		                        showCloseButton: true,
		                      
		                        focusConfirm: false,
		                        confirmButtonText:
		                            ' Continuar ',
		                    });
		                }    
		                @else
		                {    
		                    var now = Date.now(); 
		                    var totalTime = (Math.floor((now - tiempo)/1000)+"");
		                    Swal.fire({
		                        title: '<div class="title"><a>Memory</a></div>',
		                        html:
		                            '¡Ovtuviste: '+ puntaje +' puntos! en '+totalTime+' segundos',
		                        showCloseButton: true,
		                      
		                        focusConfirm: false,
		                        confirmButtonText:
		                            ' Continuar ',
		                    });
		                    setTimeout(() => { window.location.href='{{ url('/') }}'; }, 6000);
		                    
		                }
		                @endif
		           	}
	    		}
	    		else
	    		{ 
	    			setTimeout(() => { 
	    				document.getElementById(index).src = 'Icons/stroopwafel-solid.svg';    		
	    				element.src = 'Icons/stroopwafel-solid.svg'; 
		    			element = undefined;
	    				activa = undefined;
	    			}, 1000);
	    			
	    			console.log('nop');
	    			puntaje-=2;

	    		}	
	    	}	

    	}

    </script>

</html>