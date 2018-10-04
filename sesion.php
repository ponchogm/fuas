<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>DAE - Universidad Metropolitana de Ciencias de la Educación</title>
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
        <a class="brand" href="#">DAE - UMCE</a>
        <ul class="nav pull-right">
          <li><a href="#">Universidad Metropolitana de Ciencias de la Educación - Dirección de asuntos estudiantiles</a></li>
        </ul>  
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
    <div class="container">

      <!-- Cabecera del formulario -->
      <div class="row-fluid">
        <img class="span2" src="img/templates/logo_umce_2018_290.jpg">
        <div class="span8" style="text-align:center"><h3>Sistema de Acreditación Socioeconómica</h3></div>        
        <p>
      </div> 
      <form class="form-signin" method="post" action="control.php">
        <h2 class="form-signin-heading">Ingrese sus datos</h2>
          <input type="text" id="usuario" name="usuario" class="input-block-level" placeholder="Nombre de usuario">
          <input type="password" id="password" name="password" class="input-block-level" placeholder="Password">
          <button class="btn btn-small btn-primary" type="submit">Entrar al sistema</button>
      </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      <hr>
      <footer>
        <p>&copy; Informática - UMCE 2018</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
