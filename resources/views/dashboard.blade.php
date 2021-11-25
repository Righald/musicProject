<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Music Project</title>

    <link href="{{asset('css/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
	<link href="{{asset('css/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/css/style.css')}}" rel="stylesheet">

</head>

<body class="">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        	<h3 class="font-italic text-uppercase">
	                        	Music Project
	                            <i class="fa fa-music"></i>
                        	</h3> 
                        </a>
                    </div>
                    <div class="logo-element">
                        MP<i class="fa fa-music"></i>
                    </div>
                </li>
                <li>
                    <a href="layouts.html"><i class="fa fa-hashtag"></i></i><span class="nav-label">Dashboard</span></a>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-gamepad"></i><span class="nav-label">Juegos</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#"><i class="fa fa-rocket"></i>Space Invaders</a></li>
                        <li><a href="#"><i class="fa fa-question"></i>Musical Quiz</a></li>
                        <li><a href="#"><i class="fa fa-puzzle-piece"></i>musical Memory</i></a></li>
                    </ul>
                </li>
                
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>MUSIC PROJECT - DASHBOARD</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">muscProject</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>dashboard</strong>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="wrapper wrapper-content">
                <div class="ibox animated fadeInRightBig">
                	<div class="ibox-title">
                		<h3 class="text-muted text-uppercase">
                			Actividad en la plataforma general
                		</h3>
                	</div>
                    <div class="ibox-content">
                    	<div class="row"> 
	                    	<div class="col-lg-6 p-0 mt-3">
								<div id="actividad">Actividad.</div>
	                    	</div>
	                    	<div class="col-lg-6 p-0 mt-3">
								<div id="contribucion">Contribuidores.</div>
	                    	</div>
	                    	<div class="col-lg-6 p-0 mt-3">
								<div id="juegos">Juegos.</div>
	                    	</div>
	                    	<div class="col-lg-6 p-0 mt-3">
								<div id="dinero">Dinero.</div>	
	                    	</div>
                    	</div>
					</div>
                </div>
            </div>
            <div class="footer">
                <div class="float-right">
                    <strong>10/05/2020</strong>
                </div>
                <div>
                    <strong>Copyright</strong> Mario Bastida - Sergio Rojas
                </div>
            </div>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="{{asset('js/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/js/popper.min.js')}}"></script>
    <script src="{{asset('js/js/bootstrap.js')}}"></script>
    <script src="{{asset('js/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('js/js/plugins/toastr/toastr.min.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/js/inspinia.js')}}"></script>
    <script src="{{asset('js/js/plugins/pace/pace.min.js')}}"></script>


	<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

	<script>
		activity();
		contributors();
		games();
		dinero();

		if (window.localStorage.getItem('fontsize') !== null) {
            let fontsize = window.localStorage.getItem('fontsize', '1.5rem');
            let root = window.document.querySelector(":root");
            root.style.setProperty('--bodysize', fontsize);
        }

		function dinero()
		{
			const dataSource = {
			  chart: {
			    caption: "Ganancias totales y metas de la plataforma.",
			    lowerlimit: "0",
			    upperlimit: "1000",
			    showvalue: "1",
			    numbersuffix: "$",
			    theme: "fusion",
			    showtooltip: "0"
			  },
			  colorrange: {
			    color: [
			      {
			        minvalue: "75",
			        maxvalue: "100",
			        code: "#21B8D3"
			      }
			    ]
			  },
			  dials: {
			    dial: [
			      {
			        value: "643"
			      }
			    ]
			  }
			};

			FusionCharts.ready(function() {
			  var myChart = new FusionCharts({
			    type: "angulargauge",
			    renderAt: "dinero",
			    width: "100%",
			    height: "400",
			    dataFormat: "json",
			    dataSource
			  }).render();
			});
		}

		function games()
		{
			const dataSource = {
			  chart: {
			    caption: "Concurrencia de los juegos en la plataforma.",
			    showlegend: "1",
			    showpercentvalues: "0",
			    legendposition: "bottom",
			    usedataplotcolorforlabels: "1",
			    theme: "fusion"
			  },
			  data: [
			    {
			      label: "musicInvaders",
			      value: "2123"
			    },
			    {
			      label: "musicalQuizz",
			      value: "1647"
			    },
			    {
			      label: "musicMemory",
			      value: "922"
			    }
			  ]
			};

			FusionCharts.ready(function() {
			  var myChart = new FusionCharts({
			    type: "pie2d",
			    renderAt: "juegos",
			    width: "100%",
			    height: "400",
			    dataFormat: "json",
			    dataSource
			  }).render();
			});
		}

		function contributors()
		{
			const dataSource = {
		  	chart: {
			    caption: "Recurrencia de la plataforma.",
			    anchorradius: "5",
			    showhovereffect: "1",
			    showvalues: "0",
			    numbersuffix: "",
			    theme: "fusion",
			    anchorbgcolor: "#21B8D3",
			    palettecolors: "#21B8D3"
			  },
			  data: [
			    {
			      label: "Enero",
			      value: "1"
			    },
			    {
			      label: "Febrero",
			      value: "5"
			    },
			    {
			      label: "Marzo",
			      value: "10"
			    },
			    {
			      label: "Abril",
			      value: "12"
			    },
			    {
			      label: "Mayo",
			      value: "14"
			    },
			    {
			      label: "Junio",
			      value: "16"
			    },
			    {
			      label: "Julio",
			      value: "20"
			    },
			    {
			      label: "Agosto",
			      value: "20"
			    },
			    {
			      label: "Septiembre",
			      value: "20"
			    },
			    {
			      label: "Octubre",
			      value: "20"
			    },
			    {
			      label: "Nov",
			      value: "20"
			    },
			    {
			      label: "Dic",
			      value: "20"
			    }

			  ]
			};

			FusionCharts.ready(function() {
			  var chart = new FusionCharts({
			    type: "spline",
			    renderAt: "actividad",
			    width: "100%",
			    height: "400",
			    dataFormat: "json",
			    dataSource
			  }).render();
			});

		}

		function activity()
		{
			const dataSource = {
			  chart: {
			    caption: "Usuarios con contribuciones más altas del mes.",
			    placevaluesinside: "1",
			    showvalues: "0",
			    theme: "fusion",
			    anchorbgcolor: "#21B8D3",
			    palettecolors: "#21B8D3"
			  },
			  categories: [
			    {
			      category: [
			        {
			          label: "Sergio Rojas"
			        },
			        {
			          label: "Mario Bastida"
			        },
			        {
			          label: "Miguel Parra"
			        },
			        {
			          label: "Miguel Avilés"
			        },
			        {
			          label: "David Valdez"
			        }
			      ]
			    }
			  ],
			  dataset: [
			    {
			      seriesname: "Contribución.",
			      data: [
			        {
			          value: "1500"
			        },
			        {
			          value: "1200"
			        },
			        {
			          value: "1000"
			        },
			        {
			          value: "950"
			        },
			        {
			          value: "945"
			        }
			      ]
			    },
			  ]
			};

			FusionCharts.ready(function() {
			  var myChart = new FusionCharts({
			    type: "stackedbar2d",
			    renderAt: "contribucion",
			    width: "100%",
			    height: "400",
			    dataFormat: "json",
			    dataSource
			  }).render();
			});

		}
		toastr.options = {
		  	"closeButton": true,
		  	"debug": false,
		  	"progressBar": true,
		  	"preventDuplicates": false,
		  	"positionClass": "toast-top-right",
		  	"onclick": null,
		  	"showDuration": "10000",
		  	"hideDuration": "1000",
		  	"timeOut": "7000",
		  	"extendedTimeOut": "1000",
		  	"showEasing": "swing",
		  	"hideEasing": "linear",
		  	"showMethod": "fadeIn",
		  	"hideMethod": "fadeOut"
		}
		toastr.success("Se ha llegado a la meta de $1000 mxn al mes")

	</script>

</body>

</html>