<!DOCTYPE html>
<html lang="en">
  <head>
    <title>musicProject</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style type="">
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/src/css/base.css">
    <link rel="stylesheet" type="text/css" href="/src/css/embla.css">
    <link rel="stylesheet" type="text/css" href="/src/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/src/css/header.css">
    <link rel="stylesheet" type="text/css" href="/src/css/reset.css">    
  </head>

  <body>

    <div class="title m-b-md">
      <label>
          <a href="{{ url('/') }}">
          	music
          	Project
          </a>
      </label>
  	</div>

    <!-- Embla -->
    <div class="embla text-2xl" id="main-carousel">
      <div class="embla__viewport">
        <div class="embla__container">
          
          @foreach($cards as $card)
	          <div class="embla__slide">
	            <div class="embla__slide__inner">
	              <h1>{{ $card->titulo }}</h1>
	              <p>
	              	{{ $card->anotacion }}
	              </p>
	            </div>
	          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- Embla -->

    <!-- Thumbs -->
    <div class="embla embla--thumb text-2xl" id="thumb-carousel">
      <div class="embla__viewport">
        <div class="embla__container embla__container--thumb">
          
          @foreach($cards as $card)
	          <div class="embla__slide embla__slide--thumb">
	            <button class="embla__slide__inner embla__slide__inner--thumb" type="button">

	              <h1>{{ $card->titulo }}</h1>

	            </button>
	          </div>
					@endforeach
        </div>
      </div>
    </div>
    <!-- Thumbs -->

    <!-- buttons -->
    <button class="green p-4" onclick="window.location.href='{{ url('/misCartas') }}'" value="Jugar">
        <img class="mx-auto" src="Icons/pen-solid.svg" style="height: 100px; width: 100px; color: white;">
        <br>
        <span class="text-black" >Agregar</span>
    </button>

    <button class="green p-4" onclick="window.location.href='{{ url('/misCartas') }}'" value="Jugar">
        <img class="mx-auto" src="Icons/pen-solid.svg" style="height: 100px; width: 100px; color: white;">
        <br>
        <span class="text-black" >Editar</span>
    </button>

    <button class="green p-4" onclick="window.location.href='{{ url('/misCartas') }}'" value="Jugar">
        <img class="mx-auto" src="Icons/pen-solid.svg" style="height: 100px; width: 100px; color: white;">
        <br>
        <span class="text-black" >Eliminar</span>
    </button>
  </body>
    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
    <script type="text/javascript" src="/src/js/thumbButtons.js"></script>
    <script type="text/javascript" src="/src/js/index.js"></script>
</html>
