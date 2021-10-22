@extends('main')


@section('content')
<!-- -->
			<section id="galeria" style="margin-top: 100px;">
				<div class="container">
					<div class="heading-title heading-border heading-color mt-0">
						<h2 class="fs-18 fw-400">Eje 1. Educación Pertinente y de Calidad </h2>
					</div>

					<div class="masonry-gallery columns-4 clearfix lightbox" id="gal"   data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}' id="gallery-content">

						@for ($i = 1; $i < 215; $i++)
							@if ($i != 156 && $i != 206)
						    	<a class="image-hover" href="{{ asset('public/images/2019/1/image_'.$i.'.jpg')}}"><img class="lazyload" data-src="{{ asset('public/images/2019/1/image_'.$i.'.jpg')}}" alt="..."></a>
						    @endif
						@endfor
						
					</div>
				</div>
			</section>
			<!-- -->

@endsection


@section('more js')

<script src="{{ asset('public/js/lazysizes.min.js')}}"></script>

<script>
// 	$(window).on('resize', function () {
//     $('.columns-6').toggleClass('columns-3', $(window).width() < 768);
// });
	if($(document).width() < 768) {
		//$('.columns-4').toggleClass('columns-2');
	}
</script>



@endsection