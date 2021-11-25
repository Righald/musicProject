<!DOCTYPE html>
<html lang="en">
	<head>
		<title>musicProject</title>

		<!-- Fonts -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
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
		<div class="embla text-2xl rounded-xl" id="main-carousel">
			<div class="embla__viewport">
				<div class="embla__container rounded-3xl">
					
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
		<br/>

		<!-- Thumbs -->
		<div class="embla embla--thumb text-2xl rounded-xl border-green-500" id="thumb-carousel">
			<div class="embla__viewport">
				<div class="embla__container embla__container--thumb rounded-3xl">
					
					@foreach($cards as $card)
						<div class="embla__slide embla__slide--thumb">
							<button value="{{ $card->id }}" class="embla__slide__inner embla__slide__inner--thumb" type="button">

								<h1>{{ $card->titulo }}</h1>

							</button>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- Thumbs -->

		<!-- buttons -->
		<button class="green p-4" id="add" value="Jugar">
				<img class="m-auto" src="Backgrounds/plus.svg" style="height: 100px; width: 100px; color: white;">
				<br>
				<span class="text-black text-2xl" >Agregar</span>
		</button>

		<button class="green p-4" id="edit" value="Jugar">
				<img class="m-auto" src="Icons/pen-solid.svg" style="height: 100px; width: 100px; color: white;">
				<br>
				<span class="text-black text-2xl" >Editar</span>
		</button>
		<div>

		<div id="modalEdit" class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-blue-500 bg-opacity-50 transform scale-0 transition-transform duration-300 p-5">
			<form id="editform" class="bg-white p-4 flex flex-col rounded-3xl text-left max-w-2xl w-full">
				<button id="closebutton" type="button" class="focus:outline-none w-10 ml-auto">x</button>
				<div>
					Titulo:
				</div>
				<input class="border-b border-black" type="text" name="titulo">
				<div>
					Nota:
				</div>
				<textarea class="border-2 rounded-3xl p-2 border-gray-600 focus:outline-none focus:ring-2 focus:ring-green-400" style="min-height:250px" type="text" name="anotacion"></textarea>
				<input type="hidden" name="id">
				<div class="flex mt-3 gap-1 place-content-end">
					<button class="border-2 rounded-xl border-black px-2 py-1 border-black text-black">Cancelar</button>
					<button id="editNote" class="border-2 rounded-xl border-black px-2 py-1 border-black bg-green-400 text-black">Enviar</button>
				</div>
			</form>
		</div>

		<button class="green p-4" id="delete" value="Jugar">
				<img class="m-auto" src="Backgrounds/minus.svg" style="height: 100px; width: 100px; color: white;">
				<br>
				<span class="text-black text-2xl" >Eliminar</span>
		</button>
	</body>
	<script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js" ></script>
	<script type="text/javascript" src="/src/js/thumbButtons.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script type="text/javascript" src="/src/js/index.js"></script>
	<script src="https://unpkg.com/embla-carousel-class-names/embla-carousel-class-names.umd.js" ></script>
</html>
