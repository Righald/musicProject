<button id="openButton" class="w-12 h-12 m-4 rounded-full left-0 bottom-0 absolute animate-bounce" style="background-color:#548B2E;">
    <img class="mx-auto" src="Icons/music-svgrepo-com.svg" style="height: 100%; width: 100%; color: white;">
</button>

<div id="modalRandom" class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-blue-500 bg-opacity-50 transform scale-0 transition-transform duration-300 p-5">
    <div class="bg-white p-4 flex flex-col rounded-3xl text-left max-w-2xl w-full">
        <button type="button" class="closebutton focus:outline-none w-10 ml-auto">x</button>
        
        <div id="titulo">
            
        </div>
        
        <div class="border-2 rounded-3xl p-2 border-gray-600 focus:outline-none focus:ring-2 focus:ring-green-400" style="min-height:250px" type="text" id="anotacion">
            
        </div>

        <div class="flex mt-3 gap-1 place-content-end">
            <button class="closebutton border-2 rounded-xl border-black px-2 py-1 border-black text-black">Entendido.</button>
        </div>
    </div>
</div>


<script type="text/javascript">

    const openButton = document.getElementById('openButton');
    const modalNew = document.getElementById('modalRandom');

    openButton.addEventListener('click',()=>modalNew.classList.add('scale-100'));

    $('.closebutton').click(function(){
        modalNew.classList.remove('scale-100');
    });
    
    $('#openButton').click(function(){
        $.ajax({
            url: 'randomCard',
            method: "get"
        }).done(function(response) {
            console.log();
            document.getElementById("titulo").innerHTML = response.carta.titulo;
            document.getElementById("anotacion").innerHTML = response.carta.anotacion;
        });
    });
</script>
