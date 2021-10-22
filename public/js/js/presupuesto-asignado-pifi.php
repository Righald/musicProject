<?php
  session_start();
  $_SESSION['SECCION'] = "presu";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="transparencia, uabcs, baja sur" />
    <meta name="description" content="Portal de Transparencia Institucional de la Universidad Autonoma de Baja California Sur" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css">
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
   

  <style type="text/Css">
    .glyphicon { margin-right:10px; }
    #panel-bodys { padding:0px; }
    #panel-bodys table tr td { padding-left: 15px;width: 265px;}
    #panel-bodys .table {margin-bottom: 0px;overflow: hidden;height:100%;}
    button { background-color: inherit; color: #0077DD; width: 100%; border: none; outline: none; text-align: left; cursor: pointer; font-size: 17px;}
    </style>
   
    <title>Inicio - UABCS - Transparencia</title>
    
  </head>
  <body>
    
    <?php
      include 'include/header-connect.html';
      include 'include/nav-bar.php';
    ?>

    

        <div class="container-fluid">
            <div class="container">

            <div class="header-section">

               <div class="row">
                   <div class="col-md-10" style="margin-top:20px;">
                        
                        
                        <ol class="breadcrumb1" style="font-size:23px;">
                          <li class=""><a href="index.php"><span class="glyphicon glyphicon-menu-right" style="color:#F69E26"></span><font color="#fff">Transparencia</font></a></li>
                          <li class="active"><font color="#A5B3D2">Presupuesto A signado</font></li>
                          <li class="active"><font id="seccion" color="#A5B3D2">PIFI</font></li>
                        </ol>
                                                   
                   </div>
              </div>

             
              
            </div>
         </div>

    </div>

    <div class="container" style="margin-bottom: 120px;">
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href=""><span class="glyphicon glyphicon-folder-close">
                            </span>Contenido</a>
                        </h4>
                    </div>
                    <div  class="panel-collapse collapse in">
                        <div class="panel-body" id="panel-bodys">
                            <table class="table">
                                <tr>
                                    <td class="tablinks activo-menu" id="pifi1">
                                       <button class="c" href="#" id="pifi" style="color: white;" onclick="activar(1)">PIFI</button>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="tablinks" id="promep1">
                                        <button class="c" href="#" id="promep" onclick="activar(2)">PROMEP</button>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="tablinks" id="prodep1">
                                        <button class="c" href="#" id="prodep" onclick="activar(3)">PRODEP</button>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="tablinks" id="fadoees1">
                                       <button class="c" href="#" id="fadoees" onclick="activar(4)">FADOEES</button>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="tablinks" id="proexoees1">
                                       <button class="c" href="#" id="proexoees" onclick="activar(5)">PROEXOEES</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tablinks" id="proexes1">
                                       <button class="c" href="#" id="proexes" onclick="activar(6)">PROEXES SEGUNDA PARTE 2017</button>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="tablinks" id="profocie1">
                                       <button class="c" href="#" id="profocie" onclick="activar(7)">PROFOCIE</button>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="tablinks" id="pfce1">
                                       <button class="c" href="#" id="pfce" onclick="activar(8)">PFCE</button>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="tablinks" id="papf1">
                                       <button class="c" href="#" id="papf" onclick="activar(9)">PAPF</button>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="tablinks" id="fondo11">
                                        <button class="c" href="#" id="fondo1" onclick="activar(10)">Fondo para atención de problemas estructurales  UPE</button>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="tablinks" id="fondo21">
                                        <button class="c" href="#" id="fondo2" onclick="activar(11)">Fondo para elevar la calidad en educación UPE</button>
                                    </td>
                                </tr>

                                 <tr>
                                    <td class="tablinks" id="fondo31">
                                        <button class="c" href="#" id="fondo3" onclick="activar(12)">Fondo para el reconocimiento de plantilla de las UPE</button>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="tablinks" id="programa1">
                                       <button class="c" class="uk-text-left" href="#" id="programa" onclick="activar(13)">Programa de apoyo al desarrollo de la eduación superior (PADES)</button>
                                    </td>
                                </tr>
                                 
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="prueba" style="margin-bottom: 150px;">
             <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="intro-section">
              <h2><b>PIFI</b></h2>

                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h4 class="panel-title">
                                <div class="accordion-toggle acorde" data-toggle="collapse" data-parent="#accordion" data-target="#panel1"><i class="glyphicon glyphicon-plus"  style="color:#F69E26;"></i> <b><font color="#274E67">2013</font></b></div>
                            </h4>

                        </div>
                        <div id="panel1" class="panel-collapse collapse menus-acordeon">
                          
                            
                            <div class="panel-body"> <a href="#"><img src='img/Down.png' >Último Informe</a></div>
                            <div class="panel-body"> <a href="pdf/pifi/2013/pifi_2013_tercer_informe.pdf" download><img src='img/Down.png' >3er.Informe</a></div>
                            <div class="panel-body"> <a href="pdf/pifi/2013/pifi_2013_segundo_informe.pdf" download><img src='img/Down.png' >2do. Informe</a></div>
                            <div class="panel-body"> <a href="pdf/pifi/2013/primer_informe_pifi_2013.pdf" download><img src='img/Down.png' >1er. Informe</a></div>

                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h4 class="panel-title">
                                <div class="accordion-toggle acorde" data-toggle="collapse" data-parent="#accordion" data-target="#panel2"><i class="glyphicon glyphicon-plus"  style="color:#F69E26"></i> <b><font color="#274E67">2012</font></b></div>
                            </h4>

                        </div>
                        <div id="panel2" class="panel-collapse collapse menus-acordeon">

                            <div class="panel-body"> <a href="pdf/pifi/2012/resultado_visita.pdf" download><img src='img/Down.png'>Resultado Visita</a></div>
                            <div class="panel-body"> <a href="pdf/pifi/2012/fideicomiso_ago_dic_2012.pdf" download><img src='img/Down.png' >Reporte Fideicomiso</a></div>
                            <div class="panel-body"> <a href="pdf/pifi/2012/cuarto_informe_pifi_2012.pdf" download><img src='img/Down.png' >4to. Informe</a></div>
                            <div class="panel-body"> <a href="pdf/pifi/2012/tercer_informe_pifi_2012.pdf" download><img src='img/Down.png' >3er. Informe</a></div>
                            <div class="panel-body"> <a href="pdf/pifi/2012/segundo_informe_pifi_2012.pdf" download><img src='img/Down.png' >2do. Informe</a></div>
                            <div class="panel-body"> <a href="pdf/pifi/2012/primer_informe_pifi_2012.pdf" download><img src='img/Down.png' >1er. Informe</a></div>

                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h4 class="panel-title">
                                <div class="accordion-toggle acorde" data-toggle="collapse" data-parent="#accordion" data-target="#panel3"><i class="glyphicon glyphicon-plus"  style="color:#F69E26"></i> <b><font color="#274E67">2010-2011</font></b></div>
                            </h4>

                        </div>
                        <div id="panel3" class="panel-collapse collapse menus-acordeon">
                           <div class="panel-body"> <a href="pdf/pifi/2010-2011/pifi_2010_2011.pdf" download><img src='img/Down.png' >Informe 3er Trimestre PIFI 2010-2011</a></div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
            
        </div>


</div>
        </div>

        
        

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script type="text/javascript">
            function activar(d) {
            var i, tablinks,c;

            tablinks = document.getElementsByClassName("tablinks");
            c = document.getElementsByClassName("c");

            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" activo-menu", "");
            }
            for (i = 0; i < c.length; i++) {
                c[i].style.color = c[i].style.color = "#0077DD";
            }
            switch(d){
                case 1:
                    id = document.getElementById("pifi1");
                    id.className += " activo-menu";

                    var aux = document.getElementById("pifi");
                    aux.style.color = "#FFFFFF";
                document.getElementById('seccion').innerHTML = "PIFI";
                break;
                case 2:
                    id = document.getElementById("promep1");
                    id.className += " activo-menu";

                    var aux = document.getElementById("promep");
                    aux.style.color = "#FFFFFF";
                break;
                case 3:
                    id = document.getElementById("prodep1");
                    id.className += " activo-menu";

                    var aux = document.getElementById("prodep");
                    aux.style.color = "#FFFFFF";
                break;
                case 4:
                    id = document.getElementById("fadoees1");
                    id.className += " activo-menu";

                    var aux = document.getElementById("fadoees");
                    aux.style.color = "#FFFFFF";
                break;
                case 5:
                    id = document.getElementById("proexoees1");
                    id.className += " activo-menu";

                    var aux = document.getElementById("proexoees");
                    aux.style.color = "#FFFFFF";
                break;
                case 6:
                    id = document.getElementById("proexes1");
                    id.className += " activo-menu";

                    var aux = document.getElementById("proexes");
                    aux.style.color = "#FFFFFF";
                break;
                case 7:
                    id = document.getElementById("profocie1");
                    id.className += " activo-menu";

                    var aux = document.getElementById("profocie");
                    aux.style.color = "#FFFFFF";
                break;
                case 8:
                    id = document.getElementById("pfce1");
                    id.className += " activo-menu";

                    var aux = document.getElementById("pfce");
                    aux.style.color = "#FFFFFF";
                break;
                case 9:
                    id = document.getElementById("papf1");
                    id.className += " activo-menu";

                    var aux = document.getElementById("papf");
                    aux.style.color = "#FFFFFF";
                break;
                case 10:
                    id = document.getElementById("fondo11");
                    id.className += " activo-menu";

                    var aux = document.getElementById("fondo1");
                    aux.style.color = "#FFFFFF";
                break;
                case 11:
                    id = document.getElementById("fondo21");
                    id.className += " activo-menu";

                    var aux = document.getElementById("fondo2");
                    aux.style.color = "#FFFFFF";
                break;
                case 12:
                    id = document.getElementById("fondo31");
                    id.className += " activo-menu";

                    var aux = document.getElementById("fondo3");
                    aux.style.color = "#FFFFFF";
                break;
                case 13:
                    id = document.getElementById("programa1");
                    id.className += " activo-menu";

                    var aux = document.getElementById("programa");
                    aux.style.color = "#FFFFFF";
                break;
            }
        }
        $(document).ready(function(){
            
            $.ajaxSetup({
              cache: false
            });
            
            /*promep*/
            $('#promep').click(function(e){
                e.preventDefault();
                $('#prueba').html('<br><br><center><img src="img/cargando.gif" width="220" height="19" /></center>');
               	$('#prueba').load('presupuesto-asignado/promep.html');
                document.getElementById('seccion').innerHTML = "PROMEP";
            });
            /*prodep*/
            $('#prodep').click(function(e){
                e.preventDefault();
                $('#prueba').html('<br><br><center><img src="img/cargando.gif" width="220" height="19" /></center>');
                $('#prueba').load('presupuesto-asignado/prodep.html');
                document.getElementById('seccion').innerHTML = "PRODEP";
            });
            /*fadoees*/
            $('#fadoees').click(function(e){
                e.preventDefault();
                $('#prueba').html('<br><br><center><img src="img/cargando.gif" width="220" height="19" /></center>');
                $('#prueba').load('presupuesto-asignado/fadoees.html');
                document.getElementById('seccion').innerHTML = "FADOEES";
            });
            /*proexoees*/
            $('#proexoees').click(function(e){
                e.preventDefault();
                $('#prueba').html('<br><br><center><img src="img/cargando.gif" width="220" height="19" /></center>');
                $('#prueba').load('presupuesto-asignado/proexoees.html');
                document.getElementById('seccion').innerHTML = "PROEXOEESX";
            });
            /*proexes*/
            $('#proexes').click(function(e){
                e.preventDefault();
                $('#prueba').html('<br><br><center><img src="img/cargando.gif" width="220" height="19" /></center>');
                $('#prueba').load('presupuesto-asignado/proexes.html');
                document.getElementById('seccion').innerHTML = "PROEXES SEGUNDA PARTE 2017";
            });
            /*PROFOCIE*/
            $('#profocie').click(function(e){
                e.preventDefault();
                $('#prueba').html('<br><br><center><img src="img/cargando.gif" width="220" height="19" /></center>');
                $('#prueba').load('presupuesto-asignado/profocie.html');
                document.getElementById('seccion').innerHTML = "PROFOCIE";
            });
            /*PFCE*/
            $('#pfce').click(function(e){
                e.preventDefault();
                $('#prueba').html('<br><br><center><img src="img/cargando.gif" width="220" height="19" /></center>');
                $('#prueba').load('presupuesto-asignado/pfce.html');
                document.getElementById('seccion').innerHTML = "PFCE";
            });
            /*PAPF*/
             $('#papf').click(function(e){
                e.preventDefault();
                $('#prueba').html('<br><br><center><img src="img/cargando.gif" width="220" height="19" /></center>');
                $('#prueba').load('presupuesto-asignado/papf.html');
                document.getElementById('seccion').innerHTML = "PAPF";
            });
            /*Fondo para atención de problemas estructurales  UPE*/
            $('#fondo1').click(function(e){
                e.preventDefault();
                $('#prueba').html('<br><br><center><img src="img/cargando.gif" width="220" height="19" /></center>');
                $('#prueba').load('presupuesto-asignado/fondo-para-atencion-de-problemas-estructurales.html');
                document.getElementById('seccion').innerHTML = "Fondo para atención de problemas estructurales  UPE";
            });
            /*Fondo para elevar la calidad en educación UPE*/
            $('#fondo2').click(function(e){
                e.preventDefault();
                $('#prueba').html('<br><br><center><img src="img/cargando.gif" width="220" height="19" /></center>');
                $('#prueba').load('presupuesto-asignado/fondo-para-elevar-la-calidad-en-educacion-upe.html');
                document.getElementById('seccion').innerHTML = "Fondo para elevar la calidad en educación UPE";
            });
            /*Fondo para el reconocimiento de plantilla de las UPE*/
            $('#fondo3').click(function(e){
                e.preventDefault();
                $('#prueba').html('<br><br><center><img src="img/cargando.gif" width="220" height="19" /></center>');
                $('#prueba').load('presupuesto-asignado/fondo-para-el-reconocimiento-de-plantilla-de-las-upe.html');
                document.getElementById('seccion').innerHTML = "Fondo para el reconocimiento de plantilla de las UPE";
            });
            /*Programa de apoyo al desarrollo de la eduación superior (PADES)*/
            $('#programa').click(function(e){
                e.preventDefault();
                $('#prueba').html('<br><br><center><img src="img/cargando.gif" width="220" height="19" /></center>');
                $('#prueba').load('presupuesto-asignado/programa-de-apoyo-al-desarrollo-de-la-educacion-superior-pades.html');
                document.getElementById('seccion').innerHTML = "Programa de apoyo al desarrollo de la eduación superior (PADES)";
            });
        });
    </script>
    <script type="text/javascript">
    //SELECCION NAV BAR
      var id = "<?php echo $_SESSION['SECCION']; ?>";
      var i, tablinks;

        tablinks = document.getElementsByClassName("tablinks");

        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace("active", "");
        }

        var tab =  document.getElementById(id);
        tab.className = "active";
    </script>
  <?php
    include 'include/footer.html';
  ?> 
 
   
  
    <script src="js/jquery-1.11.2.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/grid.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>