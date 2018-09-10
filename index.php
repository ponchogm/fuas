<?php
$lock='open';
//$lock='close';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Beneficios 2018 - Universidad Metropolitana de Ciencias de la Educación</title>
    <link href="../img/templates/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <style type="text/css">
      body {
        padding-top: 0px;
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

  </head>

  <body>
  <?php include "cabecera.php"; ?>
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
        

    <p><h4><span id="mensaje"></span></h4></p>
      </div>

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
      <h4>El proceso de renovación de beneficios para el 2018 a finalizado</h6>
      </div>
        <hr>
      <footer>
       <p><center><h5>Consultas a renovacion.beneficios@umce.cl, indicando su nombre rut y carrera</h5></center></p>
       <!--<p>&copy; Informática - UMCE 2013</p>-->
      </footer>
    <?php endif; ?>
    </div> <!-- /container -->

  </body>
</html>
