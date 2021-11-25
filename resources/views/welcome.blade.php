<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>musicProject</title>
        <link rel="stylesheet" href="{{asset('style.css')}}">
    </head>
    <body class="h-auto min-h-0">
        <nav x-data="accordion(6)" class="top-0 z-40 flex flex-wrap items-center justify-between w-full px-4 py-5 tracking-wide md:py-8 md:px-8 lg:px-14 place-content-end flex flex-col">
            <div @click="handleClick()" x-data="{open : false}" class="block text-gray-600 cursor-pointer lg:hidden ml-auto">
                <button @click="open = ! open" class="w-6 h-6 text-lg">
                    <svg x-show="! open" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" :clas="{'transition-full each-in-out transform duration-500':! open}">
                        <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect>
                        <path d="M7.94977 11.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M7.94977 23.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M7.94977 35.9498H39.9498" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>

                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <!-- End toggle button -->

            <!-- Toggle menu -->
            <div x-ref="tab" :style="handleToggle()" class="relative w-full overflow-hidden transition-all duration-700 lg:hidden max-h-0">
               @if(Auth::check())
                    <div class="nav-item active">
                        <a class="nav-link" href="{{url('update')}}">Cambiar Datos</a>
                    </div>
                    <div>
                        <a class="nav-link" href="{{url('logout')}}">Logout</a>
                    </div>
                    <div>

                        <a class="nav-link" href="{{url('scoreTable')}}">Tabla de puntuación</a>
                    </div>
                @else
                    <div class="nav-item active">
                        <a class="nav-link" href="{{url('register')}}">Registro</a>
                    </div>
                    <div>
                        <a class="nav-link" href="{{url('login')}}">Login</a>
                    </div>
                    <div>
                        <a class="nav-link" href="{{url('scoreTable')}}">Tabla de puntuación</a>
                    </div>
                @endif
                <div class="flex flex-row gap-1 place-content-center">
                    <div class="flex">
                        <button id="sound" class="sound soundbtn">
                            <img  class="mx-auto soundimg" src="{{asset('Icons/sound.svg')}}">
                        </button>
                    </div>
                    <div class="my-auto flex flex-row xl:flex-col xl:flex-col-reverse gap-1 xl:float-left">
                        <button class="sound p-1">
                            <img class="mx-auto my-auto text-center fontminus" src="{{asset('Backgrounds/minus.svg')}}">
                        </button>
                        <button class="sound button p-1">
                            <img class="mx-auto my-auto text-center fontplus" src="{{asset('Backgrounds/plus.svg')}}">

                        </button>
                    </div>
                </div>
            </div>
            <!-- End toggle menu -->
            <!-- End show menu sm,md -->
            <!-- Show Menu lg -->
            <div class="hidden w-full lg:flex lg:items-center lg:w-auto">
                <div class="items-center flex-1 pt-6 justify-center text-lg text-gray-500 lg:pt-0 list-reset lg:flex place-content-end gap-2">
                    @if(Auth::check())
                        <div class="nav-item active">
                            <a class="nav-link" href="{{url('update')}}">Cambiar Datos</a>
                        </div>
                        <div>
                            <a class="nav-link" href="{{url('logout')}}">Logout</a>
                        </div>
                        <div>

                            <a class="nav-link" href="{{url('scoreTable')}}">Tabla de puntuación</a>
                        </div>
                    @else
                        <div class="nav-item active">
                            <a class="nav-link" href="{{url('register')}}">Registro</a>
                        </div>
                        <div>
                            <a class="nav-link" href="{{url('login')}}">Login</a>
                        </div>
                        <div>
                            <a class="nav-link" href="{{url('scoreTable')}}">Tabla de puntuación</a>
                        </div>
                    @endif
                    <div class="flex flex-row gap-1 place-content-center">
                        <div class="flex">
                            <button id="sound" class="sound soundbtn">
                                <img  class="mx-auto soundimg" src="{{asset('Icons/sound.svg')}}">
                            </button>
                        </div>
                        <div class="my-auto flex flex-row flex-col flex-col-reverse gap-1 float-left">
                            <button class="sound p-1">
                                <img class="mx-auto my-auto text-center fontminus" src="{{asset('Backgrounds/minus.svg')}}">
                            </button>
                            <button class="sound button p-1">
                                <img class="mx-auto my-auto text-center fontplus" src="{{asset('Backgrounds/plus.svg')}}">

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="flex-center position-ref">

            <div class="content">
                
                <div class="title m-b-md text-center px-5">
                    <label class="title">
                        music Project
                    </label>
                </div>

                <div class="links">
                    <button class="text-black green" onclick="window.location.href='{{ url('/estudioMenu') }}'" value="Estudiar">
                        <img class="mx-auto" src="Icons/newspaper-solid.svg" style="height: 100px; width: 100px; color: white;">
                        Estudiar
                    </button>
                    
                    <button class="text-black green" onclick="window.location.href='{{ url('/juegosMenu') }}'" value="Jugar">
                        <img class="mx-auto" src="Icons/gamepad-solid.svg" style="height: 100px; width: 100px; color: white;">
                        Jugar
                    </button>
                    @if(Auth::check())
                        <button class="text-black green" onclick="window.location.href='{{ url('/misCartas') }}'" value="Tarjetas de estudio">
                            <img class="mx-auto" src="Icons/pen-solid.svg" style="height: 100px; width: 100px; color: white;">
                            Cartas
                        </button>
                    @endif
                </div>
            </div>
        </div>
        <script src="//unpkg.com/alpinejs" defer></script>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=Q05sEj9b"></script>
    <!-- <script src="jquery-3.5.0.min.js"></script> -->{{-- 
    <script src="/js/bootstrap.min.js"></script> --}}
    <script src="sweetalert2.js"></script>
    <script>
        
        let voz = 'Spanish Latin American Female';
        if (window.localStorage.getItem('audio') === 'true') {
            window.localStorage.setItem('audio', 'false');
        }else{
            $(".soundimg").attr('src','{{asset('Icons/mute.svg')}}');
            $(".soundbtn").removeClass("sound");
            $(".soundbtn").addClass("muted");
        }
        if (window.localStorage.getItem('fontsize') == null) {
            window.localStorage.setItem('fontsize', '1.5rem');
        }else{
            let fontsize = window.localStorage.getItem('fontsize', '1.5rem');
            let root = window.document.querySelector(":root");
            root.style.setProperty('--bodysize', fontsize);
        }
        
        @if(Session::get('message') != null)
                Swal.fire({
                    html:
                        '{{ Session::get('message') }}',
                    showCloseButton: true,
                  
                    focusConfirm: false,
                    confirmButtonText:
                        ' Continuar ',
                });
        @endif


        function speach() {

            $("a").mouseenter(function(){                
                if (window.localStorage.getItem('audio') === 'true') {
                    responsiveVoice.speak(this.innerHTML,voz);
                }
            });
            $("label").mouseenter(function(){                
                if (window.localStorage.getItem('audio') == 'true') {
                    responsiveVoice.speak(this.innerHTML,voz);
                }
            });
            let botones = document.querySelectorAll("button");
            botones.forEach(boton => {
                boton.addEventListener("mouseenter",() => {                    
                    if (window.localStorage.getItem('audio') == 'true') {
                        responsiveVoice.speak(boton.value,voz);
                    }
                });
            });
        }
        speach();

        $(".soundbtn").click(function(){
            if (window.localStorage.getItem('audio') === 'true') {
                responsiveVoice.speak('Voz del texto desactivada',voz);
                window.localStorage.setItem('audio', 'false');                
                $(".soundimg").attr('src','{{asset('Icons/mute.svg')}}');
                $(".soundbtn").removeClass("sound");
                $(".soundbtn").addClass("muted");
            }else{
                responsiveVoice.speak('Voz del texto activada',voz);
                window.localStorage.setItem('audio', 'true');                
                $(".soundimg").attr('src','{{asset('Icons/sound.svg')}}');
                $(".soundbtn").removeClass('muted');
                $(".soundbtn").addClass('sound');
            }
        });
        $(".fontplus").click(function(){

            let root = window.document.querySelector(":root");
            let fontsize = getComputedStyle(root).getPropertyValue('--bodysize').split('rem')[0];
            fontsize = parseFloat(fontsize)

            console.log({font: fontsize});
            if (fontsize < 1.8) {
                fontsize += 0.1;
                root.style.setProperty('--bodysize', fontsize+"rem");
                window.localStorage.setItem('fontsize', fontsize+"rem");
            }    
        });
        $(".fontminus").click(function(){
            let root = window.document.querySelector(":root");
            let fontsize = getComputedStyle(root).getPropertyValue('--bodysize').split('rem')[0];
            fontsize = parseFloat(fontsize)

            console.log({font: fontsize});
            if (fontsize >1.5) {
                fontsize -= 0.1;
                root.style.setProperty('--bodysize', fontsize+"rem");
                window.localStorage.setItem('fontsize', fontsize+"rem");
            } 
        });

        document.addEventListener('alpine:init', () => {
                Alpine.store('accordion', {
                    tab: 0
                });
                Alpine.data('accordion', (idx) => ({
                    init() {
                        this.idx = idx;
                    },
                    idx: -1,
                    handleClick() {
                        this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                    },
                    handleRotate() {
                        return this.$store.accordion.tab === this.idx ? '-rotate-180' : '';
                    },
                    handleToggle() {
                        return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                    }
                }));
            })

    </script>
</html>
