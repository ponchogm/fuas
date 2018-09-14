<?php
include ('seguridad.php');
include ('conectar.php');
$rut=$_GET['rut'];
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <script type="text/javascript" src="bootstrap/js/validarut.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
    <meta charset="utf-8">
    <title>Beneficios 2014 - Universidad Metropolitana de Ciencias de la Educación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 10px;
        padding-bottom: 40px;
      }
	  legend {
	display: block;
	width: 100%;
	padding: 0;
	margin-bottom: 20px;
	font-size: 15px;
	line-height: 40px;
	color: #333333;
	border: 0;
	border-bottom: 1px solid #e5e5e5;
	}
	body,td,th {
	font-size: 13px;
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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>

  <body>
  <div class="container">
  <div>
        <div class="span12"><img src="bootstrap/img/Logo_umce_print.jpg" class="img-rounded"></div>
      </div>
      <?php
        $resultado=$con->query("SELECT alumnos.*,carreras.* FROM alumnos, carreras
        WHERE rut_alum ='$rut' AND cod_carrera_alum = codigo_car");
        while($row = $resultado->fetch_array(MYSQLI_ASSOC))
  			{
				$id_alum=$row['id_alum'];
				$cod_car=$row['cod_carrera_alum'];
				$nombre = $row['nombres_alum'] ." ". $row['ap_pat_alum'] ." ". $row['ap_mat_alum'];
				$fnac=$row['fecha_nac'];
				$ingreso=$row['anio_ingreso_alum'];
				$direccion=$row['direccion_alum'];
				$comuna=$row['comuna_alum'];
				$telefono=$row['telefono_alum'];
				$celular=$row['celular_alum'];
				$correo=$row['correo_alum'];
				$nacionalidad=$row['nac_alum'];
				$discap=$row['discap_alum'];
				$porig=$row['pueb_orig_alum'];
				$sexos=$row['sexo_alum'];
				$carrera=$row['nombre_car'];
  			}
  	?>
    <legend>Antecedentes del estudiante</legend>
    <p>
    Código de carrera: <?php echo $cod_car; ?>
    <table  width="100%" border="1">
        <tr>
          <td><strong>Nombre</strong></td>
          <td><strong>Rut</strong></td>
          <td><strong>Fecha de Nac</strong></td>
          <td><strong>Año ingreso</strong></td>
        </tr>
        <tr>
          <td><?php echo utf8_encode($nombre); ?></td>
          <td><?php echo $rut; ?></td>
          <td><?php echo $fnac; ?></td>
          <td><?php echo $ingreso; ?></td>
        </tr>
        <tr>
          <td><strong>Dirección</strong></td>
          <td><strong>Comuna</strong></td>
          <td><strong>Teléfono</strong></td>
          <td><strong>Email</strong></td>
        </tr>
        <tr>
          <td><?php echo $direccion; ?></td>
          <td><?php echo $comuna; ?></td>
          <td><?php echo $celular ."-". $telefono; ?></td>
          <td><?php echo $correo; ?></td>
        </tr>
        <tr>
          <td><strong>Nacionalidad</strong></td>
          <td><strong>Discapacidad</strong></td>
          <td><strong>Pueblo Originario</strong></td>
          <td><strong>Género</strong></td>
        </tr>
        <tr>
          <td><?php echo $nacionalidad; ?></td>
          <td><?php echo $discap; ?></td>
          <td><?php echo $porig; ?></td>
          <?php
		  if ($sexos=='M'){
			  $sexo='Masculino';
		  }
		  else{
			  $sexo='Femenino';
		  }
		  ?>
          <td><?php echo $sexo; ?></td>
        </tr>
    </table>
    <table width="100%" border="1">
		<tr>
          <td><strong>Carrera</strong></td>
      </tr>
        <tr>
          <td><?php echo $carrera; ?></td>
        </tr>
    </table>
    <legend>Beneficios del estudiante</legend>
         <?php
             /* $resultado2=$con->query("SELECT alumnos.*,beneficios.*,becasycreditos.*
              FROM alumnos, beneficios, becasycreditos
              WHERE rut_alum ='$rut' AND id_alum = id_alum_bene AND id_beca_bene = id_becas");

              while($fila = $resultado2->fetch_array(MYSQLI_ASSOC))
            {
            $postula=$fila['postula_beca_alum'];
			$otras_becas=$fila['otras_becas_alum'];
            //echo "<tr><td>".utf8_encode($fila['becas_nombre'])."</td></tr>";
            }*/

            $int=$con->query("SELECT postula_beca_alum FROM alumnos WHERE rut_alum ='$rut'");
            $fila2 = $int->fetch_array(MYSQLI_ASSOC);
            $postula = $fila2['postula_beca_alum'];

          ?>
       <table width="100%" border="1">
          <tr>
            <td><strong>Beca interna a que postula</strong></td>
          </tr>
          <tr>
            <td><?php echo $postula; ?></td>
          </tr>
        </table>

    <legend>Padres que no pertenecen al grupo familiar</legend>
      <table width="100%" border="1">
      <tr>
        <td><strong>Nombre</strong></td>
        <td><strong>RUT</strong></td>
        <td><strong>Parentesco</strong></td>
        <td><strong>Dirección</strong></td>
        <td><strong>Comuna</strong></td>
        <td><strong>Ciudad</strong></td>
        <td><strong>Región</strong></td>
        <td><strong>Est. Civil</strong></td>
        <td><strong>Actividad</strong></td>
      </tr>
      <?php
              $resultado5=$con->query("SELECT alumnos.*,un_grupo_familiar.* FROM alumnos, un_grupo_familiar WHERE rut_alum ='$rut' AND id_alum = un_grupo_alum_id");

              while($fila3 = $resultado5->fetch_array(MYSQLI_ASSOC))
            {
          $nombre3 = $fila3['un_grupo_nombres']." ".$fila3['un_grupo_ap_pat']." ".$fila3['un_grupo_ap_mat'];
          echo "<tr>
          <td>".$nombre3."</td>
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
    </table>
    <legend>Antecedentes e ingresos del grupo familiar</legend>
    <table width="100%" border="1">
      <tr>
        <td width="31%"><strong>Dirección grupo familiar</strong></td>
        <td width="16%"><strong>Comuna</strong></td>
        <td width="20%"><strong>Ciudad</strong></td>
        <td width="15%"><strong>Teléfono</strong></td>
        <td width="18%"><strong>Tipo de  vivienda</strong></td>
      </tr>
      <?php
              $resultado3=$con->query("SELECT alumnos.*,hogar.*,vivienda.*
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
        <td><?php echo $viv_tipo; ?></td>
      </tr>
    </table>
    <table width="100%" border="1">
      <tr>
        <td><strong>Nombre</strong></td>
        <td><strong>RUT</strong></td>
        <td><strong>Edad</strong></td>
        <td><strong>E.civil</strong></td>
        <td><strong>Parent.</strong></td>
        <td><strong>P.Soc.</strong></td>
        <td><strong>P.Sal.</strong></td>
        <td><strong>N.Est.</strong></td>
        <td><strong>Actividad</strong></td>
        <td><strong>Ingresos</strong></td>
      </tr>
      <?php
              $resultado4=$con->query("SELECT alumnos.*,persona_grupo.*,ingresos.*
              FROM alumnos, persona_grupo, ingresos
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id AND id_alum = ingreso_alumn_id");

              while($fila2 = $resultado4->fetch_array(MYSQLI_ASSOC))
       {
          $nombre2 = $fila2['persona_nombres']." ".$fila2['persona_ap_pat']." ".$fila2['persona_ap_mat'];
		  $sueldo = $fila2['ingreso_sueldos'];
		  $honorario = $fila2['ingreso_honorario'];
		  $retiro = $fila2['ingreso_retiro'];
		  $pension = $fila2['ingreso_pension'];
		  $activ_indep = $fila2['ingreso_activ_undep'];
		  $otros = $fila2['ingreso_otros'];

		  $totall = ltrim($fila2['ingreso_total'], '0');
          $totall2 = number_format($totall, 0, '', '.');

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
          <td>$".$totall2."</td>
		  </tr>";

	}
  ?>
    </table>

    <table class='table table-hover table table-bordered'>
  <tr>
    <th>Ingreso total del grupo familiar</th>
    <th>Ingreso Per Cápita</th>
    <th>Total integrantes del grupo familiar</th>
  </tr>
  <tr>
    <?php
      $resultado6=$con->query("SELECT SUM(ingreso_total) FROM ingresos
              WHERE '$id_alum' = ingreso_alumn_id");
        while($fila6 = $resultado6->fetch_array(MYSQLI_ASSOC))
            {
              $ing_tot = ltrim($fila6['SUM(ingreso_total)'], '0');
              $ing_tot2 = number_format($ing_tot, 0, '', '.');
              echo "<td>$". $ing_tot2 ."</td>";
            }
            $resultado7=$con->query("SELECT count(ingreso_alumn_id) AS res FROM ingresos WHERE '$id_alum' = ingreso_alumn_id");
              $valor=$resultado7->fetch_array(MYSQLI_ASSOC);
                $t=$valor['res'];
                $ipc = $ing_tot / $t;
                $ipc2 = ltrim($ipc, '0');
                $ipc3 = number_format($ipc2, 0, '', '.');
                echo "<td>$". $ipc3 ."</td>";
                echo "<td>". $t ."</td>";

    ?>
  </tr>
</table>
<strong>Observaciones</strong>

<table class='table table-hover table table-bordered'>

    <?php
      $resultado8=$con->query("SELECT observaciones.* FROM observaciones
              WHERE '$id_alum' = id_alum_obs");
        while($fila8 = $resultado8->fetch_array(MYSQLI_ASSOC))
            {
              echo "<tr><td>". $fila8['comentario'] ."</td>
                    <td>". $fila8['fecha'] ."</td></tr>";
            }
    ?>

</table>
    <a href="#" onclick="window.print();return false;"><i class="icon-print"></i> Imprimir Formulario</a>  </p>
    <a href="javascript:window.history.back();"><i class="icon-off"></i> Cerrar</a>
    <br>
    <hr>

      <footer>
        <p>&copy; Informática - UMCE 2013</p>
      </footer>

  </div> <!-- /container -->



</body>
</html>