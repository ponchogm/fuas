<?php
include ('seguridad.php');
include ('conectar.php');
include ('funciones.php');
$rut = $_REQUEST['rut'];
$anio = $_REQUEST['anio'];
//$rut=$_POST['rut'];
$conex=$con;
if($anio=='2014'){
  $conex=$con1;
}
if($anio=='2015'){
  $conex=$con2;
}
if($anio=='2016'){
  $conex=$con4;
}
if($anio=='2017'){
  $conex=$con5;
}
 $res=$conex->query("SELECT rut_alum FROM alumnos WHERE rut_alum ='$rut'");
  $row_cnt = mysqli_num_rows($res);
  //echo $row_cnt;
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <script type="text/javascript" src="bootstrap/js/validarut.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
    <meta charset="utf-8">
    <title>Beneficios - Universidad Metropolitana de Ciencias de la Educación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="globo.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>


    <!- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
    <script>
function enviar_formulario(){
   document.form1.submit()
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
        <a class="brand" href="#">Beneficios</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li><a href="hero2.php?rut=<?php echo $rut; ?>"><i class="icon-edit"></i> Modificar año de búsqueda</a></li>
          </ul>
          <ul class="nav pull-right">
            <li><a href="#"><i class="icon-user"></i> usuario: <?php echo $_SESSION["usuarioactual"]; ?></a></li>
            <li class="divider-vertical"></li>
            <li><a href="salir.php"><i class="icon-off"></i> cerrar sesión</a></li>
          </ul>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

    <div class="container">

      <!-- Cabecera del formulario -->
      <div class="row-fluid">
        <img class="span2" src="img/templates/logo_umce_2018_290.jpg">
        <div class="span8" style="text-align:center"><h3>Formulario de acreditación socioeconómica datos <?php echo $anio; ?></h3></div>
      </div>
        <p>
      <!-- Comienzo del formulario UMCE por Luis García Manzo -->

        <div class="controls controls-row">
          <?php if($row_cnt != 0) : ?>
          <legend>Antecedentes del estudiante</legend>
  <?php
        $resultado=$conex->query("SELECT alumnos.*,carreras.* FROM alumnos, carreras
        WHERE rut_alum ='$rut' AND cod_carrera_alum = codigo_car");

        while($row = $resultado->fetch_array(MYSQLI_ASSOC))
  {
    $id_alum=$row['id_alum'];
    $rut=$row['rut_alum'];
    $nombre=$row['nombres_alum'] ." ". $row['ap_pat_alum'] ." ". $row['ap_mat_alum'];
    $fnac=$row['fecha_nac'];
    $ingreso=$row['anio_ingreso_alum'];
    $direccion=$row['direccion_alum'];
    $comuna=$row['comuna_alum'];
    $fono=$row['telefono_alum'];
    $celu=$row['celular_alum'];
    $correo=$row['correo_alum'];
    $nacionalidad=$row['nac_alum'];
    $discap=$row['discap_alum'];
    $pueblo=$row['pueb_orig_alum'];
    $carrera=$row['nombre_car'];
    $cod_car=$row['cod_carrera_alum'];

    echo $row['rut_alum'];
    echo "<p>";
    echo $row['cod_carrera_alum'];
   }
    ?>
      <table class="table table-hover table table-bordered" width="100%">
        <tr>
          <th>Nombre</th>
          <th>R.U.T.</th>
          <th>Fecha de nacimiento</th>
          <th>Año de ingreso</th>
        </tr>
        <tr>
          <td><?php echo utf8_encode($nombre); ?></td>
          <td><?php echo $rut; ?></td>
          <td><?php echo $fnac; ?></td>
          <td><?php echo $ingreso; ?></td>
        </tr>
        <tr>
          <th>Dirección</th>
          <th>Comuna</th>
          <th>Teléfonos</th>
          <th>Email</th>
        </tr>
        <tr>
          <td><?php echo $direccion; ?></td>
          <td><?php echo $comuna; ?></td>
          <td><?php echo $fono. " - " .$celu; ?></td>
          <td><?php echo $correo; ?></td>
        </tr>
        <tr>
          <th>Nacionalidad</th>
          <th>Discapacidad</th>
          <th>Pueblo Originario</th>
          <th>&nbsp;</th>
        </tr>
        <tr>
          <td><?php echo $nacionalidad; ?></td>
          <td><?php echo $discap; ?></td>
          <td colspan="2"><?php echo $pueblo; ?></td>
        </tr>
        <tr>
          <th colspan="4">Carrera</th>
        </tr>
        <tr>
          <td colspan="4"><?php echo $carrera; ?></td>
        </tr>
      </table>
      </div>

            <div class='controls controls-row'>
              <legend>Beneficios del estudiante</legend>
              <table class='table table-hover table table-bordered'>
                <tr>
                  <th>
                    Beca interna a la cual postula
                  </th>
                </tr>
                <tr>
                  <?php
              $resultado2=$conex->query("SELECT alumnos.*,beneficios.*,becasycreditos.*
              FROM alumnos, beneficios, becasycreditos
              WHERE rut_alum ='$rut' AND id_alum = id_alum_bene AND id_beca_bene = id_becas");

              while($fila = $resultado2->fetch_array(MYSQLI_ASSOC))
            {
            $postula=$fila['postula_beca_alum'];
            //echo "<tr><td>".utf8_encode($fila['becas_nombre'])."</td></tr>";
            }
          ?>
                <td><?php echo $postula; ?></td>
              </tr>
             </table>
          </div>
        <div class='controls controls-row'>
          <legend>Antecedentes del grupo familiar</legend>
          <table class='table table-hover table table-bordered'>
            <tr>
              <th class='span3'>Dirección grupo familiar</th>
              <th class='span2'>Comuna</th>
              <th class='span2'>Ciudad</th>
              <th class='span2'>Teléfono</th>
            </tr>
            <?php
              $resultado3=$conex->query("SELECT alumnos.*,hogar.*,vivienda.*
              FROM alumnos, hogar, vivienda
              WHERE rut_alum ='$rut' AND id_alum = hogar_id_alum AND hogar_vivienda = id_vivienda");

              while($fila1 = $resultado3->fetch_array(MYSQLI_ASSOC))
            {
            $dirgrupo=$fila1['hogar_dir'];
            $comunagrupo=$fila1['hogar_comuna'];
            $ciudadgrupo=$fila1['hogar_ciudad'];
            $fonogrupo=$fila1['hogar_telefono'];
            $viv_tipo=$fila1['vivienda_tipo'];
            }
          ?>
            <tr>
              <td><?php echo $dirgrupo; ?></td>
              <td><?php echo $comunagrupo; ?></td>
              <td><?php echo $ciudadgrupo; ?></td>
              <td><?php echo $fonogrupo; ?></td>
            </tr>
          </table>
        </div>
        <div class='controls controls-row'>
              <p>
              <legend>Padres que no pertenecen al grupo familiar</legend>

          <table class='table table-hover table table-bordered'>
  <tr>
    <th>Nombre Padres</th>
    <th>Rut</th>
    <th>Parentesco</th>
    <th>Dirección</th>
    <th>Comuna</th>
    <th>Ciudad</th>
    <th>Región</th>
    <th>Estado civil</th>
    <th>Actividad</th>
  </tr>
  <?php
              $resultado5=$conex->query("SELECT alumnos.*,un_grupo_familiar.*
              FROM alumnos, un_grupo_familiar
              WHERE rut_alum ='$rut' AND id_alum = un_grupo_alum_id");

              while($fila3 = $resultado5->fetch_array(MYSQLI_ASSOC))
            {
          $un_grupo_alum_id=$fila3['un_grupo_alum_id'];
          $un_grupo_id=$fila3['un_grupo_id'];
          echo "<tr>
          <td>".$fila3['un_grupo_nombres']." ".$fila3['un_grupo_ap_pat']." ".$fila3['un_grupo_ap_mat']."</td>
          <td>".$fila3['un_grupo_rut']."</td>
          <td>".$fila3['un_grupo_parent']."</td>
          <td>".$fila3['un_grupo_direccion']."</td>
          <td>".$fila3['un_grupo_comuna']."</td>
          <td>".$fila3['un_grupo_ciudad']."</td>
          <td>".$fila3['un_grupo_region']."</td>
          <td>".$fila3['un_grupo_ecivil']."</td>
          <td>".$fila3['un_grupo_actividad']."</td>";
  }
  ?>
  </tr>
</table>
</div>
        <div class='controls controls-row'>
          <table class='table table-hover table table-bordered'>
            <tr>
              <th class='span3'>Condición de la vivienda</th>
            </tr>
            <tr>
              <td><?php echo $viv_tipo; ?></td>
            </tr>
          </table>
        </div>
        <p>
        <div class='controls controls-row'>
              <p>
              <legend>Antecedentes e ingresos del grupo familiar</legend>

          <table class='table table-hover table table-bordered'>
  <tr>
    <th>Nombre</th>
    <th>rut</th>
    <th>edad</th>
    <th>E.civil</th>
    <th>Parent</th>
    <th>P.Soc</th>
    <th>P.Sal</th>
    <th>N.Est</th>
    <th>Actividad</th>
    <th>Ingresos</th>
    <th>Detalle</th>
  </tr>
  <?php
              $resultado4=$conex->query("SELECT alumnos.*,persona_grupo.*,ingresos.*
              FROM alumnos, persona_grupo, ingresos
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id AND id_alum = ingreso_alumn_id");

              while($fila2 = $resultado4->fetch_array(MYSQLI_ASSOC))
            {
          $nombre2 = $fila2['persona_nombres']." ".$fila2['persona_ap_pat']." ".$fila2['persona_ap_mat'];
          $sueldo = number_format($fila2['ingreso_sueldos'], 0, ',', '.');
          $hono = number_format($fila2['ingreso_honorario'], 0, ',', '.');
          $retiro = number_format($fila2['ingreso_retiro'], 0, ',', '.');
          $pension = number_format($fila2['ingreso_pension'], 0, ',', '.');
          $indep = number_format($fila2['ingreso_activ_indep'], 0, ',', '.');
          $otro = number_format($fila2['ingreso_otros'], 0, ',', '.');
          $total = number_format($fila2['ingreso_total'], 0, ',', '.');
          
          echo "<tr>
          <td>".$nombre2."</td>
          <td>".$fila2['persona_rut']."</td>
          <td>".$fila2['persona_edad']."</td>
          <td>".$fila2['persona_ecivil']."</td>
          <td>".$fila2['persona_parent']."</td>
          <td>".$fila2['persona_prev_soc']."</td>
          <td>".$fila2['persona_prev_sal']."</td>
          <td>".$fila2['persona_niv_est']."</td>
          <td>".$fila2['persona_act']."</td>
          <td>$".$total."</td>
          <td><a class='detalle1'>Detalle<css1>Sueldo: $".$sueldo." | Honorarios: $".$hono." | Retiro: $".$retiro." | Pensión: $".$pension." | Ing. Indep: $".$indep." | Otros ing.: $".$otro."</css1></a>";

  }
  ?>
  </tr>
</table>
<table class='table table-hover table table-bordered'>
  <tr>
    <th>Ingreso total del grupo familiar</th>
    <th>Ingreso Per Cápita</th>
    <th>Total integrantes del grupo familiar</th>
  </tr>
  <tr>
    <?php
      $resultado6=$conex->query("SELECT SUM(ingreso_total) FROM ingresos
              WHERE '$id_alum' = ingreso_alumn_id");
        while($fila6 = $resultado6->fetch_array(MYSQLI_ASSOC))
            {
              $it = $fila6['SUM(ingreso_total)'];
              $ing_tot = number_format($fila6['SUM(ingreso_total)'], 0, ',', '.');
              echo "<td>$". $ing_tot ."</td>";
            }
            $resultado7=$conex->query("SELECT count(ingreso_alumn_id) AS res FROM ingresos WHERE '$id_alum' = ingreso_alumn_id");
              $valor=$resultado7->fetch_array(MYSQLI_ASSOC);
                $t=$valor['res'];
                $ipc = $it / $t;
                echo "<td>$". number_format($ipc, 0, ',', '.') ."</td>";
                echo "<td>". $t ."</td>";

    ?>
  </tr>
</table>
<legend>Observaciones</legend>

<table class='table table-hover table table-bordered'>

    <?php
      $resultado8=$conex->query("SELECT observaciones.* FROM observaciones
              WHERE '$id_alum' = id_alum_obs");
        while($fila8 = $resultado8->fetch_array(MYSQLI_ASSOC))
            {
              echo "<tr><td>". $fila8['comentario'] ."</td>
                    <td>". $fila8['fecha'] ."</td></tr>";
            }
    ?>

</table>
<legend>Archivos subidos por el usuario</legend>
      <p>
      <table class="table table-striped">
        <tr>
          <th>Nombre de archivo</th>
          <th>Tamaño</th>
        </tr>
<?php
$resultado9=$conex->query("SELECT adjuntos.* FROM adjuntos WHERE '$rut' = rut_alum");
        while($row9 = $resultado9->fetch_array(MYSQLI_ASSOC))
  {
    $nombre_arch=$row9['file_name'];
    $id=$row9['id'];
    $tamano = formatSizeUnits($row9['file_size']);
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
            </tr>";

  }
   ?>
       </table>
       <?php endif; ?>
       <?php if($row_cnt == 0) :?>
          <br>
          <table>
            <tr>
              <td><h4>No existe información de este alumno en el periódo <?php echo $anio; ?></h4></td>
            </tr>
          </table>
       <?php endif; ?>
      <hr>

      <footer>
        <p>&copy; Informática - UMCE 2018</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>