<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SCORES</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">      
        <link rel="stylesheet" href="style.css">

        <style type="text/css">
        	table { 
			  width: 100%; 
			  border-collapse: collapse;
			  font-size: 20px;
			}
			/* Zebra striping */
			tr:nth-of-type(odd) { 
			  background: #eee; 
			}
			th { 
			  background: #333; 
			  color: white; 
			  font-weight: bold; 
			}
			td, th { 
			  padding: 6px; 
			  border: 1px solid #ccc; 
			  text-align: left; 
			}
            h1{
            	font-family: nunito;
			    color: orange;
			    text-transform: uppercase;
			    -webkit-text-stroke-width: 1px;
			    -webkit-text-stroke-color: black;
            }
            td{
            	font-family: nunito;
			    color: orange;
			    font-weight: bold;
            }
        </style>
	</head>
	
	<body>

	<head>
		<title>SCORES</title>
	</head>
	<body>        
        <div class="title m-b-md">
           <a href="{{ url('/') }}">Mejores Puntuaciones</a>
        </div>

        <h1>Space Invaders</h1>
        <table style="width:100%">
	  		<tr>
		    	<th>#</th>
		    	<th>NickName</th>
		    	<th>Juego</th>
		    	<th>Puntaje</th>
		  	</tr>

	  	 	@foreach($score1 as $scor)
		  		<tr>
				    <td>{{ $loop->iteration }}</td>
				    <td>{{ $user[($scor->id_usuario-1)]->nickname }}</td>
				    <td>{{ $activities[($scor->id_actividad-1)]->nombre }}</td>
				    <td>{{ $scor->puntaje }}</td>
				</tr>
			@endforeach
		</table>

		<h1>Memorama</h1>
        <table style="width:100%">
	  		<tr>
		    	<th>#</th>
		    	<th>NickName</th>
		    	<th>Juego</th>
		    	<th>Puntaje</th>
		  	</tr>

	  	 	@foreach($score2 as $scor)
		  		<tr>
				    <td>{{ $loop->iteration }}</td>
				    <td>{{ $user[($scor->id_usuario-1)]->nickname }}</td>
				    <td>{{ $activities[($scor->id_actividad-1)]->nombre }}</td>
				    <td>{{ $scor->puntaje }}</td>
				</tr>
			@endforeach
		</table>

		<h1>Quizz</h1>
        <table style="width:100%">
	  		<tr>
		    	<th>#</th>
		    	<th>NickName</th>
		    	<th>Juego</th>
		    	<th>Puntaje</th>
		  	</tr>

	  	 	@foreach($score3 as $scor)
		  		<tr>
				    <td>{{ $loop->iteration }}</td>
				    <td>{{ $user[($scor->id_usuario-1)]->nickname }}</td>
				    <td>{{ $activities[($scor->id_actividad-1)]->nombre }}</td>
				    <td>{{ $scor->puntaje }}</td>
				</tr>
			@endforeach
		</table>

	</body>
</html>