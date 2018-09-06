<?php
include ('conectar.php');
$rut=$_GET['var7'];
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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <style type="text/css">
  body,td,th {
	font-size: 13px;
}
  </style>
  </head>

  <body>
  <div class="container">
  <div>
        <div class="span2"><img src="bootstrap/img/Logo_umce_print.jpg" class="img-rounded"></div>
      </div>
      <?php
        $resultado=$con->query("SELECT alumnos.*,carreras.* FROM alumnos, carreras
        WHERE rut_alum ='$rut' AND cod_carrera_alum = codigo_car");
        while($row = $resultado->fetch_array(MYSQLI_ASSOC))
  			{
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
    Código de carrera: <? echo $cod_car; ?>
    <table  width="100%" border="1">
        <tr>
          <td><strong>Nombre</strong></td>
          <td><strong>Rut</strong></td>
          <td><strong>Fecha de Nac</strong></td>
          <td><strong>Año ingreso</strong></td>
        </tr>
        <tr>
          <td><? echo utf8_encode($nombre); ?></td>
          <td><? echo $rut; ?></td>
          <td><? echo $fnac; ?></td>
          <td><? echo $ingreso; ?></td>
        </tr>
        <tr>
          <td><strong>Dirección</strong></td>
          <td><strong>Comuna</strong></td>
          <td><strong>Teléfono</strong></td>
          <td><strong>Email</strong></td>
        </tr>
        <tr>
          <td><? echo $direccion; ?></td>
          <td><? echo $comuna; ?></td>
          <td><? echo $celular; ?> - <? echo $telefono; ?></td>
          <td><? echo $correo; ?></td>
        </tr>
        <tr>
          <td><strong>Nacionalidad</strong></td>
          <td><strong>Discapacidad</strong></td>
          <td><strong>Pueblo Originario</strong></td>
          <td><strong>Género</strong></td>
        </tr>
        <tr>
          <td><? echo $nacionalidad; ?></td>
          <td><? echo $discap; ?></td>
          <td><? echo $porig; ?></td>
          <?php
      if ($sexos=='M'){
        $sexo='Masculino';
      }
      else{
        $sexo='Femenino';
      }
      ?>
          <td><? echo $sexo; ?></td>
        </tr>
    </table>
    <table width="100%" border="1">
		<tr>
          <td><strong>Carrera</strong></td>
      </tr>
        <tr>
          <td><? echo $carrera; ?></td>
        </tr>
    </table>
    <!--
    <legend>Beneficios del estudiante</legend>

    <table width="100%" border="1">
      <tr>
      <td><strong>Beca interna a que postula</strong></td>
    </tr>
    <tr>
          <?php
              $resultado2=$con->query("SELECT alumnos.*,beneficios.*,becasycreditos.*
              FROM alumnos, beneficios, becasycreditos
              WHERE rut_alum ='$rut' AND id_alum = id_alum_bene AND id_beca_bene = id_becas");

              while($fila = $resultado2->fetch_array(MYSQLI_ASSOC))
            {
            $postula=$fila['postula_beca_alum'];
			       $otras_becas=$fila['otras_becas_alum'];
            //echo "<tr><td>".utf8_encode($fila['becas_nombre'])."</td></tr>";
            }
          ?>

            <?php
            $int=$con->query("SELECT postula_beca_alum FROM alumnos WHERE rut_alum ='$rut'");
            $fila2 = $int->fetch_array(MYSQLI_ASSOC);
            $postula = $fila2['postula_beca_alum'];
            ?>

            <td><?php echo $postula; ?></td>
          </tr>
        </table>
        -->
        <p>
    <legend>Padres que no pertenecen al grupo familiar<br>
    </legend>
    <table width="100%" border="1">
      <tr>
        <td width="18%"><strong>Nombre</strong></td>
        <td width="9%"><strong>Rut</strong></td>
        <td width="7%"><strong>Parent.</strong></td>
        <td width="24%"><strong>Dirección</strong></td>
        <td width="9%"><strong>Comuna</strong></td>
        <td width="9%"><strong>Ciudad</strong></td>
        <td width="11%"><strong>Región</strong></td>
        <td width="6%"><strong>E. Civil</strong></td>
        <td width="7%"><strong>Activ.</strong></td>
      </tr>
      <?php
              $resultado5=$con->query("SELECT alumnos.*,un_grupo_familiar.*
              FROM alumnos, un_grupo_familiar
              WHERE rut_alum ='$rut' AND id_alum = un_grupo_alum_id");

              while($fila3 = $resultado5->fetch_array(MYSQLI_ASSOC))
            {
          $id_un_grupo=$fila3['un_grupo_id'];
          echo "<tr>
          <td>".$fila3['un_grupo_nombres']." ".$fila3['un_grupo_ap_pat']." ".$fila3['un_grupo_ap_mat']."</a></td>
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

    <legend>Antecedentes e ingresos del grupo familiar<br>
    </legend>
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
        <td><? echo $dirgrupo; ?></td>
        <td><? echo $comunagrupo; ?></td>
        <td><? echo $ciudadgrupo; ?></td>
        <td><? echo $fonogrupo; ?></td>
        <td><? echo $viv_tipo; ?></td>
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
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id");

              while($fila2 = $resultado4->fetch_array(MYSQLI_ASSOC))
            {
          echo "<tr>
          <td>".$fila2['persona_nombres']." ".$fila2['persona_ap_pat']." ".$fila2['persona_ap_mat']."</td>
          <td>".$fila2['persona_rut']."</td>
          <td>".$fila2['persona_edad']."</td>
          <td>".$fila2['persona_ecivil']."</td>
          <td>".$fila2['persona_parent']."</td>
          <td>".$fila2['persona_prev_soc']."</td>
          <td>".$fila2['persona_prev_sal']."</td>
          <td>".$fila2['persona_niv_est']."</td>
          <td>".$fila2['persona_act']."</td>
          <td>".$fila2['ingreso_total']."</td>";
  }
  ?>
    </table>
    <p><br>
    <a href="#" onclick="window.print();return false;"><i class="icon-print"></i> Imprimir Formulario</a>  </p>
    <a href="javascript:window.history.back();"><i class="icon-off"></i> Cerrar</a>
    <br>
    <hr>

      <footer>
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