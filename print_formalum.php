<?php
include ('conectar.php');
$rut=$_GET['var7'];
?>

<!DOCTYPE html>
<html lang="es">
  <head>
<meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Beneficios 2019 - Universidad Metropolitana de Ciencias de la Educación</title>
    <link href="../img/templates/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
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
  <div class="row">
        <div class="col-sm-2">
          <div>
            <img src="img/templates/logo_umce_2018_290.jpg" class="img-rounded" height="50">
          </div>
        </div>
        <div class="col-sm-6">
          <div style="text-align:center">
            <h4>Acreditación Socioeconómica 2019</h4>
          </div>
        </div>
        <br>
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
        $correo_umce = explode('@', $correo);
        $activa = $correo_umce[1];
  	?>
    <legend>Antecedentes del estudiante</legend>
    <p>
    Código de carrera: <?php echo $cod_car; ?>
    <table class="table table-bordered table-condensed">
        <tr>
          <td><strong>Nombre</strong></td>
          <td><strong>Rut</strong></td>
          <td><strong>Fecha de Nacimiento</strong></td>
          <td><strong>Año de ingreso</strong></td>
        </tr>
        <tr>
          <td><?php echo utf8_encode($nombre); ?></td>
          <td><?php echo $rut; ?></td>
          <td><?php echo $fnac; ?></td>
          <td><?php echo $ingreso; ?></td>
        </tr>
        <tr>
          <td><strong>Dirección Particular</strong></td>
          <td><strong>Comuna</strong></td>
          <td><strong>Teléfono</strong></td>
          <td><strong>Email</strong></td>
        </tr>
        <tr>
          <td><?php echo $direccion; ?></td>
          <td><?php echo $comuna; ?></td>
          <td><?php echo $celular; ?> - <?php echo $telefono; ?></td>
          <td><?php echo $correo; ?></td>
        </tr>
        <tr>
          <td><strong>Nacionalidad</strong></td>
          <td><strong>Discapacidad</strong></td>
          <td><strong>Pueblo Originario</strong></td>
          <td></td>
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
          <td>
            <?php 
              $mensaje = $correo_umce[1]!="umce.cl" ? "Activa tu correo institucional aquí":"";
            echo $mensaje;
          ?>
          </td>
        </tr>
    </table>
    <table class="table table-bordered table-condensed">
		<tr>
          <td><strong>Carrera</strong></td>
      </tr>
        <tr>
          <td><?php echo $carrera; ?></td>
        </tr>
    </table>
  
    <legend>Antecedentes e ingresos del grupo familiar<br>
    </legend>
    <table class="table table-bordered table-condensed">
      <tr>
        <td width="32%"><strong>Dirección grupo familiar</strong></td>
        <td width="20%"><strong>Comuna</strong></td>
        <td width="20%"><strong>Ciudad</strong></td>
        <td width="28%"><strong>Tipo de  vivienda</strong></td>
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
        <td><?php echo $viv_tipo; ?></td>
      </tr>
    </table>
    <table class="table table-bordered table-condensed">
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
              $sueldo = ltrim($fila2['ingreso_total'], '0');
              $sueldo2 = number_format($sueldo, 0, '', '.');
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
          <td>$".$sueldo2."</td>";
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
</body>
</html>