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

$('#delete').click(function(){

	let id = window.document.querySelector('.is-selected').querySelector('button').value;
	$.ajax({
		url: "deleteCard/"+ id,
		method: "DELETE"
	}).done(function() {
		console.log('borrado');
	});

});

$('#edit').click(function(){

	let id = window.document.querySelector('.is-selected').querySelector('button').value;
	$.ajax({
		url: 'getCard/'+id,
		method: "get"
	}).done(function(response) {
		console.log(response);
		response = response.carta[0];
		let form = window.document.querySelector('#modalEdit');
		document.getElementsByName("titulo")[0].value = response.titulo;
		document.getElementsByName("anotacion")[0].value = response.anotacion;
		document.getElementsByName("id")[0].value = response.id;
	});

});
$('#editNote').click(function(e){
	e.preventDefault();
	let data = window.document.querySelector('#modalEdit').querySelectorAll('input');
	let dataAux = window.document.querySelector('#modalEdit').querySelector('textarea').value;
	console.log(dataAux)
	$.ajax({
		url: 'updateCard/'+data[1],
		method: "post",
		dataType: 'json',
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		data: JSON.stringify({titulo: data[0],anotacion: dataAux})
	}).done(function(response) {
		console.log(response);
	});

});



const button = document.getElementById('edit')
const closebutton = document.getElementById('closebutton')
const modal = document.getElementById('modalEdit')

button.addEventListener('click',()=>modal.classList.add('scale-100'))
closebutton.addEventListener('click',()=>modal.classList.remove('scale-100'))