@extends('jbotanico.main')


@section('content')
			<!-- SLIDER -->
			<section id="slider" class="h-800 parallax parallax-2 parallax-slider" style="background-image:url('{{ URL::to('/public/images/bannerRA.jpg')}}')">
				
				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						
					</div>
				</div>

			</section>
			<!-- /SLIDER -->



			<!-- INFO BAR -->
			{{-- <section class="info-bar info-bar-clean">
				<div class="container">

					<div class="row">

						<div class="col-sm-4">
							<i class="glyphicon glyphicon-certificate"></i>
							<h3>Compromiso</h3>
							<p>con la educación</p>
						</div>

						<div class="col-sm-4">
							<i class="glyphicon glyphicon-search"></i>
							<h3>Información de confianza</h3>
							<p>y de alta calidad</p>
						</div>

						<div class="col-sm-4">
							<i class="glyphicon glyphicon-flag"></i>
							<h3>Soporte en línea 24/7</h3>
							<p>Soporte gratis via email</p>
						</div>

					</div>

				</div>
			</section> --}}
			<!-- /INFO BAR -->

			<!-- AGRADECIMIENTO -->
			<section class="info-bar info-bar-clean">
				<div class="container ">
					<div class="row testimonial-bordered p-15">

						<div class="col-md-6">
							<img class="img-fluid" src="{{ asset('/public/images/paletaVegetal.jpg')}}" alt="">
						</div>

						<div class="col-md-6">
							<div class="heading-title heading-border-bottom heading-color text-center ">
								<h3>Agradecimiento</h3>
							</div>
							<p>Especial agradecimiento al Dr. Alfonso Medel por su valiosa aportación en la creación de "Paleta Vegetal", de la cual fue obtenida la información para la presente aplicación.</p>
							
						</div>
						

						

					</div>
					
				</div>
			</section>
			<!-- AGRADECIMIENTO -->



			<!-- WELCOME -->

			<section id="bienvenida">
				<div class="container">

					<div class="row">

						<div class="col-sm-6">
							<header class="mb-40">
								<h1 class="fw-300">Bienvenidos: Jardín botánico</h1>
								<h2 class="fw-300 letter-spacing-1 fs-14"><span>UABCS</span></h2>
							</header>

							<p>La Universidad Autónoma de Baja California Sur cuenta con una extensa variedad de flora endémica representativa del estado, lo cual permite a toda la comunidad universitaria visitar, conocer y aprender sobre el patrmonio natural de la institución.</p>
						
							


							<hr />

						</div>

						<div class="col-sm-6">

							<div class=" buttons-autohide controlls-over" data-plugin-options='{"singleItem": true, "autoPlay": 3400, "navigation": true, "pagination": true, "transitionStyle":"fadeUp"}'>
								{{-- <div>
									<img class="img-fluid" src="{{ asset('images/pitayaDulce.jpg')}}" alt="">
								</div> --}}
								<div>
									<img class="img-fluid" src="{{ asset('/public/images/botanica1.jpg')}}" alt="">
								</div>
								{{-- <div>
									<img class="img-fluid" src="{{ asset('images/datilillo.jpg')}}" alt="">
								</div> --}}
							</div>

						</div>

					</div>
				</div>
			</section>
			<!-- /WELCOME -->

			<!-- APP -->
			<section id="app" style="background-color:#F9F9F9">
				<div class="container" >
					<article class="row">
						<div class="col-md-6">
							<!-- OWL SLIDER -->
							<div class="owl-carousel buttons-autohide controlls-over m-0" data-plugin-options='{"items": 1, "autoHeight": true, "navigation": true, "pagination": true, "transitionStyle":"backSlide", "progressBar":"true"}'>
								<div>
									<img class="img-fluid" src="{{ asset('/public/images/bannerRA.jpg')}}" alt="">
								</div>
								<div>
									<img class="img-fluid" src="{{ asset('/public/images/botanicaApp.jpg')}}" alt="">
								</div>
								<div>
									<img class="img-fluid" src="{{ asset('/public/images/botanicaApp2.jpg')}}" alt="">
								</div>
							</div>
							<!-- /OWL SLIDER -->
						</div>
						<div class="col-md-6">
							<h3>RA-UABCS : Aplicación de Realidad Virtual</h3>
							<p>Aplicación de realidad aumentada que permite a los usuarios obtener información interesante sobre diferentes especies endémicas del estado de Baja California Sur, México, ubicadas en el jardín botánico de la Universidad Autónoma de Baja California Sur.</p>

							<p>Especies incluidas en la aplicación:</p>

							<ul>
								<li>Ciruelo Cimarrón</li>
								<li>Cardón Gigante</li>
								<li>Datilillo</li>
								<li>Pitaya Dulce</li>
							</ul>

						</div>
						<div class="col-8 offset-md-2">
							<a class="btn btn-primary  btn-lg wow btn-block btn-round btn-shadow-2  " data-wow-delay=".5s" target="_blank" href="{{ url("https://play.google.com/store/apps/details?id=com.UABCS.JBotanico")}}">Descargar Ahora</a>
						</div>
					</article>
					
				</div>

			</section>

			<!-- /APP -->

			
			<!-- Galería -->
			<section id="galeria">
				<div class="container">
					<div class="text-center">
						<h3 class="m-0">Colección de especies</h3>
					</div>

					<div id="portfolio" class="portfolio-nogutter">

						<ul class="nav nav-pills mix-filter mb-60">
							<li data-filter="all" class="filter active"><a href="#">Todas</a></li>
							<li data-filter="development" class="filter"><a href="#">1</a></li>
							<li data-filter="photography" class="filter"><a href="#">2</a></li>
							<li data-filter="design" class="filter"><a href="#">3</a></li>
						</ul>

						<!-- items contenedores -->
						<div class="row mix-grid">

							<!-- Ciruelo Cimarrón -->
							<div class="col-md-3 col-sm-3 mix development"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="{{ asset('/public/images/ciruelaCimarronx1.jpg')}}" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-search-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="#">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="{{ asset('/public/images/ciruelaCimarronx1.jpg')}}" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Ciruelo Cimarrón</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Cyrtocarpa edulis</a></li>
											{{-- <li><a href="#">Design</a></li> --}}
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix photography"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="{{ asset('/public/images/datilillox.jpg')}}" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-search-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="#">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="{{ asset('/public/images/datilillox.jpg')}}" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Datilillo</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Agave datylio</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="{{ asset('/public/images/cardonGigante.jpg')}}" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-search-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="#">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="{{ asset('/public/images/cardonGigante.jpg')}}" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Cardón Gigante</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Pachycereus pringlei</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="{{ asset('/public/images/pitayaDulcex.jpg')}}" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-search-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="#">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="{{ asset('/public/images/pitayaDulcex.jpg')}}" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Pitaya Dulce</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Stenocereus thurberi</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->

						</div>

					</div>

				</div>
			</section>
			<!-- /Galería -->


			<section id="glosario" style="background-color:#F9F9F9">
				<div class="container">
					<div class="text-center">
						<h3 class="m-0">Glosario</h3>
					</div>

					<div class="row">
						<div class="col-md-12">
							<h3>A</h3>
							<div class="row">
								<div class="col-md-12">
									<h4>Árbol</h4>
									Planta con un tronco principal leñoso o a veces varios, que tiene un tamaño alto.
									Un árbol de edad avanzada (años o decadas), podría expresar un tallo robusto y por consiguiente podría
									afectar alguna infraestructura cercana a él.
								</div>

								<div class="col-md-12">
									<h4>Arbusto</h4>
									Planta leñosa con uno o varios troncos, de menor tamaño menos que un árbol. También se puede referir a un árbol en su estado joven.
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<h3>C</h3>
							<div class="row">
								<div class="col-md-12">
									<h4>Cactácea</h4>
									Planta suculenta y, en gran mayoría, espinosa, conocida en conjunto como cacto o cactus.
								</div>
								<div class="col-md-12">
									<h4>Cubresuelo</h4>
									Herbácea anual o perenne que se extiende en el suelo, generalmente suelos arenosos.
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<h3>E</h3>
							<div class="row">
								<div class="col-md-12">
									<h4>Enredadera</h4>
									Planta herbácea, anual o perenne con tallo que no se puede soportar por su preopio peso y que requiere de otras especies para trepar o sujetarse de ellas, como arbustos.
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<h3>F</h3>
							<div class="row">
								<div class="col-md-12">
									<h4>Fácil propagación</h4>
									Algunas especies tienen el potencial de ser propagadas mediante semillas, hijuelos o varetas u otras técnicas, incrementando las posibilidades de obtener nuevos individuos de la misma especie.
								</div>
								<div class="col-md-12">
									<h4>Fácil o difícil obtención de semillas</h4>
									La colecta de semillas o partes vegetativas para la propagación estará en función de la cercanía o lejanía donde se distribuya la especie, del tipo de propágalo que genere o de la temporada del año de producción de material germinativo o vegetativo.
								</div>
								<div class="col-md-12">
									<h4>Follaje</h4>
									Capa superior de hojas en un árbol.
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<h3>H</h3>
							<div class="row">
								<div class="col-md-12">
									<h4>Herbácea</h4>
									Planta de porte bajo, con uno o numerosas ramas y que presenta numerosas formas.
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<h3>M</h3>
							<div class="row">
								<div class="col-md-12">
									<h4>Montículo</h4>
									Vegetación que es en forma de una pequeña colina o loma.
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<h3>N</h3>
							<div class="row">
								<div class="col-md-12">
									<h4>Nativa</h4>
									Especie que vive en los alrededores de la ciudad y dentro del estado de Baja California Sur
								</div>
								<div class="col-md-12">
									<h4>No nativa</h4>
									Especie que tiene origen en otra regíon de Mexico o el mundo, pero que está adaptada a regiones de escasa precipitación y altas temperaturas ambientales. Las especies no nativas qe aquí se sugieren, no representan ningún peligro para la diversidad vegetal o faunística de la región, ya que no están dentro de la clasificación de invasivas o exóticas.
								</div>
								<div class="col-md-12">
									<h4>(especie)NOM</h4>
									Especie mencionada en la Norma Oficial Mexicana NOM-059-SEMARNAT-2010. Donde se indica que la especie se encuentra en algún estado de peligro (debido al bajo número de individuos en su ambiente natural) y se indica su protección.
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<h3>O</h3>
							<div class="row">
								<div class="col-md-12">
									<h4>Ornato</h4>
									Plantas que se cultivan y comercializan con propósitos decorativos por sus características estéticas como las flores, hojas, perfume, follaje, furtos o tallos.
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<h3>P</h3>
							<div class="row">
								<div class="col-md-12">
									<h4>Palmera</h4>
									Árbol que crece hasta 20 m de altura, con tronco áspero, cilíndrico y de unos 30 cm de diámetro y copa sin ramas formada por las hojas.
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<h3>S</h3>
							<div class="row">
								<div class="col-md-12">
									<h4>Seto</h4>
									Delimitación de arbustos o árboles generalmente establecidos y mantenidos para formar una cerca o barrera.
								</div>
								<div class="col-md-12">
									<h4>Suculenta arrocetada</h4>
									Las plantas suculentas son aquellas en las que algún órgano o parte se ha modificado y permite el almacenamiento de agua en cantidades mayores al resto de las plantas, son arrocetadas cuando tien en las hojas muy juntas se disponen en forma de roseta.
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<h3>Z</h3>
							<div class="row">
								<div class="col-md-12">
									<h4>Zanja de bio retención</h4>
									Depresión de tierra diseñada para recolectar agua de lluvia, a traves de vegetación y suelo se limpia y filtra el agua de escorrentías por lluvia.
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
@endsection



@section('more js')
<script src="{{ asset('/public/js/view/demo.revolution_slider.js')}}"></script>
<script src="{{ asset('/public/plugins/slider.revolution/js/jquery.themepunch.revolution.js')}}"></script>
<script src="{{ asset('/public/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('/public/plugins/form.validate/jquery.form.min.js')}}"></script>
<script src="{{ asset('/public/plugins/form.validate/jquery.validation.min.js')}}"></script>


@endsection