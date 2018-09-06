<?php
//$lock='open';
$lock='close';
?>
<!DOCTYPE html>
<html lang="es">
  <head>

    <script type="text/javascript" src="bootstrap/js/prototype-1.6.0.3.js"></script>
    <meta charset="utf-8">
    <title>Beneficios 2018 - Universidad Metropolitana de Ciencias de la Educación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }

      span{color:#f00;}

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
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
        <a class="brand" href="#">Beneficios 2018</a>
        <ul class="nav pull-right">
          <li><a href="#">Universidad Metropolitana de Ciencias de la Educación - Dirección de asuntos estudiantiles</a></li>
        </ul>
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
    <div class="container">

      <!-- Cabecera del formulario -->
      <div class="row-fluid">
        <div class="span2"><img src="bootstrap/img/Logo_umce.jpg" class="img-rounded"></div>
        <div class="span8" style="text-align:center"><h3>Sistema de acreditación socioeconómica 2018</h3></div>
        <div class="span2"><img src="bootstrap/img/Logo_dae.jpg" class="img-rounded"></div>
        <p>
      </div>
     </div>  <!-- /container -->
    <div class="container">

    <?php if($lock == 'open'): ?>
      <form class="form-signin" method="post" action="control2.php">
        <h2 class="form-signin-heading">Ingrese sus datos</h2>
        <input type="text" id="rut" name="rut" class="input-block-level" placeholder="Rut">
        <input type="password" id="fecha_nac" name="fecha_nac" class="input-block-level" placeholder="Fecha nac.">

        </label>
        <button class="btn btn-small btn-primary" type="submit">Entrar al sistema</button>
      </form>
      <div class="container" style="text-align:center">
      Escriba los datos como en el siguiente ejemplo:
      <h6>
      <p>Rut: 12345678-9 / Fecha nac.: 1-1-1901
    </h6>
    <p>
        <p>
        <!-- Comento el alerta
          <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>RECUERDA:</strong> Si te das cuenta que luego de llenar el formulario olvidaste algo o aparece alg&uacute;n error, debes VOLVER A INGRESAR A TU SESI&Oacute;N, ir al extremo
            superior de la p&aacute;gina y pinchar la opci&oacute;n "MODIFICAR DATOS", donde podr&aacute;s corregir la informaci&oacute;n.
          </div>
          Fin del comenario del alerta//-->

    <p><h4><span id="mensaje"></span></h4></p>
      </div>
      <script type="text/javascript">
/**
 * Funci�n que valida y devuelve el rut con formato 0012345678-9
 * @param rut Cadena con el rut a validar y formatear
 * @return boolean
 *
 * @author Jorge Andrade M.
 */
function validaRut(rut){
    var rexp = new RegExp(/^([0-9])+\-([kK0-9])+$/);
    if(rut.match(rexp)){
        var RUT   = rut.split("-");
        var elRut = RUT[0].toArray();
        var factor  = 2;
        var suma  = 0;
        var dv;
        for(i=(elRut.length-1); i>=0; i--){
            factor = factor > 7 ? 2 : factor;
            suma += parseInt(elRut[i])*parseInt(factor++);
        }
        dv = 11 -(suma % 11);
        if(dv == 11){
            dv = 0;
        }else if (dv == 10){
            dv = "k";
        }

        if(dv == RUT[1].toLowerCase()){
            $('mensaje').update("");
            return true;
        }else{
            $('mensaje').update("El rut es incorrecto").show();
            return false;
        }
    }else{
        $('mensaje').update("Formato incorrecto. El formato correcto es 12345678-9").show();
        return false;
    }
}
    Event.observe('rut','blur',function(){
        validaRut($F('rut'));
    });
</script>
 <p>
  <p>
  <p>


      <hr>

      <footer>
       <p><center><h5>Si tiene alg&uacute;n problema para ingresar debe acercarse a su asistente social</h5></center></p>
       <!--<p>&copy; Informática - UMCE 2013</p>-->
      </footer>
      <?php endif; ?>
      <?php if($lock == 'close'): ?>
      <div class="container" style="text-align:center">
      <h4>El proceso de renovación de beneficios para el 2017 a finalizado</h6>
      </div>
        <hr>
      <footer>
       <p><center><h5>Consultas a renovacion.beneficios@umce.cl, indicando su nombre rut y carrera</h5></center></p>
       <!--<p>&copy; Informática - UMCE 2013</p>-->
      </footer>
    <?php endif; ?>
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
