<!DOCTYPE html>
<html>
<head>
    <title>musicInvaders</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        html, body {
            background-image: url('space/back.gif');
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            min-height: 100vh;
            margin: 0;
            background-color: #222;
            background-image: url(space/back.gif);
            background-position: center;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            margin: 0;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .full-height {
            min-height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            color: orange;
            font-size: 54px;
            color: orange;
            text-transform: uppercase;
            -webkit-text-stroke-width: 3px;
            -webkit-text-stroke-color: black;
        }

        .links > a {
            
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .title > a {
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            min-height: 100vh;
            margin: 0;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        button{
            border-radius: 45px;
            -moz-border-radius: 45px;
            -webkit-border-radius: 45px;
            transition: 1s;
            border: 35px none #000000;
            height: 100%;
            font-family: 'Nunito', sans-serif;
            font-size: 25px;
            font-weight: bold;
            background-color: #548B2E;
            background-repeat: no-repeat;
            background-size: cover;
            margin: 2px;
        } 
        img{
            max-width:100%;
            height:auto;
            display: none;
        }
        div#mysketch{
            max-width: 500px;
            margin: auto;
            height: 100%;
        }
        #gameOver{
            position: absolute;
            width: 100%;
            bottom: 50%;
            font-size: 25px;
            font-weight: bolder;
            -webkit-text-stroke: 1pt #181818;
            color: gray;
        }
        #myButtons{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            min-height: 60px;
            max-width: 500px;
            width: 100%;
            align-self: center;
        }
        #myButtons > button{
            height: 40px;
            width: 30%;
        }
        @media(max-width: 700px) {
            .title {
                font-size: 24px;
            }
        }
    </style>
</head>
    <body>
        <div style="display: block; flex: 1 0 auto;">
            <div id="mysketch"></div>
        </div>
        <div id="myButtons">
            <button id="first"></button>
            <button id="ssecond"></button>
            <button id="third"></button>
        </div>
        <div id="gameOver" style="display: none;">GAME OVER</div>
        <form id="form" method="POST" action="{{ route('inject.score') }}" style="display: none;" > 
                    
            {{ csrf_field() }} 
            
            @if(Auth::check())
                <input name="id_usuario" type="text" value="{{ Auth::user()->id }}">
                <input name="id_actividad" type="text" value="2"> 
                <input id="finala" name="puntaje" type="text" value="0">
                <input id="finalb" name="tiempo" type="text" valie="0">
            @endif
            
        </form>
    </body>
    <script src="jquery-3.5.0.min.js"></script>
    <script src="sweetalert2.js"></script>
    <script src="p5.js"></script>
    <script>
        var time = Date.now();    
        let myElipseArray = [];
        var width;
        var height;
        var timer=150;
        var points=0;
        var globalSpeed=1;
        var globalTimer=200;
        var globalCount = 0;
        var answers = ['DO','RE','MI','FA','SOL','LA','SI'];
        var time = new Date();
        var gamestatus=false;
        var auxiliarElipse;
        var gameOver=false;
        let DO;
        let RE;
        let MI;
        let FA;
        let SOL;
        let LA;
        let SI;

        function preload() {
            DO = loadImage("{{asset('./space/DO.png')}}");
            RE = loadImage("{{asset('./space/RE.png')}}");
            MI = loadImage("{{asset('./space/MI.png')}}");
            FA = loadImage("{{asset('./space/FA.png')}}");
            SOL= loadImage("{{asset('./space/SOL.png')}}");
            LA = loadImage("{{asset('./space/LA.png')}}");
            SI = loadImage("{{asset('./space/SI.png')}}");
        }
        class myEllipse{
            constructor(width,height){
                this.x = (Math.floor(Math.random() * (width-80))+80);
                this.y = -60;
                this.speed=globalSpeed;
                this.count=globalCount;
                this.img;
                this.answer;
                this.getAnswer();
            }
            display(){
                imageMode(CENTER);                
                image(this.img,this.x, this.y,160,160);
            }
            move(){
                if (this.y < (height) ) {
                    this.y+=this.speed;
                }else{
                    $('#gameOver').show('slow',function(){
                        gameOver=true;
                    });
                }
            }
            getAnswer(){
                var selected=Math.floor(Math.random()*7);
                this.answer=answers[selected];
                switch(selected){
                    case 0:
                        this.img=DO;
                        this.answer='DO';
                        break;
                    case 1:
                        this.img=RE;
                        this.answer='RE';
                        break;
                    case 2:
                        this.img=MI;
                        this.answer='MI';
                        break;
                    case 3:
                        this.img=FA;
                        this.answer='FA';
                        break;
                    case 4:
                        this.img=SOL;
                        this.answer='SOL';
                        break;
                    case 5:
                        this.img=LA;
                        this.answer='LA';

                        break;
                    case 6:
                        this.img=SI;
                        this.answer='SI';
                        break;
                }
            }
        }
        function setup() {
            var canvasDiv = document.getElementById('mysketch');
            var parentwidth = canvasDiv.offsetWidth;
            var parentheight = canvasDiv.offsetHeight;
            var canvas = createCanvas(parentwidth,parentheight);
            canvas.parent('mysketch');
            width = this.width;
            height = this.height;
            createArray(width,height);
            globalCount++;
            auxiliarElipse=myElipseArray[0];
            setButtons();
            frameRate(60);
        }
        function draw() {
            clear();
            if (gameOver) {
                noLoop();
                    var stopTime = Date.now();
                    var totalTime = (Math.floor((stopTime - time)/1000)+"");
                    @if( Auth::check())
                        document.getElementById('finala').value = points;
                        document.getElementById('finalb').value = stopTime - time;
                        Swal.fire({
                            title: '<div class="title"><a>GAME OVER</a></div>',
                            html:
                                '{{Auth::user()->nickname}} obtuviste: '+points+' puntos en: '+totalTime+' segundos',
                            showCloseButton: true,
                          
                            focusConfirm: false,
                            confirmButtonText:
                                ' Continuar ',
                            onClose: function(result){
                                if (result) {
                                    console.log("terminado");
                                    document.getElementById("form").submit();
                                }
                            }
                        });
                        /*alert( " "+points+" puntos!");*/
                    @else
                        console.log('tiempo');
                        Swal.fire({
                            title: '<div class="title"><a>GAME OVER</a></div>',
                            html:
                                'Invitado obtuviste: '+points+' puntos en: '+totalTime+' segundos',
                            showCloseButton: true,
                          
                            focusConfirm: false,
                            confirmButtonText:
                                ' Continuar ',
                            onClose: function(result){
                                if (result) {
                                    console.log("terminado");
                                    window.location.href = '{{ url('/') }}';
                                }
                            }
                        });
                        /*alert(points + " Aciertos De 20!");*/
                        /*window.location.href='{{ url('/') }}';*/
                    @endif
            }
            if (myElipseArray.length > 0 && (auxiliarElipse.globalCount != myElipseArray[0].globalCount)){
                setButtons();
                auxiliarElipse = myElipseArray[0].globalCount;
            }
            if (myElipseArray.length > 0) {
                myElipseArray.forEach(function(elipse){
                    elipse.move();
                    elipse.display();
                    if(timer==0){
                        globalCount++;
                        createArray(width-25,height-35);
                        setDificulty();
                        elipse.speed = globalSpeed;
                    }
                });
                auxiliarElipse = myElipseArray[0];
            }else{
                if(timer==0){
                    globalCount++;
                    createArray(width-25,height-35);
                    setDificulty();
                    setButtons();
                }
            }
            timer--;
            console.log(globalSpeed + " speed ; " + points + " points")
        }
        function createArray(width,height){
            if (myElipseArray.length < 100) {
                myElipseArray.push(new myEllipse(width,height));
                globalCount++;
            }
        }
        function setDificulty(){
            if(points<=15){
                timer=170;
            }
            if(points>15 && points<=30){
                timer=120;
                globalSpeed=2;
            }
            if (points>30) {
                timer=70;
                globalSpeed=3;
            }
        }
        function setButtons(){
            var random = Math.floor(Math.random()*3);
            var aux;
            switch(random){
                case 0:
                    document.getElementById("first").value = myElipseArray[0].answer;
                    document.getElementById("first").innerHTML = myElipseArray[0].answer;
                    aux = Math.floor(Math.random()*7);
                    document.getElementById("ssecond").value =answers[aux] ;
                    document.getElementById("ssecond").innerHTML =answers[aux] ;
                    aux = Math.floor(Math.random()*7);
                    document.getElementById("third").value =answers[aux] ;
                    document.getElementById("third").innerHTML =answers[aux] ;
                    break;
                case 1:
                    document.getElementById("ssecond").value = myElipseArray[0].answer;
                    document.getElementById("ssecond").innerHTML = myElipseArray[0].answer;
                    aux = Math.floor(Math.random()*7);
                    document.getElementById("first").value = answers[aux];
                    document.getElementById("first").innerHTML = answers[aux];
                    aux = Math.floor(Math.random()*7);
                    document.getElementById("third").value = answers[aux];
                    document.getElementById("third").innerHTML = answers[aux];
                    break;
                case 2:
                    document.getElementById("third").value = myElipseArray[0].answer;
                    document.getElementById("third").innerHTML = myElipseArray[0].answer;
                    aux = Math.floor(Math.random()*7);
                    document.getElementById("ssecond").value = answers[aux];
                    document.getElementById("ssecond").innerHTML = answers[aux];
                    aux = Math.floor(Math.random()*7);
                    document.getElementById("first").value = answers[aux];
                    document.getElementById("first").innerHTML = answers[aux];
                    break;
            }
        }
        $('button').click(function(){
            if (this.value == myElipseArray[0].answer) {
                console.log('correcto');
                myElipseArray.shift();
                points+=1;
                if (myElipseArray.length > 0) {
                    setButtons();
                }
            }
        });
    </script>
</html>