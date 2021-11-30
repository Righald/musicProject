let voz = 'Spanish Latin American Female';
$.ajaxSetup({
	headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

const mainCarouselWrap = document.getElementById("main-carousel");

const mainCarouselView = mainCarouselWrap.querySelector(".embla__viewport");
let options = {selected: "is-selected"};

const mainCarousel = EmblaCarousel(mainCarouselView, {
	selectedClass: "",
	loop: false,
	skipSnaps: false
},options);

const thumbCarouselWrap = document.getElementById("thumb-carousel");

const thumbCarouselView = thumbCarouselWrap.querySelector(".embla__viewport");
const thumbCarousel = EmblaCarousel(thumbCarouselView, {
	selectedClass: "",
	containScroll: "keepSnaps",
	dragFree: true
});

thumbCarousel.slideNodes().forEach((thumbNode, index) => {
	const onClick = onThumbClick(mainCarousel, thumbCarousel, index);
	thumbNode.addEventListener("click", onClick, false);
});

const onSelect = (eventName) => {
	console.log(window.document.querySelector('.is-selected'))
	console.log(eventName)
}
const syncThumbCarousel = followMainCarousel(mainCarousel, thumbCarousel);
mainCarousel.on("select", syncThumbCarousel);
thumbCarousel.on("init", syncThumbCarousel);
thumbCarousel.on('select', onSelect);

$('#delete').click(function(e){
	e.preventDefault();
	Swal.fire({
		html:
			'Seguro que deseas eliminar esta tarjeta?',
		showCloseButton: true,
		showCancelButton: true,
		focusConfirm: false,
		confirmButtonText: 'Continuar',
		cancelButtonText: 'Cancelar',     
		denyButtonText: `Don't save`,
	}).then((result) => {
		if (result.isConfirmed) {
			let id = window.document.querySelector('.is-selected').querySelector('button').value;
			$.ajax({
				url: "deleteCard/"+ id,
				method: "DELETE"
			}).done(function(response) {
				Swal.fire({
					html: response.message,
					showCloseButton: true,
					focusConfirm: false,
				}).then((result) => {
					location.reload()
				});
			});
        }
	});
});

$('#edit').click(function(){

	let id = window.document.querySelector('.is-selected').querySelector('button').value;
	$.ajax({
		url: 'getCard/'+id,
		method: "get"
	}).done(function(response) {
		response = response.carta[0];
		let form = window.document.querySelector('#modalEdit');
		document.getElementsByName("tituloEdit")[0].value = response.titulo;
		document.getElementsByName("anotacionEdit")[0].value = response.anotacion;
		document.getElementsByName("idEdit")[0].value = id;
	});

});

$('#editNote').click(function(e){
	e.preventDefault();
	Swal.fire({
		html: 'Seguro que deseas editar esta tarjeta?',
		showCloseButton: true,
		showCancelButton: true,
		focusConfirm: false,
		confirmButtonText: 'Continuar',
		cancelButtonText: 'Cancelar',     
		denyButtonText: `Don't save`,
	}).then((result) => {
		if (result.isConfirmed) {
			let data = window.document.querySelector('#modalEdit').querySelectorAll('input');
			let dataAux = window.document.querySelector('#modalEdit').querySelector('textarea').value;
			$.ajax({
				url: 'updateCard/'+data[1].value,
				method: "post",
				dataType: 'json',
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				data: {titulo: data[0].value,anotacion: dataAux}
			}).done(function(response) {
				Swal.fire({
					html: response.message,
					showCloseButton: true,
					focusConfirm: false,
				}).then((result) => {
					location.reload()
				});
			});
        }
	});
});

$('#addNote').click(function(e){

	e.preventDefault();
	Swal.fire({
		html: 'Seguro que deseas agregar esta tarjeta?',
		showCloseButton: true,
		showCancelButton: true,
		focusConfirm: false,
		confirmButtonText: 'Continuar',
		cancelButtonText: 'Cancelar',     
		denyButtonText: `Don't save`,
	}).then((result) => {
		if (result.isConfirmed) {
			let data = window.document.querySelector('#newform').querySelectorAll('input');
			let dataAux = window.document.querySelector('#newform').querySelector('textarea').value;
			$.ajax({
				url: 'storeCard',
				method: "post",
				dataType: 'json',
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				data: {titulo: data[0].value,anotacion: dataAux}
			}).done(function(response) {
				Swal.fire({
					html: response.message,
					showCloseButton: true,
					focusConfirm: false,
				}).then((result) => {
					location.reload()
				});
			});
        }
	});

});



const button = document.getElementById('edit')
const buttonNew = document.getElementById('add')
const closebutton = document.getElementById('closebutton')
const closebuttonNew = document.getElementById('closebuttonNew')
const modal = document.getElementById('modalEdit')
const modalNew = document.getElementById('modalNew')

button.addEventListener('click',()=>modal.classList.add('scale-100'))
closebutton.addEventListener('click',()=>modal.classList.remove('scale-100'))

buttonNew.addEventListener('click',()=>modalNew.classList.add('scale-100'))
closebuttonNew.addEventListener('click',()=>modalNew.classList.remove('scale-100'))

function speach() {

	$("a").mouseenter(function(){                
		if (window.localStorage.getItem('audio') === 'true') {
			responsiveVoice.speak(this.innerHTML,voz);
		}
	});
	$("h1").mouseenter(function(){                
		if (window.localStorage.getItem('audio') == 'true') {
			responsiveVoice.speak(this.innerHTML,voz);
		}
	});
	$("p").mouseenter(function(){                
		if (window.localStorage.getItem('audio') == 'true') {
			responsiveVoice.speak(this.innerHTML,voz);
		}
	});
	let botones = document.querySelectorAll("button.green");
	botones.forEach(boton => {
		boton.addEventListener("mouseenter",() => {                    
			if (window.localStorage.getItem('audio') == 'true') {
				responsiveVoice.speak(boton.value,voz);
			}
		});
	});
}
speach();

if (window.localStorage.getItem('fontsize') == null) {
    window.localStorage.setItem('fontsize', '1.5rem');
}else{
    let fontsize = window.localStorage.getItem('fontsize', '1.5rem');
    let root = window.document.querySelector(":root");
    root.style.setProperty('--bodysize', fontsize);
}