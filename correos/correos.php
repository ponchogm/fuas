<?php
//include ('seguridad3.php');
include ('../conectar.php');
$rut=$_GET['var'];

//$rut="18486804-0";

$pregunta = $con3->query("SELECT * FROM alumnos WHERE rut ='$rut'");
            $fil = $pregunta->fetch_array(MYSQLI_ASSOC);
            $ap_pat_alum = $fil['ap_pat'];
            $ap_mat_alum = $fil['ap_mat'];
            $nombres = $fil['nombres'];
            $nombre = $nombres." ".$ap_pat_alum." ".$ap_mat_alum;
            $cod_car = $fil['cod_car'];
            $nom_car = $fil['nom_car'];
            $correo_personal = $fil['correo_personal'];
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    
    <meta charset="utf-8">
    <title>Correos - Universidad Metropolitana de Ciencias de la Educación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      h4.page-header{
        display: block;
        width: 100%;
        padding: 0;
        margin-bottom: 20px;
        font-size: 21px;
        line-height: 40px;
        color: #333;
        border: 0;
        border-bottom: 1px solid #E5E5E5;
        font-weight: normal;
      }
      .ctrl_mio{
            float: none;
      }
      .izq{
        float:left;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <!-- Javascript para agregar campos en forma dinámica Luis García 2013 -->
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
    <script type="text/javascript">
      function activa(){
        document.getElementById('correo1').readOnly=false;
        document.getElementById('modifica').style.display = 'none';
        document.getElementById('enviar').style.display = 'inline';
      }
    </script>
  </head>

  <body>

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">Correos</a>
        <!--
        <ul class="nav pull-right">
          <li><a href="salir2.php">| Salir del formulario</a></li>
        </ul>
        -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

    <div class="container">

      <!-- Cabecera del formulario -->
      <div class="row-fluid">
        <div class="span2"><img src="bootstrap/img/Logo_umce.jpg" class="img-rounded"></div>
        <div class="span8" style="text-align:center"><h3>Actualización de correos institucionales</h3></div>
        <div class="span2"><img src="bootstrap/img/Logo_dae.jpg" class="img-rounded"></div>
      </div>
        <p>
      <!-- Comienzo del formulario UMCE por Luis García Manzo -->
      <center>
      <form name="alumnos_dae" method="post" action="insertaCorreos.php?var=<?php echo $rut; ?>"
      <div class="izq span12">
        <legend>Bienvenido: <?php echo utf8_encode($nombre); ?>.</legend>
        <p><?php echo $rut; ?>
        <p><?php echo $nom_car; ?>
        <div class="controls ctrl_mio">
          <br>
          <br>    
           <br>
           <?php if($correo_personal==""): ?>
                <h6>Ingresa tu dirección de correo personal</h6>
                <input class="span8" type="text" name="correo" placeholder="correo@tumail.com" />
                </div>
                <br>
                <button type='submit' class='btn btn-primary'>Ingresar mi correo!</button>
           <?php endif; ?>
           <?php if($correo_personal!=""): ?>
                <h6>Tu ingresaste el siguiente correo:</h6>
                <input class="span8" type="email" id="correo1" name="correo" required readonly value=<?php echo $correo_personal; ?> />
                </div>
                <br>
                <button type='button' id='modifica' class='btn btn-primary' onclick="activa();">Modificar mi correo!</button>
                <button type='submit' id='enviar' class='btn btn-primary' style="display:none">Reingresar mi correo!</button>
           <?php endif; ?>
          
        
      </form>
      </center>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
