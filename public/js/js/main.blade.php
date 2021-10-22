<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Jardín botánico | UABCS</title>

	<link href="{{ asset('/public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/public/css/essentials.css') }}" rel="stylesheet">
    <link href="{{ asset('/public/css/header-1.css') }}" rel="stylesheet">
    <link href="{{ asset('/public/css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('/public/css/color_scheme/green.css') }}" rel="stylesheet">

    <link href="{{ asset('/public/css/extralayers.css') }}" rel="stylesheet">
    <link href="{{ asset('/public/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('/public/css/styleswitcher.css') }}" rel="stylesheet">


</head>
<body class="smoothscroll enable-animation">

		<!-- wrapper -->
		<div id="wrapper">

			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.b-0 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent b-0"
			-->
			<div id="header" class="navbar-toggleable-md sticky dark shadow-after-3 clearfix">

				

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>


						<!-- Logo -->
						<a class="logo float-left" href="#">
							<img src="{{ asset('/public/images/uabcsLogo2.png')}}" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse collapse float-right nav-main-collapse submenu-dark">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="active">
										<a class="" href="#slider">
											INICIO
										</a>
									</li>

									<li class="">
										<a class="" href="#app">
											APP
										</a>
									
									</li>
									<li class="">
										<a class="" href="#galeria">
											Colección de especies
										</a>
										
									</li>

									<li class=" ">
										<a class="" href="#glosario">
											Glosarío
										</a>
										
									</li>
									
									<!-- 
										MENU ANIMATIONS
											.nav-animate-fadeIn
											.nav-animate-fadeInUp
											.nav-animate-bounceIn
											.nav-animate-bounceInUp
											.nav-animate-flipInX
											.nav-animate-flipInY
											.nav-animate-zoomIn
											.nav-animate-slideInUp

											.nav-hover-animate 		= animate text on hover

											.hover-animate-bounceIn = bounceIn effect on mouse over of main menu
									-->
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>


			@yield('content')

			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
						<div class="col-md-4">
							<!-- Footer Logo -->
							<img class="footer-logo" src="{{ asset('/public/images/logoFooter.png')}}" alt="" />

							<!-- Small Description -->
							<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

							<!-- Contact Address -->
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">

										CP 23080<br>
										col. El Mezquitito<br>
										Carretera al sur km 5.5 <br>
									</li>
									<li class="footer-sprite phone">
										Teléfono: 612 123 8800 ext. 6300
									</li>
									<li class="footer-sprite email">
										<a href="mailto:placeholder@uabcs.mx">placeholder@uabcs.mx</a>
									</li>
								</ul>
							</address>
							<!-- /Contact Address -->

						</div>

						<div class="col-md-2">

							<!-- espacio utilizable -->

							<!-- espacio utilizable -->

						</div>

						<div class="col-md-2">

							<!-- Links -->
							<h4 class="letter-spacing-1">EXPLORAR</h4>
							<ul class="footer-links list-unstyled">
								<li><a  href="#slider">Hogar</a></li>
								<li><a href="#bienvenida">Bienvenida</a></li>
								<li><a href="#galeria">Colección de especies</a></li>
								<li><a href="#app">APP</a></li>
							</ul>
							<!-- /Links -->

						</div>

						<div class="col-md-4">


							<!-- Social Icons -->
							<div class="mt-20">
								<a href="#" class="social-icon social-icon-border social-facebook float-left" data-toggle="tooltip" data-placement="top" title="Facebook">

									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter float-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-gplus float-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>
					
							</div>
							<!-- /Social Icons -->

						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">

						&copy; Universidad Autónoma de Baja California Sur | Jardin Botánico
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->
	
	<script>var plugin_path = "{{ asset('/public/plugins/')}}";</script>
	<script src="{{ asset('/public/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{ asset('/public/js/scripts.js')}}"></script>

	<script>
		$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
	</script>

	@yield('more js')

</body>
</html>