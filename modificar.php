<?php
include ('seguridad.php');
include ('conectar.php');
include ('funciones.php');
$rut=$_GET['rut'];
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
  <script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/modal.js"></script>
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
            <li><a href="form.php"><i class="icon-plus"></i> Ingresar nuevo</a></li>
            <li><a href="print_form.php?rut=<?php echo $rut; ?>"><i class="icon-print"></i> Imprimir Formulario</a></li>
            <li class="divider-vertical"></li>
            <li><a href="hero.php"><i class="icon-search"></i> Buscar otro RUT</a></li>
            <li><a href="hero2.php?rut=<?php echo $rut; ?>"><i class="icon-arrow-left"></i> Volver</a></li>
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
        <div class="span2"><img src="bootstrap/img/Logo_umce.jpg" class="img-rounded"></div>
        <div class="span8" style="text-align:center"><h3>Formulario de acreditación socioeconómica</h3></div>
        <div class="span2"><img src="bootstrap/img/Logo_dae.jpg" class="img-rounded"></div>
      </div>
        <p>
      <!-- Comienzo del formulario UMCE por Luis García Manzo -->

        <div class="controls controls-row">
          <legend>Antecedentes del estudiante</legend>
  <?php
        $resultado=$con->query("SELECT alumnos.*,carreras.* FROM alumnos, carreras
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
	$id_alum=$row['id_alum'];

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
          <td><?php echo $nombre; ?></td>
          <td><?php echo $rut; ?></td>
          <td><a data-toggle='modal' href='#divfnac'><?php echo $fnac; ?></a></td>
          <td><a data-toggle='modal' href='#divanio'><?php echo $ingreso; ?></a></td>
        </tr>
        <tr>
          <th>Dirección</th>
          <th>Comuna</th>
          <th>Teléfonos</th>
          <th>Email</th>
        </tr>
        <tr>
          <td><a data-toggle='modal' href='#divdir'><?php echo $direccion; ?>*</a></td>
          <td><a data-toggle='modal' href='#divcomuna'><?php echo $comuna; ?>*</a></td>
          <td><a data-toggle='modal' href='#divfono'><?php echo $fono; ?>*</a> - <a data-toggle='modal' href='#divcelu'><?php echo $celu; ?>*</a></td>
          <td><a data-toggle='modal' href='#divmail'><?php echo $correo; ?>*</a></td>
        </tr>
        <tr>
          <th>Nacionalidad</th>
          <th>Discapacidad</th>
          <th>Pueblo Originario</th>
          <th>&nbsp;</th>
        </tr>
        <tr>
          <td><a data-toggle='modal' href='#divnac'><?php echo $nacionalidad; ?>*</a></td>
          <td><a data-toggle='modal' href='#divdiscap'><?php echo $discap; ?>*</a></td>
          <td colspan="2"><a data-toggle='modal' href='#divpueblo'><?php echo $pueblo; ?>*</a></td>
        </tr>
        <tr>
          <th colspan="4">Carrera</th>
        </tr>
        <tr>
          <td colspan="4"><a data-toggle='modal' href='#divcarrera'><?php echo $carrera; ?>*</a></td>
        </tr>
      </table>
      </div>
            <div class='controls controls-row'>
            <!-- Modal para actualizar fecha de nacimiento-->
            <div id="divfnac" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar fecha de nacimiento del alumno</h3>
              </div>
                  <div class="modal-body">
                  <form name="fnac" action="actualizafnac.php?var2=<?php echo $rut; ?>" method="post">
                  <p>escriba la fecha de nacimiento del alumno</p>
                  <input type="text" id="fnac" name="fnac" class="span4" placeholder="Formato: dd-mm-aaaa">

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
      </div>
              <!-- Fin Modal para actualizar fecha de nacimiento-->
            <!-- Modal para actualizar año ingreso-->
            <div id="divanio" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar año de ingreso del alumno</h3>
              </div>
                  <div class="modal-body">
                  <form name="anio" action="actualizaanio.php?var2=<?php echo $rut; ?>" method="post">
                  <p>Año de ingreso del alumno a la UMCE.</p>
                  <input type="text" id="anio" name="anio" class="span4">

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
      </div>
              <!-- Fin Modal para actualizar Año de ingreso-->
              <!-- Modal para actualizar Dirección-->
            <div id="divdir" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar dirección del alumno</h3>
              </div>
                  <div class="modal-body">
                  <form name="dir" action="actualizadir.php?var2=<?php echo $rut; ?>" method="post">
                  <p>Escriba su dirección actual.</p>
                  <input type="text" id="dir" name="dir" class="span4">

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
      </div>
              <!-- Fin Modal para actualizar Dirección-->
              <!-- Modal para actualizar Comuna-->
            <div id="divcomuna" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar comuna del alumno</h3>
              </div>
                  <div class="modal-body">
                  <form name="comuna" action="actualizacomuna.php?var2=<?php echo $rut; ?>" method="post">
                  <p>Escriba su comuna actual.</p>
                  <input type="text" id="comuna" name="comuna" class="span4">

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
      </div>
  </div>
              <!-- Fin Modal para actualizar Comuna-->
              <!-- Modal para actualizar Teléfono fijo-->
            <div id="divfono" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Teléfono fijo del alumno</h3>
              </div>
                  <div class="modal-body">
                  <form name="fono" action="actualizafijo.php?var2=<?php echo $rut; ?>" method="post">
                  <p>Escriba su teléfono fijo actual.</p>
                  <input type="text" id="fijo" name="fijo" class="span3">

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
  </div>
</div>
              <!-- Fin Modal para actualizar Teléfono fijo-->
              <!-- Modal para actualizar Teléfono Celular-->
            <div id="divcelu" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Celular del alumno</h3>
                    </div>
                  <div class="modal-body">
                  <form name="celu" action="actualizacel.php?var2=<?php echo $rut; ?>" method="post">
                  <p>Escriba su teléfono celular actual.</p>
                  <input type="text" id="cel" name="cel" class="span3">

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
               </div>
              </div>
              <!-- Fin Modal para actualizar Teléfono Celular-->
              <!-- Modal para actualizar Email-->
            <div id="divmail" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Email del alumno</h3>
              </div>
                  <div class="modal-body">
                  <form name="mail" action="actualizamail.php?var2=<?php echo $rut; ?>" method="post">
                  <p>Escriba su Email actual.</p>
                  <input type="text" id="email" name="email" class="span4">

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
  </div>
              </div>
              <!-- Fin Modal para actualizar Email-->
              <!-- Modal para actualizar Nacionalidad-->
            <div id="divnac" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar nacionalidad del alumno</h3>
              </div>
                  <div class="modal-body">
                  <form name="nac" action="actualizanac.php?var2=<?php echo $rut; ?>" method="post">
                  <p>Indique su nacionalidad.</p>
                  <input type="text" id="nac" name="nac" class="span4">

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
  </div>
              </div>
              <!-- Fin Modal para actualizar Dirección-->
              <!-- Modal para actualizar Discapacidad-->
            <div id="divdiscap" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar discapacidad del alumno</h3>
              </div>
                  <div class="modal-body">
                  <form name="discap" action="actualizadiscap.php?var2=<?php echo $rut; ?>" method="post">
                  <p>Indique que discapacidad sufre.</p>
                  <input type="text" id="discap" name="discap" class="span4">

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
  </div>
              </div>
              <!-- Fin Modal para actualizar Dirección-->
              <!-- Modal para actualizar Pueblo originario-->
<div id="divpueblo" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Etnia del alumno</h3>
                    </div>
                  <div class="modal-body">
                  <form name="pueblo" action="actualizapueblo.php?var2=<?php echo $rut; ?>" method="post">
                  <p>Indique a que pueblo originario pertenece.</p>
                  <input type="text" id="pueblo" name="pueblo" class="span4">

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
               </div>
              </div>
              <!-- Fin Modal para actualizar Pueblo-->
              <!-- Modal para actualizar Carrera-->
            <div id="divcarrera" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar carrera del alumno</h3>
              </div>
                  <div class="modal-body">
                  <form name="car" action="actualizacarrera.php?var2=<?php echo $rut; ?>" method="post">
                  <p>Escriba carrera actual.</p>
                  <input type="text" id="car" name="car" class="span4" placeholder="C&oacute;digo carrera">

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
      </div>
              <!-- Fin Modal para actualizar Carrera-->
<legend>Beneficios del estudiante</legend>
              <table class='table table-hover table table-bordered'>

            <?php
            /*
              $resultado2=$con->query("SELECT alumnos.*,beneficios.*,becasycreditos.*
              FROM alumnos, beneficios, becasycreditos
              WHERE rut_alum ='$rut' AND id_alum = id_alum_bene AND id_beca_bene = id_becas");
            */
              $resultado2=$con->query("SELECT alumnos.* FROM alumnos WHERE rut_alum ='$rut'");
              while($fila = $resultado2->fetch_array(MYSQLI_ASSOC))
            {
            //$id_bene=$fila['id_beneficios'];
			       //$beca=$fila['id_becas'];
			       $postula=$fila['postula_beca_alum'];
            //echo "<tr><td>".utf8_encode($fila['becas_nombre']).
			//"</td><td><a href='elimina_beca.php?rut=$rut&id_alum=$id_alum&beca=$beca'>Eliminar Beca<a/></td></tr>";
            }
          ?>

                <tr>
                  <th>
                    Beca interna a la cual postula

                     <!-- Modal para actualizar beca de postulacion-->
            <div id="divpostula" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Beca Interna</h3>
              </div>
                  <div class="modal-body">
                  <form name="postula" action="actualizapostula.php?var2=<?php echo $rut; ?>" method="post">
                  <p>Seleccione la beca a la cual quiere postular</p>
                  <select id="postula" name="postula">
                    <option value="No postula">No postula</option>
                    <option value="Beca de alimentación UMCE">Beca de alimentación UMCE</option>
                    <option value="Beca de estudios UMCE">Beca de estudios UMCE</option>
                  </select>

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
      </div>
              <!-- Fin Modal para actualizar beca de postulacion-->
                  </th>
                </tr>
                <tr>
                <td><a data-toggle='modal' href='#divpostula'><?php echo $postula; ?>*</a></td>
              </tr>
             </table>
             </td>
             </tr>
            </table>
            <form name="becas" id="becas" method="post" action="agregar_beca.php?id_alum=<?php echo $id_alum ?>&rut=<?php echo $rut ?>&id_bene=<?php echo $id_bene ?>" class="form-inline">
            <select name="becas" id="becas">
             <?php
			$resultado3=$con->query("SELECT becasycreditos.* FROM becasycreditos");

              while($fila2 = $resultado3->fetch_array(MYSQLI_ASSOC))
            {
            $id_beca=$fila2['id_becas'];
			$nombre_beca=$fila2['becas_nombre'];
            echo "<option value='". $id_beca ."'>". utf8_encode($nombre_beca) ."</option>";
            }
			?>
            </select>
            <input type="submit" value="Agregar beca a este alumno" class="btn btn-success" />
            </form>
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
              $resultado3=$con->query("SELECT alumnos.*,hogar.*,vivienda.*
              FROM alumnos, hogar, vivienda
              WHERE rut_alum ='$rut' AND id_alum = hogar_id_alum AND hogar_vivienda = id_vivienda");

              while($fila1 = $resultado3->fetch_array(MYSQLI_ASSOC))
            {
            $id_alumno=$fila1['id_alum'];
            $dirgrupo=$fila1['hogar_dir'];
            $comunagrupo=$fila1['hogar_comuna'];
            $ciudadgrupo=$fila1['hogar_ciudad'];
            $fonogrupo=$fila1['hogar_telefono'];
            $viv_tipo=$fila1['vivienda_tipo'];
            }
          ?>
            <tr>
              <td><a data-toggle='modal' href='#divdirgrp'><?php echo $dirgrupo; ?>*</a></td>
              <td><a data-toggle='modal' href='#divcomunagrp'><?php echo $comunagrupo; ?>*</a></td>
              <td><a data-toggle='modal' href='#divciudadgrp'><?php echo $ciudadgrupo; ?>*</a></td>
              <td><a data-toggle='modal' href='#divfonogrp'><?php echo $fonogrupo; ?></a>*</td>
            </tr>
          </table>
        </div>
        <!-- Modal para actualizar direccion del grupo familiar-->
            <div id="divdirgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar dirección del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="dirgrp" action="actualizadirgrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <p>Escriba la nueva dirección del grupo familiar</p>
                  <input type="text" id="dirgrp" name="dirgrp" class="span4">
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
      </div>
              <!-- Fin Modal para actualizar direccion del grupo familiar-->
              <!-- Modal para actualizar comuna del grupo-->
            <div id="divcomunagrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar comuna del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="comunagrp" action="actualizacomunagrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <p>Escriba la comuna donde reside el grupo familiar</p>
                  <input type="text" id="comunagrp" name="comunagrp" class="span4">
                 </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
      </div>
              <!-- Fin Modal para actualizar beca de postulacion-->
              <!-- Modal para actualizar ciudad del grupo familiar-->
            <div id="divciudadgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar ciudad del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="ciudadgrp" action="actualizaciudadgrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <p>Escriba la ciudad donde reside el grupo familiar</p>
                  <input type="text" id="ciudadgrp" name="ciudadgrp" class="span4">
                  </select>

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
      </div>
              <!-- Fin Modal para actualizar ciudad del grupo familiar-->
              <!-- Modal para actualizar telefono del grupo familiar-->
            <div id="divfonogrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar teléfono del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="fonogrp" action="actualizafonogrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <p>Escriba el número de telefono del grupo familiar</p>
                  <input type="text" id="fonogrp" name="fonogrp" class="span4">
                  </select>

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
      </div>
              <!-- Fin Modal para actualizar telefono del grupo familiar-->
              <!-- Modal para actualizar tipo de vivienda del grupo familiar-->
            <div id="divvivgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar condición de la vivienda del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="vivgrp" action="actualizavivgrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <p>Seleccione la beca a la cual quiere postular</p>
                  <select class="span5" id="vivgrp" name="vivgrp">
                 <option value="1">Propietario Vivienda Pagada</option>
                 <option value="2">Propietario Vivienda en Pago</option>
                 <option value="3">Arrendatario</option>
                 <option value="4">Usufructuario</option>
                 <option value="5">Allegado</option>
          </select>

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
      </div>
              <!-- Fin Modal para actualizar tipo de vivienda del grupo familiar-->
        <div class='controls controls-row'>
          <table class='table table-hover table table-bordered'>
            <tr>
              <th class='span3'>Condición de la vivienda</th>
            </tr>
            <tr>
              <td><a data-toggle='modal' href='#divvivgrp'><?php echo $viv_tipo; ?></a></td>
            </tr>
          </table>
        </div>
        <p>
          <p>
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
    <th>Eliminar</th>
    <th><a data-toggle='modal' href='#divagregaungrp'>Agregar</a></th>
  </tr>
  <?php
              $resultado5=$con->query("SELECT alumnos.*,un_grupo_familiar.*
              FROM alumnos, un_grupo_familiar
              WHERE rut_alum ='$rut' AND id_alum = un_grupo_alum_id");

              while($fila3 = $resultado5->fetch_array(MYSQLI_ASSOC))
            {
          $un_grupo_alum_id=$fila3['un_grupo_alum_id'];
          $un_grupo_id=$fila3['un_grupo_id'];
          echo "<tr>
          <td><a data-toggle='modal' href='#divnombreungrp'>".$fila3['un_grupo_nombres']." ".$fila3['un_grupo_ap_pat']." ".$fila3['un_grupo_ap_mat']."</a></td>
          <td><a data-toggle='modal' href='#divrutungrp'>".$fila3['un_grupo_rut']."</a></td>
          <td>".$fila3['un_grupo_parent']."</td>
          <td><a data-toggle='modal' href='#divdirungrp'>".$fila3['un_grupo_direccion']."</a></td>
          <td><a data-toggle='modal' href='#divcomunaungrp'>".$fila3['un_grupo_comuna']."</a></td>
          <td><a data-toggle='modal' href='#divciudadungrp'>".$fila3['un_grupo_ciudad']."</a></td>
          <td><a data-toggle='modal' href='#divregionungrp'>".$fila3['un_grupo_region']."</a></td>
          <td><a data-toggle='modal' href='#divecivilungrp'>".$fila3['un_grupo_ecivil']."</a></td>
          <td><a data-toggle='modal' href='#divactivungrp'>".$fila3['un_grupo_actividad']."</a></td>
          <td><a href='eliminar_padres.php?var=".$un_grupo_alum_id."&var2=".$un_grupo_id."&var3=".$rut."'>Eliminar</a></td>
          <td><a data-toggle='modal' href='#divagregaungrp'>Agregar</a></td>";
  }
  ?>
  </tr>
</table>

<!-- Modal para actualizar nombre del padre / madre del un_grupo familiar-->
            <div id="divnombreungrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar nombre de los padres que no pertenecen al grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="nombreungrp" action="actualizanombreungrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Nombre de la persona</legend>
                  <input type="text" id="nombre" name="nombre" class="span3">
                  <legend>Apellido Paterno</legend>
                  <input type="text" id="ap_pat" name="ap_pat" class="span3">
                  <legend>Apellido Materno</legend>
                  <input type="text" id="ap_mat" name="ap_mat" class="span3">
                  <legend>Seleccione el parentezco</legend>
                  <select class="span2" id="parent" name="parent">
                  <option value="Padre">Padre</option>
                  <option value="Madre">Madre</option>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Fin Modal para actualizar nombre del padre / madre del un_grupo familiar-->
        <!-- Modal para actualizar rut del un_grupo familiar-->
            <div id="divrutungrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Rut del Padre / Madre que no pertenece al grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="rutungrp" action="actualizarutungrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <p>Escriba el RUT</p>
                  <input type="text" id="rutungrp" name="rutungrp" class="span4" placeholder="Formato: 12345678-9">
                  <legend>Seleccione el parentezco</legend>
                  <select class="span2" id="parent" name="parent">
                  <option value="Padre">Padre</option>
                  <option value="Madre">Madre</option>
                  </select>
                  </select>

                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Fin Modal para actualizar rut del un_grupo familiar-->
        <!-- Modal para actualizar direccion del un_grupo familiar-->
            <div id="divdirungrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Dirección del Padre / Madre que no pertenece al grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="dirungrp" action="actualizadirungrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <p>Escriba la dirección</p>
                  <input type="text" id="dirungrp" name="dirungrp" class="span4">
                  <legend>Seleccione el parentezco</legend>
                  <select class="span2" id="parent" name="parent">
                  <option value="Padre">Padre</option>
                  <option value="Madre">Madre</option>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Modal para actualizar direccion del un_grupo familiar-->
        <!-- Modal para actualizar comuna del un_grupo familiar-->
            <div id="divcomunaungrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Comuna del Padre / Madre que no pertenece al grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="divcomunaungrp" action="actualizacomunaungrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <p>Escriba la comuna</p>
                  <input type="text" id="comunaungrp" name="comunaungrp" class="span4">
                  <legend>Seleccione el parentezco</legend>
                  <select class="span2" id="parent" name="parent">
                  <option value="Padre">Padre</option>
                  <option value="Madre">Madre</option>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Modal para actualizar comuna del un_grupo familiar-->
        <!-- Modal para actualizar ciudad del un_grupo familiar-->
            <div id="divciudadungrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Ciudad del Padre / Madre que no pertenece al grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="divciudadungrp" action="actualizaciudadungrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <p>Escriba la Ciudad</p>
                  <input type="text" id="ciudadungrp" name="ciudadungrp" class="span4">
                  <legend>Seleccione el parentezco</legend>
                  <select class="span2" id="parent" name="parent">
                  <option value="Padre">Padre</option>
                  <option value="Madre">Madre</option>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Modal para actualizar ciudad del un_grupo familiar-->
        <!-- Modal para actualizar region del un_grupo familiar-->
            <div id="divregionungrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Región del Padre / Madre que no pertenece al grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="regionungrp" action="actualizaregionungrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <p>Escriba la región</p>
                  <input type="text" id="regionungrp" name="regionungrp" class="span4">
                  <legend>Seleccione el parentezco</legend>
                  <select class="span2" id="parent" name="parent">
                  <option value="Padre">Padre</option>
                  <option value="Madre">Madre</option>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Modal para actualizar region del un_grupo familiar-->
        <!-- Modal para actualizar estado civil del un_grupo familiar-->
            <div id="divecivilungrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Estado civil del Padre / Madre que no pertenece al grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="ecivilungrp" action="actualizaecivilungrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Seleccione el Estado civil</legend>
                  <select id="ecivilungrp" name="ecivilungrp" required class="span2">
                        <option value="0">Estado Civil</option>
                        <option value="1">Soltero/a</option>
                        <option value="2">Casado/a</option>
                        <option value="3">Separado/a legalmente</option>
                        <option value="4">Separado/a de hecho</option>
                        <option value="5">Divorciado/a</option>
                        <option value="6">Viudo/a</option>
                        <option value="7">Conviviente</option>
                    </select>
                  <legend>Seleccione el parentezco</legend>
                  <select class="span2" id="parent" name="parent">
                  <option value="Padre">Padre</option>
                  <option value="Madre">Madre</option>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Modal para actualizar estado civil del un_grupo familiar-->
        <!-- Modal para actualizar estado activ del un_grupo familiar-->
            <div id="divactivungrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Actividad del Padre / Madre que no pertenece al grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="activungrp" action="actualizaactivungrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Seleccione la actividad</legend>
                  <select id="activungrp" name="activungrp" required class="span10">
                          <option value="0">Actividad</option>
                          <option value="1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value="2">Trabajador y/o Profesional Independiente</option>
                          <option value="3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value="4">Sostenedor de Establecimiento Educacional</option>
                          <option value="5">Transportista de carga y pasajeros</option>
                          <option value="6">Empresario Agrícola</option>
                          <option value="7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value="8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value="9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value="10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value="11">Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value="12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value="13">Dueña de casa, sin actividad remunerada</option>
                          <option value="14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value="15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value="16">Recién nacido</option>
                          <option value="17">Estudiante y Trabajador</option>
                        </select>
                  <legend>Seleccione el parentezco</legend>
                  <select class="span2" id="parent" name="parent">
                  <option value="Padre">Padre</option>
                  <option value="Madre">Madre</option>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Modal para actualizar estado activ del un_grupo familiar-->
        <!-- Modal para agregar integrante  del un_grupo familiar-->
            <div id="divagregaungrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Agregar Padres que no pertenecen al grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="agregaungrp" action="agregar_padres.php?var=<?php echo $id_alum; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Nombres de la persona</legend>
                  <input type="text" id="nombre" name="nombre" class="span3">
                  <legend>Apellido Paterno</legend>
                  <input type="text" id="ap_pat" name="ap_pat" class="span3">
                  <legend>Apellido Materno</legend>
                  <input type="text" id="ap_mat" name="ap_mat" class="span3">
                  <legend>Rut</legend>
                  <input type="text" id="un_grp_rut" name="un_grp_rut" class="span3">
                  <legend>Seleccione el parentezco</legend>
                  <select class="span2" id="parent" name="parent">
                  <option value="Padre">Padre</option>
                  <option value="Madre">Madre</option>
                  </select>
                  <legend>Dirección</legend>
                  <input type="text" id="dirungrp" name="dirungrp" class="span4">
                  <legend>Comuna</legend>
                  <input type="text" id="comungrp" name="comungrp" class="span4">
                  <legend>Ciudad</legend>
                  <input type="text" id="cityungrp" name="cityungrp" class="span4">
                  <legend>Región</legend>
                  <input type="text" id="regungrp" name="regungrp" class="span4">
                  <legend>Seleccione el Estado civil</legend>
                  <select id="ecivilungrp" name="ecivilungrp" required class="span2">
                        <option value="0">Estado Civil</option>
                        <option value="1">Soltero/a</option>
                        <option value="2">Casado/a</option>
                        <option value="3">Separado/a legalmente</option>
                        <option value="4">Separado/a de hecho</option>
                        <option value="5">Divorciado/a</option>
                        <option value="6">Viudo/a</option>
                        <option value="7">Conviviente</option>
                    </select>
                    <legend>Seleccione la actividad</legend>
                  <select id="activungrp" name="activungrp" required class="span10">
                          <option value="0">Actividad</option>
                          <option value="1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value="2">Trabajador y/o Profesional Independiente</option>
                          <option value="3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value="4">Sostenedor de Establecimiento Educacional</option>
                          <option value="5">Transportista de carga y pasajeros</option>
                          <option value="6">Empresario Agrícola</option>
                          <option value="7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value="8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value="9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value="10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value="11">Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value="12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value="13">Dueña de casa, sin actividad remunerada</option>
                          <option value="14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value="15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value="16">Recién nacido</option>
                          <option value="17">Estudiante y Trabajador</option>
                        </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Fin Modal para agregar integrante del un_grupo familiar-->
        <div class='controls controls-row'>
              <p>
              <legend>Antecedentes e ingresos del grupo familiar</legend>

          <table class='table table-hover table table-bordered'>
  <tr>
    <th>Nombre</th>
    <th>Rut</th>
    <th>Edad</th>
    <th>E.civil</th>
    <th>Parent</th>
    <th>P.Soc</th>
    <th>P.Sal</th>
    <th>N.Est</th>
    <th>Actividad</th>
    <th>Ingresos</th>
    <th>Eliminar entrada</th>
  </tr>
  <?php
              $resultado4=$con->query("SELECT alumnos.*,persona_grupo.*,ingresos.*
              FROM alumnos, persona_grupo, ingresos
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id AND id_alum = ingreso_alumn_id");

              while($fila2 = $resultado4->fetch_array(MYSQLI_ASSOC))
            {
          $persona_id=$fila2['id_persona_grupo'];
          $persona_rut=$fila2['persona_rut'];
          $id_ingreso=$fila2['id_ingreso'];
          echo "<tr>
          <td><a data-toggle='modal' href='#divnombregrp'>".$fila2['persona_nombres']." ".$fila2['persona_ap_pat']." ".$fila2['persona_ap_mat']."</a></td>
          <td><a data-toggle='modal' href='#divrutgrp'>".$fila2['persona_rut']."</a></td>
          <td><a data-toggle='modal' href='#divedadgrp'>".$fila2['persona_edad']."</a></td>
          <td><a data-toggle='modal' href='#divecivilgrp'>".$fila2['persona_ecivil']."</a></td>
          <td><a data-toggle='modal' href='#divparentgrp'>".$fila2['persona_parent']."</a></td>
          <td><a data-toggle='modal' href='#divprev_socgrp'>".$fila2['persona_prev_soc']."</a></td>
          <td><a data-toggle='modal' href='#divprev_salgrp'>".$fila2['persona_prev_sal']."</a></td>
          <td><a data-toggle='modal' href='#divniv_estgrp'>".$fila2['persona_niv_est']."</a></td>
          <td><a data-toggle='modal' href='#divactgrp'>".$fila2['persona_act']."</a></td>
          <td><a data-toggle='modal' href='#divingresogrp'>".$fila2['ingreso_total']."</a></td>
          <td><a href='eliminar_persona.php?var0=".$id_alum."&var=".$persona_rut."&var2=".$persona_id."&var3=".$rut."&var4=".$id_ingreso."'>Eliminar</a></td>";
  }
  ?>
  </tr>
</table whidth="100%">
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
<legend>Observaciones (max. 300 caracteres.)</legend>

<table class='table table-hover table table-bordered'>
  <tr>
    <td>
      <form method="post" action="coment.php">
        <div class="controls controls-row">
        <textarea class='span12' name='comentario' maxlength='300' placeholder="Ingrese sus comentarios"></textarea>
        <input type="hidden" name="id_alum" value='<?php echo $id_alum;?>'>
        <input type="hidden" name="rut_alum" value='<?php echo $rut;?>'>
        <button type="submit" class="btn btn-primary">Enviar Observaciones</button>
      </div>
      </form>
    </td>
  </tr>
</table>
<table class='table table-hover table table-bordered'>

    <?php
      $resultado8=$con->query("SELECT observaciones.* FROM observaciones
              WHERE '$id_alum' = id_alum_obs");
        while($fila8 = $resultado8->fetch_array(MYSQLI_ASSOC))
            {
              echo "<tr><td>". $fila8['comentario'] ."</td>
                    <td>". $fila8['fecha'] ."</td>
                    <td><a href='eliminar_coment.php?var=".$fila8['id']."&rut=".$rut."'>Eliminar</a></td></tr>";
            }
    ?>

</table>
<legend>Archivos subidos por el usuario</legend>| <a href="adjuntar2.php?rut=<?php echo $rut; ?>">adjuntar archivos</a> |
      <p>
      <table class="table table-striped">
        <tr>
          <th>Nombre de archivo</th>
          <th>Tamaño</th>
          <th>Eliminar docto.</th>
        </tr>
<?php
$resultado9=$con->query("SELECT adjuntos.* FROM adjuntos WHERE '$rut' = rut_alum");
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
            <td><a href='eliminar_doctos2.php?rut=".$rut."&id=".$id."&name=".$nombre_arch."'>Eliminar</a></td>
            </tr>";

  }
   ?>
       </table>
<!-- Insertar miembro del grupo familiar mas sus ingresos -->
<table>
<tr>
<td>
<i class="icon-upload"></i> <a href="modificar.php?page=agregar_integrante&rut=<?php echo $rut; ?>&id=<?php echo $id_alum; ?>">Agregar integrante</a>
</td>
</tr>
<tr>
  <td>
    <?php
      if(isset($_GET['page'])){
          $page = $_GET['page'];
          include($page.".php");
            }
           else
          echo "";
     ?>
    </td>
</tr>
</table>
<p>
<p>
<!--//////////////////////////////////////////// MODALES PARA ANTECEDENTES E INGRESOS DEL GRUPO FAMILIAR //////////////////////////////////-->
        <!-- Modal para actualizar nombre de la persona del grupo familiar-->
            <div id="divnombregrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar nombre de un integrante del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="nombregrp" action="actualizanombregrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Nombre de la persona</legend>
                  <input type="text" id="nombre" name="nombre" class="span3">
                  <legend>Apellido Paterno</legend>
                  <input type="text" id="ap_pat" name="ap_pat" class="span3">
                  <legend>Apellido Materno</legend>
                  <input type="text" id="ap_mat" name="ap_mat" class="span3">
                  <legend>Seleccione persona por rut</legend>
                  <select id="persona_rut" name="persona_rut" required class="span3">
                          <option value="0">RUT</option>
                  <?php
              $resultado5=$con->query("SELECT alumnos.*,persona_grupo.*,ingresos.*
              FROM alumnos, persona_grupo, ingresos
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id");
              $i=1;
              while($fila3 = $resultado5->fetch_array(MYSQLI_ASSOC))
              {
                echo"<option value=".$fila3['persona_rut'].">".$fila3['persona_rut']."</option>";

              }
         ?>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Fin Modal para actualizar nombre de la persona del grupo familiar-->
        <!-- Modal para actualizar rut de la persona del grupo familiar-->
            <div id="divrutgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar RUT de un integrante del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="rutgrp" action="actualizarutgrp.php?var=<?php echo $id_persona; ?>&var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Ingrese el RUT a modificar</legend>
                  <input type="text" id="rut" name="rut" class="span3">
                  <legend>Seleccione persona</legend>
                  <select id="persona_rut" name="persona_rut" class="span4">
                          <option value="0">Nombre</option>
                  <?php
              $resultado6=$con->query("SELECT alumnos.*,persona_grupo.*,ingresos.*
              FROM alumnos, persona_grupo, ingresos
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id");
              $i=1;
              while($fila4 = $resultado6->fetch_array(MYSQLI_ASSOC))
              {

                echo"<option value=".$fila4['persona_rut'].">".$fila4['persona_nombres']." ".$fila4['persona_ap_pat']." ".$fila4['persona_ap_mat']."</option>";

              }
         ?>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Fin Modal para actualizar rut de la persona del grupo familiar-->
        <!-- Modal para actualizar edad de la persona del grupo familiar-->
            <div id="divedadgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Edad de un integrante del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="rutgrp" action="actualizaedadgrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Ingrese la edad a modificar</legend>
                  <input type="text" id="edad" name="edad" class="span3">
                  <legend>Seleccione persona</legend>
                  <select id="persona_rut" name="persona_rut" class="span4">
                          <option value="0">Nombre</option>
                  <?php
              $resultado6=$con->query("SELECT alumnos.*,persona_grupo.*,ingresos.*
              FROM alumnos, persona_grupo, ingresos
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id");
              $i=1;
              while($fila4 = $resultado6->fetch_array(MYSQLI_ASSOC))
              {

                echo"<option value=".$fila4['persona_rut'].">".$fila4['persona_nombres']." ".$fila4['persona_ap_pat']." ".$fila4['persona_ap_mat']."</option>";

              }
         ?>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Fin Modal para actualizar edad de la persona del grupo familiar-->
        <!-- Modal para actualizar estado civil de la persona del grupo familiar-->
            <div id="divecivilgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Estado Civil de un integrante del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="ecivilgrp" action="actualizaecivilgrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Ingrese estado civil a modificar</legend>
                  <select id="ecivil" name="ecivil" class="span2">
                 <option value="0">Estado Civil</option>
                 <option value="1">Soltero</option>
                 <option value="2">Casado</option>
                 <option value="3">Separado legalmente</option>
                 <option value="4">Separado de hecho</option>
                 <option value="5">Divorciado</option>
                 <option value="6">Viudo</option>
                 <option value="7">Conviviente</option>
          </select>
                  <legend>Seleccione persona</legend>
                  <select id="persona_rut" name="persona_rut" class="span4">
                          <option value="0">Nombre</option>
                  <?php
              $resultado6=$con->query("SELECT alumnos.*,persona_grupo.*,ingresos.*
              FROM alumnos, persona_grupo, ingresos
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id");
              $i=1;
              while($fila4 = $resultado6->fetch_array(MYSQLI_ASSOC))
              {

                echo"<option value=".$fila4['persona_rut'].">".$fila4['persona_nombres']." ".$fila4['persona_ap_pat']." ".$fila4['persona_ap_mat']."</option>";

              }
         ?>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Fin Modal para actualizar estado civil de la persona del grupo familiar-->
        <!-- Modal para actualizar parentesco de la persona del grupo familiar-->
            <div id="divparentgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Parentesco de un integrante del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="parentgrp" action="actualizaparentgrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Ingrese parentesco a modificar</legend>
                  <select id="parent" name="parent" class="span4">
                        <option value="0">Parentesco</option>
                        <option value="1">Padre</option>
                        <option value="2">Padrastro</option>
                        <option value="3">Madre</option>
                        <option value="4">Madrastra</option>
                        <option value="5">Hermano(a) o Hermanastro(a)</option>
                        <option value="6">Hijo(a)</option>
                        <option value="7">Cónyuge</option>
                        <option value="8">Abuelo(a)</option>
                        <option value="9">Tío(a)</option>
                        <option value="10">Primo(a)</option>
                        <option value="11">Sobrino(a)</option>
                        <option value="12">Suegro(a)</option>
                        <option value="13">Cuñado(a)</option>
                        <option value="14">Otro</option>
                        <option value="15">Pareja</option>
                        <option value="16">Yo</option>
                      </select>
                  <legend>Seleccione persona</legend>
                  <select id="persona_rut" name="persona_rut" class="span4">
                          <option value="0">Nombre</option>
                  <?php
              $resultado6=$con->query("SELECT alumnos.*,persona_grupo.*,ingresos.*
              FROM alumnos, persona_grupo, ingresos
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id");
              $i=1;
              while($fila4 = $resultado6->fetch_array(MYSQLI_ASSOC))
              {

                echo"<option value=".$fila4['persona_rut'].">".$fila4['persona_nombres']." ".$fila4['persona_ap_pat']." ".$fila4['persona_ap_mat']."</option>";

              }
         ?>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Fin Modal para actualizar parentesco de la persona del grupo familiar-->
        <!-- Modal para actualizar prevision social de la persona del grupo familiar-->
            <div id="divprev_socgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Prev. Social de un integrante del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="prev_socgrp" action="actualizaprev_socgrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Ingrese prev. social a modificar</legend>
                  <select id="prev_socgrp" name="prev_socgrp" required class="span4">
                        <option value="0">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  <legend>Seleccione persona</legend>
                  <select id="persona_rut" name="persona_rut" class="span4">
                          <option value="0">Nombre</option>
                  <?php
              $resultado6=$con->query("SELECT alumnos.*,persona_grupo.*,ingresos.*
              FROM alumnos, persona_grupo, ingresos
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id");
              $i=1;
              while($fila4 = $resultado6->fetch_array(MYSQLI_ASSOC))
              {

                echo"<option value=".$fila4['persona_rut'].">".$fila4['persona_nombres']." ".$fila4['persona_ap_pat']." ".$fila4['persona_ap_mat']."</option>";

              }
         ?>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Fin Modal para actualizar prev. social de la persona del grupo familiar-->
        <!-- Modal para actualizar prevision salud de la persona del grupo familiar-->
            <div id="divprev_salgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Prev. Salud de un integrante del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="prev_salgrp" action="actualizaprev_salgrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Ingrese prev. salud a modificar</legend>
                  <select id="prev_salgrp" name="prev_salgrp" required class="span4">
                        <option value="0">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  <legend>Seleccione persona</legend>
                  <select id="persona_rut" name="persona_rut" class="span4">
                          <option value="0">Nombre</option>
                  <?php
              $resultado6=$con->query("SELECT alumnos.*,persona_grupo.*,ingresos.*
              FROM alumnos, persona_grupo, ingresos
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id");
              $i=1;
              while($fila4 = $resultado6->fetch_array(MYSQLI_ASSOC))
              {

                echo"<option value=".$fila4['persona_rut'].">".$fila4['persona_nombres']." ".$fila4['persona_ap_pat']." ".$fila4['persona_ap_mat']."</option>";

              }
         ?>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Fin Modal para actualizar prev. salud de la persona del grupo familiar-->
        <!-- Modal para actualizar Nivel de estudios persona del grupo familiar-->
            <div id="divniv_estgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Nivel de estudios de un integrante del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="niv_estgrp" action="actualizaniv_estgrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Ingrese nivel de estudios a modificar</legend>
                  <select id="niv_estgrp" name="niv_estgrp" required class="span4">
                        <option value="0">Nivel de estudios</option>
                        <option value="1">Sin estudios</option>
                        <option value="2">Enseñanza Básica Incompleta</option>
                        <option value="3">Enseñanza Básica Completa</option>
                        <option value="4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value="5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value="6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value="7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value="8">Enseñanza Profesional Completa</option>
                      </select>
                  <legend>Seleccione persona</legend>
                  <select id="persona_rut" name="persona_rut" class="span4">
                          <option value="0">Nombre</option>
                  <?php
              $resultado6=$con->query("SELECT alumnos.*,persona_grupo.*,ingresos.*
              FROM alumnos, persona_grupo, ingresos
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id");
              $i=1;
              while($fila4 = $resultado6->fetch_array(MYSQLI_ASSOC))
              {

                echo"<option value=".$fila4['persona_rut'].">".$fila4['persona_nombres']." ".$fila4['persona_ap_pat']." ".$fila4['persona_ap_mat']."</option>";

              }
         ?>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Fin Modal para actualizar Nivel de estudios persona del grupo familiar-->
        <!-- Modal para actualizar Actividad persona del grupo familiar-->
            <div id="divactgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Actividad de un integrante del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="niv_estgrp" action="actualizaactgrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Ingrese actividad a modificar</legend>
                  <select id="actgrp" name="actgrp" required class="span4">
                        <option value="0">Actividad</option>
                          <option value="1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value="2">Trabajador y/o Profesional Independiente</option>
                          <option value="3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value="4">Sostenedor de Establecimiento Educacional</option>
                          <option value="5">Transportista de carga y pasajeros</option>
                          <option value="6">Empresario Agrícola</option>
                          <option value="7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value="8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value="9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value="10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value="11">Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value="12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value="13">Dueña de casa, sin actividad remunerada</option>
                          <option value="14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value="15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value="16">Recién nacido</option>
                          <option value="17">Estudiante y Trabajador</option>
                      </select>
                  <legend>Seleccione persona</legend>
                  <select id="persona_rut" name="persona_rut" class="span4">
                          <option value="0">Nombre</option>
                  <?php
              $resultado6=$con->query("SELECT alumnos.*,persona_grupo.*,ingresos.*
              FROM alumnos, persona_grupo, ingresos
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id AND id_alum = ingreso_alumn_id");
              $i=1;
              while($fila4 = $resultado6->fetch_array(MYSQLI_ASSOC))
              {

                echo"<option value=".$fila4['persona_rut'].">".$fila4['persona_nombres']." ".$fila4['persona_ap_pat']." ".$fila4['persona_ap_mat']."</option>";

              }
         ?>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Fin Modal para actualizar Actividad de estudios persona del grupo familiar-->
        <!-- Modal para actualizar ingresos persona del grupo familiar-->
            <div id="divingresogrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Ingresos de un integrante del grupo familiar</h3>
              </div>
                  <div class="modal-body">
                  <form name="ingresogrp" action="actualizaingresogrp.php?var2=<?php echo $id_alumno; ?>&var3=<?php echo $rut; ?>" method="post">
                  <legend>Ingresos a modificar</legend>
                  <input type="text" id="sueldos" name="sueldos" class="span2" placeholder="Sueldos y Pensiones">
                  <input type="text" id="hono" name="hono" class="span2" placeholder="Honorarios">
                  <legend></legend>
                  <input type="text" id="retiro" name="retiro" class="span2" placeholder="Retiro">
                  <input type="text" id="pen" name="pen" class="span3" placeholder="P. de alimentos y/o Aporte de parientes">
                  <legend></legend>
                  <input type="text" id="act_in" name="act_in" class="span2" placeholder="Actividades Indep.">
                  <input type="text" id="otros" name="otros" class="span3" placeholder="Otros (Dividendos, ganacias de capital)">
                  <legend>Seleccione persona</legend>
                  <select id="persona_rut" name="persona_rut" class="span4">
                          <option value="0">Nombre</option>
                  <?php
              $resultado6=$con->query("SELECT alumnos.*,persona_grupo.*,ingresos.*
              FROM alumnos, persona_grupo, ingresos
              WHERE rut_alum ='$rut' AND id_alum = persona_id_alum AND persona_rut = ingreso_persona_grp_id");
              $i=1;
              while($fila4 = $resultado6->fetch_array(MYSQLI_ASSOC))
              {

                echo"<option value=".$fila4['persona_rut'].">".$fila4['persona_nombres']." ".$fila4['persona_ap_pat']." ".$fila4['persona_ap_mat']."</option>";

              }
         ?>
                  </select>
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
              </div>
            </div>
        <!-- Fin Modal para actualizar ingresos de estudios persona del grupo familiar-->

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
