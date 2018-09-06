<?php
include('../conectar.php');
include('../seguridad3.php');
$correos=$_GET['var2'];
$rut=$_GET['var'];

//echo 'Has escogido la beca:"'.$becas.'" ';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet"><link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
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
        <a class="brand" href="#">Correos</a>
        <!--
        <ul class="nav pull-right">
          <li><a href="salir2.php">| Salir del formulario</a></li>
        </ul>
        -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
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
    </style>  
</head>
<body>
	<div class="container">

      <!-- Cabecera del formulario -->
      <div class="row-fluid">
        <div class="span2">&nbsp;</div>
        <div class="span8" style="text-align:center"><h3>Usuario: <?php echo $rut; ?></h3></div>
        <div class="span2">&nbsp;</div>
      </div>
      <div class="row-fluid">
        <div class="span2">&nbsp;</div>
        <div class="span8" style="text-align:center"><h3>Has escogido la opción: <?php echo $correos; ?></h3></div>
        <div class="span2">&nbsp;</div>
      </div>
      <div class="row-fluid">
        <div class="span2">&nbsp;</div>
        <div class="span8" style="text-align:center"><a href="salir3.php">Salir</a></div>
        <div class="span2">&nbsp;</div>
      </div>
	</div>
</body>
</html>