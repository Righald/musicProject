<html>
	<head class="form">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
            @font-face {
                font-family: sketchy;
                src: url(fonts/SKETCHY.otf);
            }
            *{
                margin: 0;
                font-family: "sketchy";
            }
            html,body{
                background-image: url('Backgrounds/music-notes-abstract-png.png');
                color: #636b6f;
                background-size: 100% auto;
                background-attachment: fixed;
                background-position: center;
                font-weight: 200;
                margin: 0;
                font-weight: bold;
                padding-bottom: 55px;
                height: auto!important;
                letter-spacing: 0.1em;
            }
            body > div.main{
                width: 250px;
                /*padding: 50px;*/
                color: black!important;
                font-size: 35px;
                margin: 55px auto;
            }
            body > div.main > div.main:first-of-type{
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                text-align: center;
                background-color: rgba(0,0,0,0.60);
                padding: 10px; 
                padding-top: 50px;
                padding-bottom:25px;
                border-bottom: 5px solid #868686;
            }
            h1 > a{
                font-size: 25px;
                transition:  transform .2s; 
                color: #f6b606;
                text-decoration: none;
                font-style: italic;
            }

            body > div.main > div.main:last-of-type{
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                text-align: center;
                background-color: #8CC24A;
                padding: 20px;
                padding-top: 25px;
                padding-bottom: 50px;
                text-align: left;
            }
            form > div.main{
                margin-bottom: 15px;
            }

            form > div.main > input,form > div.main > select {
                width: 100%;
                height: 40px;
                border: 0px;
            }
            form > div.main > input[type='text'],
            form > div.main > input[type='email'], 
            form > div.main > input[type='file'],
            form > div.main > input[type='date'],
            form > div.main > input[type='password'],
            form > div.main > select {
                max-width: 100%;
                padding: 0px 15px;
                height: 40px;
                background-color: #8CC24A;
                border-bottom: 1px solid gray;
                color: white;
            }
            form > div.main:last-of-type > input:last-of-type{
                border-radius: 5px;
                font-size: 35px;
                height: 40px;
                background-color: #f6b606;
                border: none;
                margin: 0;
            }
            input:-webkit-autofill,
            input:-webkit-autofill:hover, 
            input:-webkit-autofill:focus, 
            input:-webkit-autofill:active  {
                -webkit-box-shadow: 0 0 0 30px #8CC24A inset !important;
                -webkit-text-fill-color: black;
            }
            div.main > div.main > div.main{
                font-size:16px; 
                color:#cc0000;
            }
            
            body > div.main{
            width: 60%;
            /*padding: 50px;*/
            color: white;
            margin-bottom: 20px;
            }
            form > div.main > input[type='text'],
            form > div.main > input[type='email'],
            form > div.main > input[type='file'],
            form > div.main > input[type='date'],
            form > div.main > input[type='password'],
            form > div.main > select {
                /* max-width: 100%; */
                padding: 0px 15px;
                width: -webkit-fill-available;
                /* padding: 0px 15px; */
                height: 50px;
                margin: 10px 0px;
                background-color: #8CC24A;
                border-bottom: 1px solid gray;
                color: black;
                display: block;
                font-size: 35px;
            }

        </style>


	</head>
	
	
	<body class="form">
		<div class="main">
			<div class="main" style="font-size: 55px; color: #f6b606;-webkit-text-stroke-width: 1px;-webkit-text-stroke-color: black;">
				music Project
			</div>
			<div class="main">
				<form method="POST" action="{{ route('login') }}" > 
					
					{{ csrf_field() }} 
					
					<div class="main"><label>Email:</label><input name="email" type="text" required></div>
					<div class="main"><label>Password:</label><input name="password" type="password" required></div>
					<div class="main"><input name="login" type="submit" value="Entrar"></div>

				</form> 
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="sweetalert2.js"></script>
    <!-- <script src="jquery-3.5.0.min.js"></script> -->
    <script src="/js/bootstrap.min.js"></script>
   
    <script>
        @if(Session::get('message') != null)
                Swal.fire({
                    title: '<div class="main" class="title"><a>musicProject</a></div>',
                    html:
                        '{{ Session::get('message') }}',
                    showCloseButton: true,
                  
                    focusConfirm: false,
                    confirmButtonText:
                        ' Continuar ',
                });
        @endif
    </script>
</html>