<?php
include ('conectar.php');
include ('seguridad2.php');
include ('funciones.php');
$rut=$_GET['rut'];
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap-filestyle.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/rut.js"></script>
    <meta charset="utf-8">
    <title>Beneficios 2014 - Universidad Metropolitana de Ciencias de la Educación</title>
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
      span{color:#f00;}
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
        <a class="brand" href="#">Beneficios</a>
        <ul class="nav pull-right">
            <li><a href="#"><i class="icon-upload"></i> Adjuntar documentos</a></li>
            <li><a href="modificar2.php?rut=<?php echo $rut; ?>"><i class="icon-edit"></i> Modificar mis datos</a></li>
            <li><a href="salir2.php"><i class="icon-off"></i> cerrar sesión</a></li>
            <li class="divider-vertical"></li>
          <li><a href="#">UMCE - DAE</a></li>
        </ul>
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

    <div class="container">

      <!-- Cabecera del formulario -->
      <div class="row-fluid">
        <div class="span2"><img src="bootstrap/img/Logo_umce.jpg" class="img-rounded"></div>
        <div class="span8" style="text-align:center"><h3>Formulario de recepción de documentación</h3></div>
        <div class="span2"><img src="bootstrap/img/Logo_dae.jpg" class="img-rounded"></div>
      </div>
        <p>
      <!-- Comienzo del formulario UMCE por Luis García Manzo -->
      <?php
        $resultado=$con->query("SELECT alumnos.*,carreras.* FROM alumnos, carreras
        WHERE rut_alum ='$rut' AND cod_carrera_alum = codigo_car");

        while($row = $resultado->fetch_array(MYSQLI_ASSOC))
        {
            $nombre=$row['nombres_alum'] ." ". $row['ap_pat_alum'] ." ". $row['ap_mat_alum'];
        }
  ?>

        <div class="controls controls-row">
          <legend>Adjuntar documentos</legend>
          <center><h6>Bienvenid@: <?php echo $nombre; ?></h6></center>
          <?php
            $max_upload = (int)(ini_get('upload_max_filesize'));
            $max_post = (int)(ini_get('post_max_size'));
            $memory_limit = (int)(ini_get('memory_limit'));
            $upload_mb = min($max_upload, $max_post, $memory_limit);
            echo "Tamaño maximo permitido de subida es: <strong>$upload_mb Mb</strong><br>";
          ?>
        </div>


        <form class="well" action="procesaArchivos.php?user=<?php echo $rut; ?>" method="post" enctype="multipart/form-data">
          <legend>Seleccione los archivos desde su computador mediante los botones</legend>
          <div class="alert alert-info">
            <strong>Importante:</strong> El envío los documentos digitalizados debe regisrse por las siguientes normas:
              <ul>
                  <li>Nombre de archivo para cédula de identidad ej: 12345678-9.pdf</li>
                  <li>Nombre de archivo para certificado de alumno regular ej: 12345678-9_CA_Regular.pdf</li>
                  <li>Nombre de archivo para ingresos ej: 12345678-9_Ingresos.pdf</li>
              </ul>
              Donde 12345678-9 es tu rut personal, de esta manera evitaremos errores y pérdida de documentos y tiempo.
              <h6><b>Los archivos subidos en otro formato distinto a pdf no se considerarán como válidos</b></h6>
          </div>
          <hr>
          <label>Cédula de identidad <b>(Archivo PDF)</b></label>
          <input type="file" name="archivo[]">
          <p>
          <label>Certificado de alumno regular <b>(Archivo PDF)</b></label>
          <input type="file" name="archivo[]">
          <p>
          <label>Ingresos <b>(Archivo PDF)</b></label>
          <input type="file" name="archivo[]">
          <p>
          <br>
          <input class="btn-primary" type="submit" value="Enviar Archivos">
        </form>


      <hr>
      <p>
        <h6>Archivos subidos por el usuario</h6>
      <p>
      <table class="table table-striped">
        <tr>
          <th>Nombre de archivo</th>
          <th>Tamaño</th>
          <th>Eliminar docto.</th>
        </tr>
<?php
$resultado2=$con->query("SELECT adjuntos.* FROM adjuntos WHERE '$rut' = rut_alum");
        while($row2 = $resultado2->fetch_array(MYSQLI_ASSOC))
  {
    $nombre_arch=$row2['file_name'];
    $id=$row2['id'];
    $tamano = formatSizeUnits($row2['file_size']);
    $ext=substr($nombre_arch, -3);

    if($ext=="pdf" or $ext=="PDF"){
      $icon2="<img src='img/pdf.png'>";
      }
    elseif($ext=="xls" or $ext=="xlsx"){
      $icon2="<img src='img/xls.png'>";
      }
    elseif($ext=="doc" or $ext=="docx"){
      $icon2="<img src='img/doc.png'>";
      }
    if($ext=="jpg" or $ext=="bmg"){
      $icon2="<img src='img/jpg.png'>";
      }

      echo "<tr>
            <td>".$icon2." "."<a href='adjuntos/".$nombre_arch."'>".$nombre_arch."</a></td>
            <td>".$tamano."</td>
            <td><a href='eliminar_doctos.php?rut=".$rut."&id=".$id."&name=".$nombre_arch."'>Eliminar</a></td>
            </tr>";

  }
   ?>
       </table>
      <footer>
        <p>&copy; Informática - UMCE 2013</p>
      </footer>

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
