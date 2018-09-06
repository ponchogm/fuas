<?php
include ('seguridad2.php');
include ('conectar.php');
$rut=$_GET['var'];

$pregunta = $con->query("SELECT rut_alum, direccion_alum FROM alumnos WHERE rut_alum ='$rut'");
            $fil = $pregunta->fetch_array(MYSQLI_ASSOC);
            $dir = $fil['direccion_alum'];
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <script type="text/javascript" src="js/validaciones.js"></script>
    <script type="text/javascript">
      function onRutBlur(obj) {
        if (VerificaRut(obj.value))
          return true;
        else
          alert("Rut incorrecto - Recuerde que el formato es sin puntos ej: 12345678-9");
      }
    </script>
    <meta charset="utf-8">
    <title>Beneficios - Universidad Metropolitana de Ciencias de la Educación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript">
          function ActivarCampo(){
              var contenedor = document.getElementById("addinput1");
              contenedor.style.display = "block";
              return true;
          }
          function ActivarCampo2(){
              var contenedor = document.getElementById("addinput2");
              contenedor.style.display = "block";
              return true;
          }
          function ActivarCampo3(){
              var contenedor = document.getElementById("addinput3");
              contenedor.style.display = "block";
              return true;
          }
          function ActivarCampo4(){
              var contenedor = document.getElementById("addinput4");
              contenedor.style.display = "block";
              return true;
          }
          function ActivarCampo5(){
              var contenedor = document.getElementById("addinput5");
              contenedor.style.display = "block";
              return true;
          }
          function ActivarCampo6(){
              var contenedor = document.getElementById("addinput6");
              contenedor.style.display = "block";
              return true;
          }
          function ActivarCampo7(){
              var contenedor = document.getElementById("addinput7");
              contenedor.style.display = "block";
              return true;
          }
          function ActivarCampo8(){
              var contenedor = document.getElementById("addinput8");
              contenedor.style.display = "block";
              return true;
          }
          function ActivarCampo9(){
              var contenedor = document.getElementById("addinput9");
              contenedor.style.display = "block";
              return true;
          }
          function ActivarCampo10(){
              var contenedor = document.getElementById("addinput10");
              contenedor.style.display = "block";
              return true;
          }
          function ActivarCampo11(){
              var contenedor = document.getElementById("addinput11");
              contenedor.style.display = "block";
              return true;
        }
          function ActivarCampo12(){
              var contenedor = document.getElementById("addinput12");
              contenedor.style.display = "block";
              return true;
          }
          function ActivarCampo13(){
              var contenedor = document.getElementById("addinput13");
              contenedor.style.display = "block";
              return true;
          }
          function ActivarCampo14(){
              var contenedor = document.getElementById("addinput14");
              contenedor.style.display = "block";
              return true;
          }
          function ActivarCampo15(){
              var contenedor = document.getElementById("addinput15");
              contenedor.style.display = "block";
              return true;
          }
    </script>
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

          <?php if($dir != ''): ?>
          <!-- Comento botón de modificación de datos
          <li><a href="modificar2.php?rut=<? echo $rut; ?>"><i class="icon-edit"></i> Modificar datos</a></li>
          -->
          <?php endif; ?>
          <li><a href="salir2.php">| Salir del formulario</a></li>
        </ul>
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

    <div class="container">

      <!-- Cabecera del formulario -->
      <div class="row-fluid">
        <div class="span2"><img src="bootstrap/img/Logo_umce.jpg" class="img-rounded"></div>
        <div class="span8" style="text-align:center"><h3>Formulario de Acreditación Socioeconómica 2018</h3></div>
        <div class="span2"><img src="bootstrap/img/Logo_dae.jpg" class="img-rounded"></div>
      </div>
        <p>
      <!-- Comienzo del formulario UMCE por Luis García Manzo -->
  <?php if($dir == ''): ?>
      <form name="alumnos_dae" method="post" action="inserta2.php?var=<? echo $rut; ?>">
        <div class="controls controls-row">
          <legend>Antecedentes del Estudiante</legend>
          <h6>Llene cuidadosamente este formulario y revise el contenido antes de enviar</h6>
            <?php
            $consulta = $con->query("SELECT alumnos.*,carreras.* FROM alumnos, carreras WHERE rut_alum ='$rut' AND cod_carrera_alum = codigo_car");
              $row = $consulta->fetch_array(MYSQLI_ASSOC);
              $nombre=$row['nombres_alum'];
              $ap_pat_alum=$row['ap_pat_alum'];
              $ap_mat_alum=$row['ap_mat_alum'];
              $rut_alum=$row['rut_alum'];
              $fnac=$row['fecha_nac'];
              $ingreso=$row['anio_ingreso_alum'];
              $carrera=$row['nombre_car'];
              $cod_car=$row['cod_carrera_alum'];
            ?>
          <input type="text" disabled class="span3" value="<?php echo utf8_encode($nombre); ?>">
          <input type="text" disabled class="span2" value="<?php echo utf8_encode($ap_pat_alum); ?>">
          <input type="text" disabled class="span2" value="<?php echo utf8_encode($ap_mat_alum); ?>">
          <input type="text" disabled class="span2" value="<?php echo $rut; ?>">
        </div>
        <div class="controls controls-row">
          <input class="span5" disabled type="text" name="rut_alum" value="<?php echo $carrera; ?>">
          <input class='span2' disabled type='text' value="Código: <?php echo $cod_car; ?>">
          <input type="text" disabled id="anio_ingreso" name="anio_ingreso" class="span2" value="Año ingreso: <?php echo $ingreso; ?>">
        </div>
        <div class="controls controls-row">
            <input type="text" required id="dir_alum" name="dir_alum" class="span3" placeholder="Dirección académica">
            <input type="text" required id="comuna" name="comuna" class="span2" placeholder="Comuna">
            <input type="text" id="telefono_alum" name="telefono_alum" class="span2" placeholder="Fono fijo (incluya cod)">
            <input type="text" id="cel_alum" name="cel_alum" class="span2" placeholder="Celular">
          </div>
          <div class="controls controls-row">
            <input type="email" required id="correo_alum" name="correo_alum"class="span3" placeholder="Correo Institucional">
            <input type="text" disabled id="fnac_alum" name="fnac_alum" class="span3" value="<?php echo $fnac; ?>"><!--placeholder="Fecha de nacimiento (dd/mm/aaaa)">-->
            <input type="text" required id="nac_alum" name="nac_alum" class="span3" placeholder="Indique su nacionalidad">
          </div>
          <div class="controls controls-row">
          <h6> Si no pertenece a ningún pueblo originario escriba: No</h6>
            <input type="text" required id="porigin_alum" name="porigin_alum" class="span4" placeholder="¿Pertenece a algún pueblo originario?, indique cual">
          </div>
          <div class="controls controls-row">
          <h6>¿Tiene algún tipo de discapacidad cognitiva, física o sensorial?, si la respuesta es Si indique cual, de lo contrario escriba: No</h6>
            <input type="text" required id="discapacidad_alum" name="discapacidad_alum" class="span4" placeholder="Discapacidad cognitiva, física o sensorial">
          </div>
          <!-- Comento la elección de los beneficios
          <div class="controls controls-row">
            <legend>Beneficios</legend>
            <h6></h6>
            <?php
              //Contruyo primero el listado de todas las becas
              /*
              $becas=$con->query("SELECT becasycreditos.* FROM becasycreditos");
                while($res = $becas->fetch_array(MYSQLI_ASSOC)){
                  $id_becas = $res['id_becas'];

                    //Consulto por cada una de las becas
                    $resultado2=$con->query("SELECT alumnos.*,beneficios.*
                    FROM alumnos, beneficios
                    WHERE rut_alum ='$rut' AND id_alum = id_alum_bene AND id_beca_bene = '$id_becas'");
                      $fila = $resultado2->fetch_array(MYSQLI_ASSOC);

                      if($fila['id_beca_bene']==""){//si no está le digo que me cree el checkbox con el nombre de la beca desabilitado y vacío
                      echo "<label class='checkbox span4'>
                        <input type='checkbox' name='becas[]' disabled >".utf8_encode($res['becas_nombre'])."</label>";
                      }
                      else{//si está le digo que me cree el checkbox con el nombre de la beca desabilitado y marcado
                        echo "<label class='checkbox span4'>
                        <input type='checkbox' name='becas[]'  disabled checked >".utf8_encode($res['becas_nombre'])."</label>";
                      }
                }
                */
            ?>
                   <h6>Otras Becas (indique cual)</h6>
                   <input type="text" id="1" name="1" placeholder="Otras ¿Cual?">
                  <h6>Postulación a beca interna</h6>
                   <select id="beca_int" name="beca_int">
                    <option value="No postula">No postula</option>
                    <option value="Beca de alimentación UMCE">Beca de alimentación UMCE</option>
                    <option value="Beca de estudios UMCE">Beca de estudios UMCE</option>
                  </select>
          </div>
          <p>
       fin del comentario de las becas -->
        <div class="controls controls-row">
          <legend>Antecedentes del Grupo Familiar</legend>
          <p>
          <h6>Escriba su dirección completa.</h6>
          <input type="text" id="dir_grupo" name="dir_grupo" required class="span5" placeholder="Dirección del grupo familiar">
          <input type="text" id="comuna_grupo" name="comuna_grupo" required class="span2" placeholder="Comuna">
          <input type="text" id="ciudad_grupo" name="ciudad_grupo" required class="span2" placeholder="Ciudad">
          <input type="text" id="telefono_grupo" name="telefono_grupo" required class="span2" placeholder="Teléfono">
        </div>
        <div class="controls controls-row">
          <h6>Tenencia de la vivienda</h6>
          <select class="span5" id="vivienda_grupo" name="vivienda_grupo">
                 <option value="1">Propietario Vivienda Pagada</option>
                 <option value="2">Propietario Vivienda en Pago</option>
                 <option value="3">Arrendatario</option>
                 <option value="4">Usufructuario</option>
                 <option value="5">Allegado</option>
          </select>
        </div>
        <p>
        <div class="controls controls-row">
          <!-- SACO PADRES DEL UN GRUPO FAMILIAR
          <h5>Si sus padres no son integrantes del grupo familiar</h5>
          <p>
          <h6>Antecedentes del Padre</h6>
          <input type="hidden"  name="padre" value="Padre">
          <input type="text" id="rut_padre_ungrupo" name="rut_padre_ungrupo" class="span2" placeholder="Rut Padre" onblur="onRutBlur(this);">
          <input type="text" class="span2" id="nombre_padre_ungrupo" name="nombre_padre_ungrupo" placeholder="Nombres">
          <input type="text" class="span2" id="ap_pat_padre_ungrupo" name="ap_pat_padre_ungrupo" placeholder="Apellido Paterno">
          <input type="text" class="span2" id="ap_mat_padre_ungrupo" name="ap_mat_padre_ungrupo" placeholder="Apellido Materno">
          <select id="ecivil_padre_ungrupo" name="ecivil_padre_ungrupo" class="span2">
                 <option value="0">Estado Civil</option>
                 <option value="1">Soltero</option>
                 <option value="2">Casado</option>
                 <option value="3">Separado legalmente</option>
                 <option value="4">Separado de hecho</option>
                 <option value="5">Divorciado</option>
                 <option value="6">Viudo</option>
                 <option value="7">Conviviente</option>
          </select>
         </div>
              <div class="controls controls-row">
                <select id="actividad_padre_ungrupo" name="actividad_padre_ungrupo" class="span10">
                  <option value="0">Actividad del Padre</option>
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
              <div class="controls controls-row">
                  <input type="text" id="dir_padre_ungrupo" name="dir_padre_ungrupo" class="span3" placeholder="Dirección del Padre">
                  <input type="text" id="comuna_padre_ungrupo" name="comuna_padre_ungrupo" class="span2" placeholder="Comuna">
                  <input type="text" id="ciudad_padre_ungrupo" name="ciudad_padre_ungrupo" class="span2" placeholder="Ciudad">
                  <input type="text" id="region_padre_ungrupo" name="region_padre_ungrupo" class="span2" placeholder="Región">
              </div>
              <div class="controls controls-row">
                <p>
                <h6>Antecedentes de la Madre</h6>
                <input type="hidden" name="madre" value="Madre">
                <input type="text" id="rut_madre_ungrupo" name="rut_madre_ungrupo" class="span2" placeholder="Rut Madre" onblur="onRutBlur(this);">
                <input type="text" id="nombre_madre_ungrupo" name="nombre_madre_ungrupo" class="span2" placeholder="Nombres">
                <input type="text" id="ap_pat_madre_ungrupo" name="ap_pat_madre_ungrupo" class="span2" placeholder="Apellido Paterno">
                <input type="text" id="ap_mat_madre_ungrupo" name="ap_mat_madre_ungrupo" class="span2" placeholder="Apellido Materno">
                <select id="ecivil_madre_ungrupo" name="ecivil_madre_ungrupo" class="span2">
                 <option value="0">Estado Civil</option>
                 <option value="1">Soltera</option>
                 <option value="2">Casada</option>
                 <option value="3">Separada legalmente</option>
                 <option value="4">Separada de hecho</option>
                 <option value="5">Divorciada</option>
                 <option value="6">Viuda</option>
                 <option value="7">Conviviente</option>
                </select>
              </div>
              <div class="controls controls-row">
                <select id="actividad_madre_ungrupo" name="actividad_madre_ungrupo" class="span10">
                  <option value="0">Actividad de la Madre</option>
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
                  <option value="12">, menor de 65 años, sin pensión ni otros ingresos</option>
                  <option value="13">Dueña de casa, sin actividad remunerada</option>
                  <option value="14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                  <option value="15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                  <option value="16">Recién nacido</option>
                  <option value="17">Estudiante y Trabajador</option>
                </select>
              </div>
              <div class="controls controls-row">
                  <input type="text" id="dir_madre_ungrupo" name="dir_madre_ungrupo" class="span3" placeholder="Dirección de la Madre">
                  <input type="text" id="comuna_madre_ungrupo" name="comuna_madre_ungrupo" class="span2" placeholder="Comuna">
                  <input type="text" id="ciudad_madre_ungrupo" name="ciudad_madre_ungrupo" class="span2" placeholder="Ciudad">
                  <input type="text" id="region_madre_ungrupo" name="region_madre_ungrupo" class="span2" placeholder="Región">
              </div>
               FIN DE LA SALIDA DEL UN GRUPO FAMILIAR   -->
              <p>
              <h4 class="page-header">Antecedentes e ingresos del grupo familiar <h6>Ingrese estos datos por cada integrante del grupo familiar incluído el estudiante (Para agregar integrantes de su grupo familiar haga click en el link "Agregar Integrante")</h6></h4>
		<p><h6>(Los rut deben ser ingresados sin punto, pero con gui&oacute;n ej: 12345678-9)</h6>
              <div id="addinput">
                  <p>
                    <h6>1</h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo1" name="nombre_grupo1" class="span2" required value="<?php echo utf8_encode($nombre); ?>">
                  <input type="text" id="ap_pat_grupo1" name="ap_pat_grupo1" class="span2" required value="<?php echo utf8_encode($ap_pat_alum); ?>">
                  <input type="text" id="ap_mat_grupo1" name="ap_mat_grupo1" class="span2" required value="<?php echo utf8_encode($ap_mat_alum); ?>">
                  <input type="text" id="rut_grupo1" name="rut_grupo1" class="span2" required value="<?php echo $rut; ?>">
                  <input type="text" id="edad_grupo1" name="edad_grupo1" class="span1" required placeholder="Edad">
                    <select id="ecivil_grupo1" name="ecivil_grupo1" class="span2" required>
                        <option value="0">Estado Civil</option>
                        <option value="1">Soltero/a</option>
                        <option value="2">Casado/a</option>
                        <option value="3">Separado/a legalmente</option>
                        <option value="4">Separado/a de hecho</option>
                        <option value="5">Divorciado/a</option>
                        <option value="6">Viudo/a</option>
                        <option value="7">Conviviente</option>
                    </select>
                </div>
                <div class="controls controls-row">
                      <select id="parent_grupo1" name="parent_grupo1" class="span2" required>
                        <option value="0">Parentesco</option>
                        <option value="16">Yo</option>
                      </select>
                      <select id="prev_soc_grupo1" name="prev_soc_grupo1" class="span3" required>
                        <option value="0">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo1" name="prev_sal_grupo1" class="span3" required>
                        <option value="0">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo1" name="niv_est_grupo1" class="span3" required>
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
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo1" name="act_grupo1" class="span10" required>
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
                    <div class="controls controls-row">
                      <h6>Indique el promedio mensual de los meses de Junio, Julio y Agosto 2016. Escriba los valores sin el signo $ y sin puntos Ej: 120000</h6>
                      <input type="text" id="sueldos_grupo1" name="sueldos_grupo1" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo1" name="hono_grupo1" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo1" name="retiro_grupo1" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo1" name="pen_grupo1" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo1" name="act_in_grupo1" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo1" name="otros_grupo1" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p><a href="#2" onclick="ActivarCampo();">Agregar Integrante</a></p>
                    <hr>

              </div>
              <div id="addinput1" style="display:none;">
                  <p>
                    <h6><a id="2">2</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo2" name="nombre_grupo2" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo2" name="ap_pat_grupo2" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo2" name="ap_mat_grupo2" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo2" name="rut_grupo2" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo2" name="edad_grupo2" class="span1" placeholder="Edad">
                    <select class="span2" id="ecivil_grupo2" name="ecivil_grupo2">
                        <option value="0">Estado Civil</option>
                        <option value="1">Soltero/a</option>
                        <option value="2">Casado/a</option>
                        <option value="3">Separado/a legalmente</option>
                        <option value="4">Separado/ a de hecho</option>
                        <option value="5">Divorciado/a</option>
                        <option value="6">Viudo/a</option>
                        <option value="7">Conviviente</option>
                    </select>
                </div>
                <div id="parent_grupo2" name="parent_grupo2"class="controls controls-row">
                      <select class="span2">
                        <option value="0">Parentesco</option>
                        <option value="1">Padre</option>
                        <option value="2">Padrastro</option>
                        <option value="3">Madre</option>
                        <option value="4">Madrastra</option>
                        <option value="5">Hermano(a) o Hermanastro(a)</option>
                        <option value="6">Hijo(a)</option>
                        <option value="7">Cónyuge</option>
                        <option value="8" >Abuelo(a)</option>
                        <option value="9">Tío(a)</option>
                        <option value="10">Primo(a)</option>
                        <option value="11">Sobrino(a)</option>
                        <option value="12">Suegro(a)</option>
                        <option value="13">Cuñado(a)</option>
                        <option value="14">Otro</option>
                      </select>
                      <select id="prev_soc_grupo2" name="prev_soc_grupo2" class="span3">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo2" name="prev_sal_grupo2" class="span3">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo2" name="niv_est_grupo2"class="span3">
                        <option "">Nivel de estudios</option>
                        <option value="1">Sin estudios</option>
                        <option value="2">Enseñanza Básica Incompleta</option>
                        <option value="3">Enseñanza Básica Completa</option>
                        <option value="4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value="5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value="6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value="7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value="8">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo2" name="act_grupo2" class="span10">
                          <option "">Actividad</option>
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
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo2" name="sueldos_grupo2" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo2" name="hono_grupo2" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo2" name="retiro_grupo2" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo2" name="pen_grupo2" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo2" name="act_in_grupo2" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo2" name="otros_grupo2" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                    <a href="#3" onclick="ActivarCampo2();">Agregar Integrante</a>
                    </p>
                    <hr>

              </div>
              <div id="addinput2" style="display:none;">
                  <p>
                    <h6><a id="3">3</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo3" name="nombre_grupo3" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo3" name="ap_pat_grupo3" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo3" name="ap_mat_grupo3" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo3" name="rut_grupo3" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo3" name="edad_grupo3" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo3" name="ecivil_grupo3" class="span2">
                        <option "">Estado Civil</option>
                        <option value= "1">Soltero/a</option>
                        <option value= "2">Casado/a</option>
                        <option value= "3">Separado/a legalmente</option>
                        <option value= "4">Separado/a de hecho</option>
                        <option value= "5">Divorciado/a</option>
                        <option value= "6">Viudo/a</option>
                        <option value= "7">Conviviente</option>
                    </select>
                </div>
                <div class="controls controls-row">
                      <select id="parent_grupo3" name="parent_grupo3" class="span2">
                        <option "">Parentesco</option>
                        <option value= "1">Padre</option>
                        <option value= "2">Padrastro</option>
                        <option value= "3">Madre</option>
                        <option value= "4">Madrastra</option>
                        <option value= "5">Hermano(a) o Hermanastro(a)</option>
                        <option value= "6">Hijo(a)</option>
                        <option value= "7">Cónyuge</option>
                        <option value= "8">Abuelo(a)</option>
                        <option value= "9">Tío(a)</option>
                        <option value= "10">Primo(a)</option>
                        <option value= "11">Sobrino(a)</option>
                        <option value= "12">Suegro(a)</option>
                        <option value= "13">Cuñado(a)</option>
                        <option value= "14">Otro</option>
                      </select>
                      <select id="prev_soc_grupo3" name="prev_soc_grupo3" class="span3">
                        <option "">Prev. Social</option>
                        <option value= "1">AFP</option>
                        <option value= "2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value= "3">CAPREDENA</option>
                        <option value= "4">DIPRECA</option>
                        <option value= "5">Otra previsión</option>
                        <option value= "6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo3" name="prev_sal_grupo3" class="span3">
                        <option "">Prev. Salud</option>
                        <option value= "1">FONASA</option>
                        <option value= "2">ISAPRE</option>
                        <option value= "3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value= "4">tros seguros de salud</option>
                        <option value= "5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo3" name="niv_est_grupo3" class="span3">
                        <option "">Nivel de estudios</option>
                        <option value= "1">Sin estudios</option>
                        <option value= "2">Enseñanza Básica Incompleta</option>
                        <option value= "3">Enseñanza Básica Completa</option>
                        <option value= "4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value= "5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value= "6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value= "7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value= "8">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo3" name="act_grupo3" class="span10">
                          <option "">Actividad</option>
                          <option value= "1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value= "2">Trabajador y/o Profesional Independiente</option>
                          <option value= "3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value= "4">Sostenedor de Establecimiento Educacional</option>
                          <option value= "5">Transportista de carga y pasajeros</option>
                          <option value= "6">Empresario Agrícola</option>
                          <option value= "7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value= "8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value= "9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value= "10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value= "11">Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "13">Dueña de casa, sin actividad remunerada</option>
                          <option value= "14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value= "15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value= "16">Recién nacido</option>
                          <option value= "17">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo3" name="sueldos_grupo3" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo3" name="hono_grupo3" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo3" name="retiro_grupo3" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo3" name="pen_grupo3" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo3" name="act_in_grupo3" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo3" name="otros_grupo3" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p><a href="#4" onclick="ActivarCampo3();">Agregar Integrante</a>
                    </p>
                    <hr>

              </div>
              <div id="addinput3" style="display:none;">
                  <p>
                    <h6><a id="4">4</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo4" name="nombre_grupo4" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo4" name="ap_pat_grupo4" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo4" name="ap_mat_grupo4" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo4" name="rut_grupo4" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo4" name="edad_grupo4" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo4" name="ecivil_grupo4" class="span2">
                        <option "">Estado Civil</option>
                        <option value= "1">Soltero/a</option>
                        <option value= "2">Casado/a</option>
                        <option value= "3">Separado/a legalmente</option>
                        <option value= "4">Separado/a de hecho</option>
                        <option value= "5">Divorciado/a</option>
                        <option value= "6">Viudo/a</option>
                        <option value= "7">Conviviente</option>
                    </select>
                </div>
                <div class="controls controls-row">
                      <select id="parent_grupo4" name="parent_grupo4" class="span2">
                        <option "">Parentesco</option>
                        <option value= "1">Padre</option>
                        <option value= "2">Padrastro</option>
                        <option value= "3">Madre</option>
                        <option value= "4">Madrastra</option>
                        <option value= "5">Hermano(a) o Hermanastro(a)</option>
                        <option value= "6">Hijo(a)</option>
                        <option value= "7">Cónyuge</option>
                        <option value= "8">Abuelo(a)</option>
                        <option value= "8">Tío(a)</option>
                        <option value= "9">Primo(a)</option>
                        <option value= "10">Sobrino(a)</option>
                        <option value= "11">Suegro(a)</option>
                        <option value= "12">Cuñado(a)</option>
                        <option value= "13">Otro</option>
                      </select>
                      <select id="prev_soc_grupo4" name="prev_soc_grupo4" class="span3">
                        <option "">Prev. Social</option>
                        <option value= "1">AFP</option>
                        <option value= "2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value= "3">CAPREDENA</option>
                        <option value= "4">DIPRECA</option>
                        <option value= "5">Otra previsión</option>
                        <option value= "6">Sin previsión</option>
                      </select>
                      <select class="span3" id="prev_sal_grupo4" name="prev_sal_grupo4">
                        <option "">Prev. Salud</option>
                        <option value= "1">FONASA</option>
                        <option value= "2">ISAPRE</option>
                        <option value= "3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value= "4">Otros seguros de salud</option>
                        <option value= "5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo4" name="niv_est_grupo4" class="span3">
                        <option "">Nivel de estudios</option>
                        <option value= "1">Sin estudios</option>
                        <option value= "2">Enseñanza Básica Incompleta</option>
                        <option value= "3">Enseñanza Básica Completa</option>
                        <option value= "4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value= "5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value= "6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value= "7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value= "8">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo4" name="act_grupo4" class="span10">
                          <option "">Actividad</option>
                          <option value= "1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value= "2">Trabajador y/o Profesional Independiente</option>
                          <option value= "3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value= "4">Sostenedor de Establecimiento Educacional</option>
                          <option value= "5">Transportista de carga y pasajeros</option>
                          <option value= "6">Empresario Agrícola</option>
                          <option value= "7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value= "8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value= "9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value= "10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value= "11">Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "13"> de casa, sin actividad remunerada</option>
                          <option value= "14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value= "15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value= "16">Recién nacido</option>
                          <option value= "17">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo4" name="sueldos_grupo4" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo4" name="hono_grupo4" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo4" name="retiro_grupo4" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo4" name="pen_grupo4" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo4" name="act_in_grupo4" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo4" name="otros_grupo4" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                      <a href="#5" onclick="ActivarCampo4();">Agregar Integrante</a>
                    </p>
                    <hr>

              </div>
              <div id="addinput4" style="display:none;">
                  <p>
                    <h6><a id="5">5</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo5" name="nombre_grupo5" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo5" name="ap_pat_grupo5" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo5" name="ap_mat_grupo5" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo5" name="rut_grupo5" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo5" name="edad_grupo5" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo5" name="ecivil_grupo5" class="span2">
                        <option "">Estado Civil</option>
                        <option value= "1">Soltero/a</option>
                        <option value= "2">Casado/a</option>
                        <option value= "3">Separado/a legalmente</option>
                        <option value= "4">Separado/a de hecho</option>
                        <option value= "5">Divorciado/a</option>
                        <option value= "6">Viudo/a</option>
                        <option value= "7">Conviviente</option>
                    </select>
                </div>
                <div id="parent_grupo5" name="parent_grupo5" class="controls controls-row">
                      <select class="span2">
                        <option "">Parentesco</option>
                        <option value= "1">Padre</option>
                        <option value= "2">Padrastro</option>
                        <option value= "3">Madre</option>
                        <option value= "4">Madrastra</option>
                        <option value= "5">Hermano(a) o Hermanastro(a)</option>
                        <option value= "6">Hijo(a)</option>
                        <option value= "7">Cónyuge</option>
                        <option value= "8">Abuelo(a)</option>
                        <option value= "9">Tío(a)</option>
                        <option value= "10">Primo(a)</option>
                        <option value= "11">Sobrino(a)</option>
                        <option value= "12">Suegro(a)</option>
                        <option value= "13">Cuñado(a)</option>
                        <option value= "14">Otro</option>
                      </select>
                      <select id="prev_soc_grupo5" name="prev_soc_grupo5" class="span3">
                        <option "">Prev. Social</option>
                        <option value= "1">AFP</option>
                        <option value= "2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value= "3">CAPREDENA</option>
                        <option value= "4">DIPRECA</option>
                        <option value= "5">Otra previsión</option>
                        <option value= "6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo5" name="prev_sal_grupo5" class="span3">
                        <option "">Prev. Salud</option>
                        <option value= "1">FONASA</option>
                        <option value= "2">ISAPRE</option>
                        <option value= "3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value= "4">Otros seguros de salud</option>
                        <option value= "5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo5" name="niv_est_grupo5" class="span3">
                        <option "">Nivel de estudios</option>
                        <option value= "1">Sin estudios</option>
                        <option value= "2">Enseñanza Básica Incompleta</option>
                        <option value= "3">Enseñanza Básica Completa</option>
                        <option value= "4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value= "5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value= "6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value= "7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value= "8">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo5" name="act_grupo5" class="span10">
                          <option "">Actividad</option>
                          <option value= "1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value= "2">Trabajador y/o Profesional Independiente</option>
                          <option value= "3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value= "4">Sostenedor de Establecimiento Educacional</option>
                          <option value= "5">Transportista de carga y pasajeros</option>
                          <option value= "6">Empresario Agrícola</option>
                          <option value= "7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value= "8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value= "9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value= "10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value= "11">Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "13">Dueña de casa, sin actividad remunerada</option>
                          <option value= "14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value= "15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value= "16">Recién nacido</option>
                          <option value= "17">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo5" name="sueldos_grupo5" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo5" name="hono_grupo5" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo5" name="retiro_grupo5" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo5" name="pen_grupo5" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo5" name="act_in_grupo5" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo5" name="otros_grupo5" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                      <a href="#6" onclick="ActivarCampo5();">Agregar Integrante</a>
                    </p>
                    <hr>

              </div>
              <div id="addinput5" style="display:none;">
                  <p>
                    <h6><a id="6">6</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo6" name="nombre_grupo6" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo6" name="ap_pat_grupo6" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo6" name="ap_mat_grupo6" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo6" name="rut_grupo6" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo6" name="edad_grupo6" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo6" name="ecivil_grupo6" class="span2">
                        <option "">Estado Civil</option>
                        <option value= "1">Soltero/a</option>
                        <option value= "2">Casado/a</option>
                        <option value= "3">Separado/a legalmente</option>
                        <option value= "4">Separado/a de hecho</option>
                        <option value= "5">Divorciado/a</option>
                        <option value= "6">Viudo/a</option>
                        <option value= "7">Conviviente</option>
                    </select>
                </div>
                <div class="controls controls-row">
                      <select id="parent_grupo6" name="parent_grupo6" class="span2">
                        <option "">Parentesco</option>
                        <option value= "1">Padre</option>
                        <option value= "2">Padrastro</option>
                        <option value= "3">Madre</option>
                        <option value= "4">Madrastra</option>
                        <option value= "5">Hermano(a) o Hermanastro(a)</option>
                        <option value= "6">Hijo(a)</option>
                        <option value= "7">Cónyuge</option>
                        <option value= "8">Abuelo(a)</option>
                        <option value= "9">Tío(a)</option>
                        <option value= "10">Primo(a)</option>
                        <option value= "11">Sobrino(a)</option>
                        <option value= "12">Suegro(a)</option>
                        <option value= "13">Cuñado(a)</option>
                        <option value= "14">Otro</option>
                      </select>
                      <select  id="prev_soc_grupo6" name="prev_soc_grupo6" class="span3">
                        <option "">Prev. Social</option>
                        <option value= "1">AFP</option>
                        <option value= "2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value= "3">CAPREDENA</option>
                        <option value= "4">DIPRECA</option>
                        <option value= "5">Otra previsión</option>
                        <option value= "6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo6" name="prev_sal_grupo6" class="span3">
                        <option "">Prev. Salud</option>
                        <option value= "1">FONASA</option>
                        <option value= "2">ISAPRE</option>
                        <option value= "3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value= "4">Otros seguros de salud</option>
                        <option value= "5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo6" name="niv_est_grupo6" class="span3">
                        <option "">Nivel de estudios</option>
                        <option value= "1">Sin estudios</option>
                        <option value= "2">Enseñanza Básica Incompleta</option>
                        <option value= "3">Enseñanza Básica Completa</option>
                        <option value= "4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value= "5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value= "7">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value= "8">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value= "9">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="nombre_grupo6" name="est_grupo6" class="span10">
                          <option "">Actividad</option>
                          <option value= "1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value= "2">Trabajador y/o Profesional Independiente</option>
                          <option value= "3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value= "4">Sostenedor de Establecimiento Educacional</option>
                          <option value= "5">Transportista de carga y pasajeros</option>
                          <option value= "6">Empresario Agrícola</option>
                          <option value= "7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value= "8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value= "9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value= "10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value= "11"> de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "13">Dueña de casa, sin actividad remunerada</option>
                          <option value= "14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value= "15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value= "16">Recién nacido</option>
                          <option value= "17">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo6" name="sueldos_grupo6" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo6" name="hono_grupo6" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo6" name="retiro_grupo6" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo6" name="pen_grupo6" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo6" name="act_in_grupo6" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo6" name="otros_grupo6" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                      <a href="#7" onclick="ActivarCampo6();">Agregar Integrante</a>
                    </p>
                    <hr>
              </div>
              <div id="addinput6" style="display:none;">
                  <p>
                    <h6><a id="7">7</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo7" name="nombre_grupo7" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo7" name="ap_pat_grupo7" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo7" name="ap_mat_grupo7" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo7" name="rut_grupo7" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo7" name="edad_grupo7" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo7" name="ecivil_grupo7" class="span2">
                        <option "">Estado Civil</option>
                        <option value= "1">Soltero/a</option>
                        <option value= "2">Casado/a</option>
                        <option value= "3">Separado/a legalmente</option>
                        <option value= "4">Separado/a de hecho</option>
                        <option value= "5">Divorciado/a</option>
                        <option value= "6">Viudo/a</option>
                        <option value= "7">Conviviente</option>
                    </select>
                </div>
                <div class="controls controls-row">
                      <select id="parent_grupo7" name="parent_grupo7" class="span2">
                        <option "">Parentesco</option>
                        <option value= "1">Padre</option>
                        <option value= "2">Padrastro</option>
                        <option value= "3">Madre</option>
                        <option value= "4">Madrastra</option>
                        <option value= "5">Hermano(a) o Hermanastro(a)</option>
                        <option value= "6">Hijo(a)</option>
                        <option value= "7">Cónyuge</option>
                        <option value= "8">Abuelo(a)</option>
                        <option value= "9">Tío(a)</option>
                        <option value= "10">Primo(a)</option>
                        <option value= "11">Sobrino(a)</option>
                        <option value= "12">Suegro(a)</option>
                        <option value= "13">Cuñado(a)</option>
                        <option value= "14">Otro</option>
                      </select>
                      <select id="prev_soc_grupo7" name="prev_soc_grupo7" class="span3">
                        <option "">Prev. Social</option>
                        <option value= "1">AFP</option>
                        <option value= "2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value= "3">CAPREDENA</option>
                        <option value= "4">DIPRECA</option>
                        <option value= "5">Otra previsión</option>
                        <option value= "6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo7" name="prev_sal_grupo7" class="span3">
                        <option "">Prev. Salud</option>
                        <option value= "1">FONASA</option>
                        <option value= "2">ISAPRE</option>
                        <option value= "3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value= "4">Otros seguros de salud</option>
                        <option value= "5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo7" name="niv_est_grupo7" class="span3">
                        <option "">Nivel de estudios</option>
                        <option value= "1">Sin estudios</option>
                        <option value= "2">Enseñanza Básica Incompleta</option>
                        <option value= "3">Enseñanza Básica Completa</option>
                        <option value= "4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value= "5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value= "6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value= "7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value= "8">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo7" name="act_grupo7" class="span10">
                          <option "">Actividad</option>
                          <option value= "1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value= "2">Trabajador y/o Profesional Independiente</option>
                          <option value= "3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value= "4">Sostenedor de Establecimiento Educacional</option>
                          <option value= "5">Transportista de carga y pasajeros</option>
                          <option value= "6">Empresario Agrícola</option>
                          <option value= "7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value= "8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value= "9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value= "10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value= "11">Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "13">Dueña de casa, sin actividad remunerada</option>
                          <option value= "14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value= "15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value= "16">Recién nacido</option>
                          <option value= "17">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo7" name="sueldos_grupo7" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo7" name="hono_grupo7" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo7" name="retiro_grupo7" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo7" name="pen_grupo7" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo7" name="act_in_grupo7" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo7" name="otros_grupo7" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                      <a href="#8" onclick="ActivarCampo7();">Agregar Integrante</a>
                    </p>
                    <hr>
              </div>
              <div id="addinput7" style="display:none;">
                  <p>
                    <h6><a id="8">8</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo8" name="nombre_grupo8" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo8" name="ap_pat_grupo8" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo8" name="ap_mat_grupo8" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo8" name="rut_grupo8" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo8" name="edad_grupo8" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo8" name="ecivil_grupo8" class="span2">
                        <option "">Estado Civil</option>
                        <option value= "1">Soltero/a</option>
                        <option value= "2">Casado/a</option>
                        <option value= "3">Separado/a legalmente</option>
                        <option value= "4">Separado/a de hecho</option>
                        <option value= "5">Divorciado/a</option>
                        <option value= "6">Viudo/a</option>
                        <option value= "7">Conviviente</option>
                    </select>
                </div>
                <div id="parent_grupo8" name="parent_grupo8" class="controls controls-row">
                      <select class="span2">
                        <option "">Parentesco</option>
                        <option value= "1">Padre</option>
                        <option value= "2">Padrastro</option>
                        <option value= "3">Madre</option>
                        <option value= "4">Madrastra</option>
                        <option value= "5">Hermano(a) o Hermanastro(a)</option>
                        <option value= "6">Hijo(a)</option>
                        <option value= "7">Cónyuge</option>
                        <option value= "8">Abuelo(a)</option>
                        <option value= "9">Tío(a)</option>
                        <option value= "10">Primo(a)</option>
                        <option value= "11">Sobrino(a)</option>
                        <option value= "12">Suegro(a)</option>
                        <option value= "13">Cuñado(a)</option>
                        <option value= "14">Otro</option>
                      </select>
                      <select id="prev_soc_grupo8" name="prev_soc_grupo8" class="span3">
                        <option "">Prev. Social</option>
                        <option value= "1">AFP</option>
                        <option value= "2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value= "3">CAPREDENA</option>
                        <option value= "4">DIPRECA</option>
                        <option value= "5">Otra previsión</option>
                        <option value= "6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo8" name="prev_sal_grupo8" class="span3">
                        <option "">Prev. Salud</option>
                        <option value= "1">FONASA</option>
                        <option value= "2">ISAPRE</option>
                        <option value= "3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value= "4">Otros seguros de salud</option>
                        <option value= "5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo8" name="niv_est_grupo8" class="span3">
                        <option "">Nivel de estudios</option>
                        <option value= "1">Sin estudios</option>
                        <option value= "2">Enseñanza Básica Incompleta</option>
                        <option value= "3">Enseñanza Básica Completa</option>
                        <option value= "4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value= "5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value= "6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value= "7"nseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo8" name="act_grupo8" class="span10">
                          <option "">Actividad</option>
                          <option value= "1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value= "2">Transportista de carga y pasajeros</option>
                          <option value= "3">Empresario Agrícola</option>
                          <option value= "4">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value= "5">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value= "6">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value= "7">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value= "8">Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "9">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "10">Dueña de casa, sin actividad remunerada</option>
                          <option value= "11">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value= "12">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value= "13">Recién nacido</option>
                          <option value= "14">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo8" name="sueldos_grupo8" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo8" name="hono_grupo8" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo8" name="retiro_grupo8" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo8" name="pen_grupo8" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo8" name="act_in_grupo8" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo8" name="otros_grupo8" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                      <a href="#9" onclick="ActivarCampo8();">Agregar Integrante</a>
                    </p>
                    <hr>
              </div>
              <div id="addinput8" style="display:none;">
                  <p>
                    <h6><a id="9">9</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo9" name="nombre_grupo9" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo9" name="ap_pat_grupo9" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo9" name="ap_mat_grupo9" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo9" name="rut_grupo9" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo9" name="edad_grupo9" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo9" name="ecivil_grupo9" class="span2">
                        <option "">Estado Civil</option>
                        <option value= "1">Soltero/a</option>
                        <option value= "2">Casado/a</option>
                        <option value= "3">Separado/a legalmente</option>
                        <option value= "4">Separado/a de hecho</option>
                        <option value= "5">Divorciado/a</option>
                        <option value= "6">Viudo/a</option>
                        <option value= "7">Conviviente</option>
                    </select>
                </div>
                <div class="controls controls-row">
                      <select  id="parent_grupo9" name="parent_grupo9"class="span2">
                        <option "">Parentesco</option>
                        <option value= "1">Padre</option>
                        <option value= "2">Padrastro</option>
                        <option value= "3">Madre</option>
                        <option value= "4">Madrastra</option>
                        <option value= "5">Hermano(a) o Hermanastro(a)</option>
                        <option value= "6">Hijo(a)</option>
                        <option value= "7">Cónyuge</option>
                        <option value= "8">Abuelo(a)</option>
                        <option value= "9">Tío(a)</option>
                        <option value= "10">Primo(a)</option>
                        <option value= "11">Sobrino(a)</option>
                        <option value= "12">Suegro(a)</option>
                        <option value= "13">Cuñado(a)</option>
                        <option value= "14">Otro</option>
                      </select>
                      <select id="prev_soc_grupo9" name="prev_soc_grupo9" class="span3">
                        <option "">Prev. Social</option>
                        <option value= "1">AFP</option>
                        <option value= "2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value= "3">CAPREDENA</option>
                        <option value= "4">DIPRECA</option>
                        <option value= "5">Otra previsión</option>
                        <option value= "6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo9" name="prev_sal_grupo9" class="span3">
                        <option "">Prev. Salud</option>
                        <option value= "1">FONASA</option>
                        <option value= "2">ISAPRE</option>
                        <option value= "3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value= "4">Otros seguros de salud</option>
                        <option value= "5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo9" name="niv_est_grupo9" class="span3">
                        <option "">Nivel de estudios</option>
                        <option value= "1">Sin estudios</option>
                        <option value= "2">Enseñanza Básica Incompleta</option>
                        <option value= "3">Enseñanza Básica Completa</option>
                        <option value= "4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value= "5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value= "6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value= "7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value= "8">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo9" name="act_grupo9" class="span10">
                          <option "">Actividad</option>
                          <option value= "1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value= "2">Trabajador y/o Profesional Independiente</option>
                          <option value= "3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value= "4">Sostenedor de Establecimiento Educacional</option>
                          <option value= "5">Transportista de carga y pasajeros</option>
                          <option value= "6">Empresario Agrícola</option>
                          <option value= "7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value= "8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value= "9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value= "10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value= "11" >Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "13">Dueña de casa, sin actividad remunerada</option>
                          <option value= "14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value= "15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value= "16">Recién nacido</option>
                          <option value= "17">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo9" name="sueldos_grupo9" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo9" name="hono_grupo9" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo9" name="retiro_grupo9" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo9" name="pen_grupo9" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo9" name="act_in_grupo9" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo9" name="otros_grupo9" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                      <a href="#10" onclick="ActivarCampo9();">Agregar Integrante</a>
                    </p>
                    <hr>
              </div>
            <div id="addinput9" style="display:none;">
                  <p>
                    <h6><a id="10">10</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo10" name="nombre_grupo10" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo10" name="ap_pat_grupo10" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo10" name="ap_mat_grupo10" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo10" name="rut_grupo10" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo10" name="edad_grupo10" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo10" name="ecivil_grupo10" class="span2">
                        <option "">Estado Civil</option>
                        <option value "1">Soltero/a</option>
                        <option value "2">Casado/a</option>
                        <option value "3">Separado/a legalmente</option>
                        <option value "4">Separado/a de hecho</option>
                        <option value "5">Divorciado/a</option>
                        <option value "6">Viudo/a</option>
                        <option value "7">Conviviente</option>
                    </select>
                </div>
                <div class="controls controls-row">
                      <select  id="parent_grupo10" name="parent_grupo10"class="span2">
                        <option "">Parentesco</option>
                        <option value= "1">Padre</option>
                        <option value= "2">Padrastro</option>
                        <option value= "3">Madre</option>
                        <option value= "4">Madrastra</option>
                        <option value= "5">Hermano(a) o Hermanastro(a)</option>
                        <option value= "6">Hijo(a)</option>
                        <option value= "7">Cónyuge</option>
                        <option value= "8">Abuelo(a)</option>
                        <option value= "9">Tío(a)</option>
                        <option value= "10">Primo(a)</option>
                        <option value= "11">Sobrino(a)</option>
                        <option value= "12">Suegro(a)</option>
                        <option value= "13">Cuñado(a)</option>
                        <option value= "14">Otro</option>
                      </select>
                      <select id="prev_soc_grupo10" name="prev_soc_grupo10" class="span3">
                        <option "">Prev. Social</option>
                        <option value= "1">AFP</option>
                        <option value= "2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value= "3">CAPREDENA</option>
                        <option value= "4">DIPRECA</option>
                        <option value= "5">Otra previsión</option>
                        <option value= "6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo10" name="prev_sal_grupo10" class="span3">
                        <option "">Prev. Salud</option>
                        <option value= "1">FONASA</option>
                        <option value= "2">ISAPRE</option>
                        <option value= "3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value= "4">Otros seguros de salud</option>
                        <option value= "5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo10" name="niv_est_grupo10" class="span3">
                        <option "">Nivel de estudios</option>
                        <option value= "1">Sin estudios</option>
                        <option value= "2">Enseñanza Básica Incompleta</option>
                        <option value= "3">Enseñanza Básica Completa</option>
                        <option value= "4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value= "5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value= "6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value= "7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value= "8">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo10" name="act_grupo10" class="span10">
                          <option "">Actividad</option>
                          <option value= "1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value= "2">Trabajador y/o Profesional Independiente</option>
                          <option value= "3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value= "4">Sostenedor de Establecimiento Educacional</option>
                          <option value= "5">Transportista de carga y pasajeros</option>
                          <option value= "6">Empresario Agrícola</option>
                          <option value= "7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value= "8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value= "9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value= "10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value= "11" >Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "13">Dueña de casa, sin actividad remunerada</option>
                          <option value= "14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value= "15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value= "16">Recién nacido</option>
                          <option value= "17">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo10" name="sueldos_grupo10" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo10" name="hono_grupo10" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo10" name="retiro_grupo10" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo10" name="pen_grupo10" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo10" name="act_in_grupo10" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo10" name="otros_grupo10" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                    <a href="#11" onclick="ActivarCampo10();">Agregar Integrante</a>
                    </p>
                    <hr>
              </div>
          <div id="addinput10" style="display:none;">
                  <p>
                    <h6><a id="11">11</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo11" name="nombre_grupo11" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo11" name="ap_pat_grupo11" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo11" name="ap_mat_grupo11" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo11" name="rut_grupo11" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo11" name="edad_grupo11" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo11" name="ecivil_grupo9" class="span2">
                        <option "">Estado Civil</option>
                        <option value= "1">Soltero/a</option>
                        <option value= "2">Casado/a</option>
                        <option value= "3">Separado/a legalmente</option>
                        <option value= "4">Separado/a de hecho</option>
                        <option value= "5">Divorciado/a</option>
                        <option value= "6">Viudo/a</option>
                        <option value= "7">Conviviente</option>
                    </select>
                </div>
                <div class="controls controls-row">
                      <select  id="parent_grupo11" name="parent_grupo11"class="span2">
                        <option "">Parentesco</option>
                        <option value= "1">Padre</option>
                        <option value= "2">Padrastro</option>
                        <option value= "3">Madre</option>
                        <option value= "4">Madrastra</option>
                        <option value= "5">Hermano(a) o Hermanastro(a)</option>
                        <option value= "6">Hijo(a)</option>
                        <option value= "7">Cónyuge</option>
                        <option value= "8">Abuelo(a)</option>
                        <option value= "9">Tío(a)</option>
                        <option value= "10">Primo(a)</option>
                        <option value= "11">Sobrino(a)</option>
                        <option value= "12">Suegro(a)</option>
                        <option value= "13">Cuñado(a)</option>
                        <option value= "14">Otro</option>
                      </select>
                      <select id="prev_soc_grupo11" name="prev_soc_grupo11" class="span3">
                        <option "">Prev. Social</option>
                        <option value= "1">AFP</option>
                        <option value= "2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value= "3">CAPREDENA</option>
                        <option value= "4">DIPRECA</option>
                        <option value= "5">Otra previsión</option>
                        <option value= "6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo11" name="prev_sal_grupo11" class="span3">
                        <option "">Prev. Salud</option>
                        <option value= "1">FONASA</option>
                        <option value= "2">ISAPRE</option>
                        <option value= "3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value= "4">Otros seguros de salud</option>
                        <option value= "5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo11" name="niv_est_grupo11" class="span3">
                        <option "">Nivel de estudios</option>
                        <option value= "1">Sin estudios</option>
                        <option value= "2">Enseñanza Básica Incompleta</option>
                        <option value= "3">Enseñanza Básica Completa</option>
                        <option value= "4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value= "5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value= "6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value= "7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value= "8">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo11" name="act_grupo11" class="span10">
                          <option "">Actividad</option>
                          <option value= "1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value= "2">Trabajador y/o Profesional Independiente</option>
                          <option value= "3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value= "4">Sostenedor de Establecimiento Educacional</option>
                          <option value= "5">Transportista de carga y pasajeros</option>
                          <option value= "6">Empresario Agrícola</option>
                          <option value= "7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value= "8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value= "9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value= "10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value= "11" >Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "13">Dueña de casa, sin actividad remunerada</option>
                          <option value= "14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value= "15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value= "16">Recién nacido</option>
                          <option value= "17">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo11" name="sueldos_grupo11" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo11" name="hono_grupo11" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo11" name="retiro_grupo11" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo11" name="pen_grupo11" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo11" name="act_in_grupo11" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo11" name="otros_grupo11" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                     <a href="#12" onclick="ActivarCampo11();">Agregar Integrante</a>
                    </p>
                    <hr>
              </div>
        <div id="addinput11" style="display:none;">
                  <p>
                    <h6><a id="12">12</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo12" name="nombre_grupo12" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo12" name="ap_pat_grupo12" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo12" name="ap_mat_grupo12" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo12" name="rut_grupo12" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo12" name="edad_grupo12" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo12" name="ecivil_grupo12" class="span2">
                        <option "">Estado Civil</option>
                        <option value= "1">Soltero/a</option>
                        <option value= "2">Casado/a</option>
                        <option value= "3">Separado/a legalmente</option>
                        <option value= "4">Separado/a de hecho</option>
                        <option value= "5">Divorciado/a</option>
                        <option value= "6">Viudo/a</option>
                        <option value= "7">Conviviente</option>
                    </select>
                </div>
                <div class="controls controls-row">
                      <select  id="parent_grupo12" name="parent_grupo12"class="span2">
                        <option "">Parentesco</option>
                        <option value= "1">Padre</option>
                        <option value= "2">Padrastro</option>
                        <option value= "3">Madre</option>
                        <option value= "4">Madrastra</option>
                        <option value= "5">Hermano(a) o Hermanastro(a)</option>
                        <option value= "6">Hijo(a)</option>
                        <option value= "7">Cónyuge</option>
                        <option value= "8">Abuelo(a)</option>
                        <option value= "9">Tío(a)</option>
                        <option value= "10">Primo(a)</option>
                        <option value= "11">Sobrino(a)</option>
                        <option value= "12">Suegro(a)</option>
                        <option value= "13">Cuñado(a)</option>
                        <option value= "14">Otro</option>
                      </select>
                      <select id="prev_soc_grupo12" name="prev_soc_grupo12" class="span3">
                        <option "">Prev. Social</option>
                        <option value= "1">AFP</option>
                        <option value= "2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value= "3">CAPREDENA</option>
                        <option value= "4">DIPRECA</option>
                        <option value= "5">Otra previsión</option>
                        <option value= "6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo12" name="prev_sal_grupo12" class="span3">
                        <option "">Prev. Salud</option>
                        <option value= "1">FONASA</option>
                        <option value= "2">ISAPRE</option>
                        <option value= "3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value= "4">Otros seguros de salud</option>
                        <option value= "5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo12" name="niv_est_grupo12" class="span3">
                        <option "">Nivel de estudios</option>
                        <option value= "1">Sin estudios</option>
                        <option value= "2">Enseñanza Básica Incompleta</option>
                        <option value= "3">Enseñanza Básica Completa</option>
                        <option value= "4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value= "5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value= "6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value= "7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value= "8">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo12" name="act_grupo12" class="span10">
                          <option "">Actividad</option>
                          <option value= "1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value= "2">Trabajador y/o Profesional Independiente</option>
                          <option value= "3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value= "4">Sostenedor de Establecimiento Educacional</option>
                          <option value= "5">Transportista de carga y pasajeros</option>
                          <option value= "6">Empresario Agrícola</option>
                          <option value= "7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value= "8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value= "9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value= "10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value= "11" >Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "13">Dueña de casa, sin actividad remunerada</option>
                          <option value= "14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value= "15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value= "16">Recién nacido</option>
                          <option value= "17">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo12" name="sueldos_grupo12" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo12" name="hono_grupo12" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo12" name="retiro_grupo12" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo12" name="pen_grupo12" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo12" name="act_in_grupo12" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo12" name="otros_grupo12" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                     <a href="#13" onclick="ActivarCampo12();">Agregar Integrante</a>
                    </p>
                    <hr>
              </div>
        <div id="addinput12" style="display:none;">
                  <p>
                    <h6><a id="13">13</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo13" name="nombre_grupo13" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo13" name="ap_pat_grupo13" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo13" name="ap_mat_grupo13" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo13" name="rut_grupo13" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo13" name="edad_grupo13" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo13" name="ecivil_grupo13" class="span2">
                        <option "">Estado Civil</option>
                        <option value= "1">Soltero/a</option>
                        <option value= "2">Casado/a</option>
                        <option value= "3">Separado/a legalmente</option>
                        <option value= "4">Separado/a de hecho</option>
                        <option value= "5">Divorciado/a</option>
                        <option value= "6">Viudo/a</option>
                        <option value= "7">Conviviente</option>
                    </select>
                </div>
                <div class="controls controls-row">
                      <select  id="parent_grupo13" name="parent_grupo13"class="span2">
                        <option "">Parentesco</option>
                        <option value= "1">Padre</option>
                        <option value= "2">Padrastro</option>
                        <option value= "3">Madre</option>
                        <option value= "4">Madrastra</option>
                        <option value= "5">Hermano(a) o Hermanastro(a)</option>
                        <option value= "6">Hijo(a)</option>
                        <option value= "7">Cónyuge</option>
                        <option value= "8">Abuelo(a)</option>
                        <option value= "9">Tío(a)</option>
                        <option value= "10">Primo(a)</option>
                        <option value= "11">Sobrino(a)</option>
                        <option value= "12">Suegro(a)</option>
                        <option value= "13">Cuñado(a)</option>
                        <option value= "14">Otro</option>
                      </select>
                      <select id="prev_soc_grupo13" name="prev_soc_grupo13" class="span3">
                        <option "">Prev. Social</option>
                        <option value= "1">AFP</option>
                        <option value= "2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value= "3">CAPREDENA</option>
                        <option value= "4">DIPRECA</option>
                        <option value= "5">Otra previsión</option>
                        <option value= "6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo13" name="prev_sal_grupo13" class="span3">
                        <option "">Prev. Salud</option>
                        <option value= "1">FONASA</option>
                        <option value= "2">ISAPRE</option>
                        <option value= "3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value= "4">Otros seguros de salud</option>
                        <option value= "5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo13" name="niv_est_grupo13" class="span3">
                        <option "">Nivel de estudios</option>
                        <option value= "1">Sin estudios</option>
                        <option value= "2">Enseñanza Básica Incompleta</option>
                        <option value= "3">Enseñanza Básica Completa</option>
                        <option value= "4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value= "5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value= "6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value= "7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value= "8">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo13" name="act_grupo13" class="span10">
                          <option "">Actividad</option>
                          <option value= "1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value= "2">Trabajador y/o Profesional Independiente</option>
                          <option value= "3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value= "4">Sostenedor de Establecimiento Educacional</option>
                          <option value= "5">Transportista de carga y pasajeros</option>
                          <option value= "6">Empresario Agrícola</option>
                          <option value= "7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value= "8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value= "9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value= "10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value= "11" >Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "13">Dueña de casa, sin actividad remunerada</option>
                          <option value= "14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value= "15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value= "16">Recién nacido</option>
                          <option value= "17">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo13" name="sueldos_grupo13" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo13" name="hono_grupo13" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo13" name="retiro_grupo13" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo13" name="pen_grupo13" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo13" name="act_in_grupo13" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo13" name="otros_grupo13" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                     <a href="#14" onclick="ActivarCampo13();">Agregar Integrante</a>
                    </p>
                    <hr>
              </div>
        <div id="addinput13" style="display:none;">
                  <p>
                    <h6><a id="14">14</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo14" name="nombre_grupo14" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo14" name="ap_pat_grupo14" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo14" name="ap_mat_grupo14" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo14" name="rut_grupo14" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo14" name="edad_grupo14" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo14" name="ecivil_grupo14" class="span2">
                        <option "">Estado Civil</option>
                        <option value= "1">Soltero/a</option>
                        <option value= "2">Casado/a</option>
                        <option value= "3">Separado/a legalmente</option>
                        <option value= "4">Separado/a de hecho</option>
                        <option value= "5">Divorciado/a</option>
                        <option value= "6">Viudo/a</option>
                        <option value= "7">Conviviente</option>
                    </select>
                </div>
                <div class="controls controls-row">
                      <select  id="parent_grupo14" name="parent_grupo14"class="span2">
                        <option "">Parentesco</option>
                        <option value= "1">Padre</option>
                        <option value= "2">Padrastro</option>
                        <option value= "3">Madre</option>
                        <option value= "4">Madrastra</option>
                        <option value= "5">Hermano(a) o Hermanastro(a)</option>
                        <option value= "6">Hijo(a)</option>
                        <option value= "7">Cónyuge</option>
                        <option value= "8">Abuelo(a)</option>
                        <option value= "9">Tío(a)</option>
                        <option value= "10">Primo(a)</option>
                        <option value= "11">Sobrino(a)</option>
                        <option value= "12">Suegro(a)</option>
                        <option value= "13">Cuñado(a)</option>
                        <option value= "14">Otro</option>
                      </select>
                      <select id="prev_soc_grupo14" name="prev_soc_grupo14" class="span3">
                        <option "">Prev. Social</option>
                        <option value= "1">AFP</option>
                        <option value= "2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value= "3">CAPREDENA</option>
                        <option value= "4">DIPRECA</option>
                        <option value= "5">Otra previsión</option>
                        <option value= "6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo14" name="prev_sal_grupo14" class="span3">
                        <option "">Prev. Salud</option>
                        <option value= "1">FONASA</option>
                        <option value= "2">ISAPRE</option>
                        <option value= "3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value= "4">Otros seguros de salud</option>
                        <option value= "5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo14" name="niv_est_grupo14" class="span3">
                        <option "">Nivel de estudios</option>
                        <option value= "1">Sin estudios</option>
                        <option value= "2">Enseñanza Básica Incompleta</option>
                        <option value= "3">Enseñanza Básica Completa</option>
                        <option value= "4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value= "5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value= "6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value= "7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value= "8">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo14" name="act_grupo14" class="span10">
                          <option "">Actividad</option>
                          <option value= "1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value= "2">Trabajador y/o Profesional Independiente</option>
                          <option value= "3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value= "4">Sostenedor de Establecimiento Educacional</option>
                          <option value= "5">Transportista de carga y pasajeros</option>
                          <option value= "6">Empresario Agrícola</option>
                          <option value= "7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value= "8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value= "9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value= "10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value= "11" >Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "13">Dueña de casa, sin actividad remunerada</option>
                          <option value= "14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value= "15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value= "16">Recién nacido</option>
                          <option value= "17">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo14" name="sueldos_grupo14" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo14" name="hono_grupo14" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo14" name="retiro_grupo14" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo14" name="pen_grupo14" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo14" name="act_in_grupo14" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo14" name="otros_grupo14" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                     <a href="#15" onclick="ActivarCampo14();">Agregar Integrante</a>
                    </p>
                    <hr>
              </div>
                <div id="addinput14" style="display:none;">
                  <p>
                    <h6><a id="15">15</a></h6>
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo15" name="nombre_grupo15" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo15" name="ap_pat_grupo15" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo15" name="ap_mat_grupo15" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo15" name="rut_grupo15" class="span2" placeholder="Rut" onblur="onRutBlur(this);">
                  <input type="text" id="edad_grupo15" name="edad_grupo15" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo14" name="ecivil_grupo14" class="span2">
                        <option "">Estado Civil</option>
                        <option value= "1">Soltero/a</option>
                        <option value= "2">Casado/a</option>
                        <option value= "3">Separado/a legalmente</option>
                        <option value= "4">Separado/a de hecho</option>
                        <option value= "5">Divorciado/a</option>
                        <option value= "6">Viudo/a</option>
                        <option value= "7">Conviviente</option>
                    </select>
                </div>
                <div class="controls controls-row">
                      <select  id="parent_grupo15" name="parent_grupo15"class="span2">
                        <option "">Parentesco</option>
                        <option value= "1">Padre</option>
                        <option value= "2">Padrastro</option>
                        <option value= "3">Madre</option>
                        <option value= "4">Madrastra</option>
                        <option value= "5">Hermano(a) o Hermanastro(a)</option>
                        <option value= "6">Hijo(a)</option>
                        <option value= "7">Cónyuge</option>
                        <option value= "8">Abuelo(a)</option>
                        <option value= "9">Tío(a)</option>
                        <option value= "10">Primo(a)</option>
                        <option value= "11">Sobrino(a)</option>
                        <option value= "12">Suegro(a)</option>
                        <option value= "13">Cuñado(a)</option>
                        <option value= "14">Otro</option>
                      </select>
                      <select id="prev_soc_grupo15" name="prev_soc_grupo15" class="span3">
                        <option "">Prev. Social</option>
                        <option value= "1">AFP</option>
                        <option value= "2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value= "3">CAPREDENA</option>
                        <option value= "4">DIPRECA</option>
                        <option value= "5">Otra previsión</option>
                        <option value= "6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo15" name="prev_sal_grupo15" class="span3">
                        <option "">Prev. Salud</option>
                        <option value= "1">FONASA</option>
                        <option value= "2">ISAPRE</option>
                        <option value= "3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value= "4">Otros seguros de salud</option>
                        <option value= "5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo15" name="niv_est_grupo15" class="span3">
                        <option "">Nivel de estudios</option>
                        <option value= "1">Sin estudios</option>
                        <option value= "2">Enseñanza Básica Incompleta</option>
                        <option value= "3">Enseñanza Básica Completa</option>
                        <option value= "4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value= "5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value= "6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value= "7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value= "8">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo15" name="act_grupo15" class="span10">
                          <option "">Actividad</option>
                          <option value= "1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value= "2">Trabajador y/o Profesional Independiente</option>
                          <option value= "3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value= "4">Sostenedor de Establecimiento Educacional</option>
                          <option value= "5">Transportista de carga y pasajeros</option>
                          <option value= "6">Empresario Agrícola</option>
                          <option value= "7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value= "8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value= "9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value= "10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value= "11" >Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value= "13">Dueña de casa, sin actividad remunerada</option>
                          <option value= "14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value= "15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value= "16">Recién nacido</option>
                          <option value= "17">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo15" name="sueldos_grupo15" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo15" name="hono_grupo15" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo15" name="retiro_grupo15" class="span2" placeholder="Aporte de Hermanos y Otros">
                      <input type="text" id="pen_grupo15" name="pen_grupo15" class="span2" placeholder="Pensión de alimentos">
                      <input type="text" id="act_in_grupo15" name="act_in_grupo15" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo15" name="otros_grupo15" class="span2" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>

                    <hr>
              </div>
                    <div class="controls controls-row">
                      <h6>Total número de integrantes del grupo familiar (incluído el Estudiantes)</h6>
                      <input type="text" id="total" name="total" required class="span1" placeholder="Total">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Formulario</button>
                    <button type="reset" class="btn">Limpiar Datos</button>
              </div>

        </div>
  </form>
  <?php endif; ?>
  <?php if($dir != ''): ?>
        <div class="controls controls-row">
          <legend>Antecedentes del estudiante</legend>
            <?php
            $consulta = $con->query("SELECT alumnos.*,carreras.* FROM alumnos, carreras WHERE rut_alum ='$rut' AND cod_carrera_alum = codigo_car");
            $row = $consulta->fetch_array(MYSQLI_ASSOC);
            $id_alum=$row['id_alum'];
            $nombre=$row['nombres_alum'];
            $ap_pat_alum=$row['ap_pat_alum'];
            $ap_mat_alum=$row['ap_mat_alum'];
            $rut_alum=$row['rut_alum'];
            $fnac=$row['fecha_nac'];
            $ingreso=$row['anio_ingreso_alum'];
            $carrera=$row['nombre_car'];
            $cod_car=$row['cod_carrera_alum'];
            $comuna=$row['comuna_alum'];
            $ciudad=$row['ciudad_alum'];
            $fono=$row['telefono_alum'];
            $cel=$row['celular_alum'];
            $correo=$row['correo_alum'];
            $nac=$row['nac_alum'];
            $discap=$row['discap_alum'];
            $pueblo=$row['pueb_orig_alum'];
            $postula=$row['postula_beca_alum'];
            $otra=$row['otras_becas_alum'];
            ?>
           <div class="alert"><h6>Tu formulario ya ha sido ingresado a nuestra base de datos, si necesitas hacer alguna modificación, por favor comunícate con la asistente social de la carrera en Bienestar Estudiantil</h6></div>
           <p>
          <input type="text" disabled class="span3" value="<?php echo utf8_encode($nombre); ?>">
          <input type="text" disabled class="span2" value="<?php echo utf8_encode($ap_pat_alum); ?>">
          <input type="text" disabled class="span2" value="<?php echo utf8_encode($ap_mat_alum); ?>">
          <input type="text" disabled class="span2" value="<?php echo $rut; ?>">
        </div>
        <div class="controls controls-row">
          <input class="span5" disabled type="text" name="rut_alum" value="<?php echo $carrera; ?>">
          <input class='span2' disabled type='text' value="Código: <?php echo $cod_car; ?>">
          <input type="text" disabled id="anio_ingreso" name="anio_ingreso" class="span2" value="Año ingreso: <?php echo $ingreso; ?>">
        </div>
        <div class="controls controls-row">
            <input type="text" disabled id="dir_alum" name="dir_alum" class="span3" value="<?php echo $dir; ?>">
            <input type="text" disabled id="comuna" name="comuna" class="span2" value="<?php echo $comuna; ?>">
            <input type="text" disabled id="telefono_alum" name="telefono_alum" class="span2" value="<?php echo $fono; ?>">
            <input type="text" disabled id="cel_alum" name="cel_alum" class="span2" value="<?php echo $cel; ?>">
          </div>
          <div class="controls controls-row">
            <input type="email" disabled id="correo_alum" name="correo_alum"class="span3" value="<?php echo $correo; ?>">
            <input type="text" disabled id="fnac_alum" name="fnac_alum" class="span3" value="<?php echo $fnac; ?>">
            <input type="text" disabled id="nac_alum" name="nac_alum" class="span3" value="<?php echo $nac; ?>">
          </div>
          <div class="controls controls-row">
          <h6> Si no pertenece a ningún pueblo originario escriba: No</h6>
            <input type="text" disabled id="porigin_alum" name="porigin_alum" class="span4" value="<?php echo $pueblo; ?>">
          </div>
          <div class="controls controls-row">
          <h6>¿Tiene algún tipo de discapacidad cognitiva, física o sensorial?, si la respuesta es Si indique cual, de lo contrario escriba: No</h6>
            <input type="text" disabled id="discapacidad_alum" name="discapacidad_alum" class="span4" value="<?php echo $discap; ?>">
          </div>
          <!--comento lo de los beneficios una vez lleno el form

          <div class="controls controls-row">
            <legend>Beneficios que posee el alumno</legend>
            <h6>Los tickets corresponden a su o sus beneficios</h6>
            <?php
              //Contruyo primero el listado de todas las becas
              /*$becas=$con->query("SELECT becasycreditos.* FROM becasycreditos");
                while($res = $becas->fetch_array(MYSQLI_ASSOC)){
                  $id_becas = $res['id_becas'];

                    //Consulto por cada una de las becas
                    $resultado2=$con->query("SELECT alumnos.*,beneficios.*
                    FROM alumnos, beneficios
                    WHERE rut_alum ='$rut' AND id_alum = id_alum_bene AND id_beca_bene = '$id_becas'");
                      $fila = $resultado2->fetch_array(MYSQLI_ASSOC);

                      if($fila['id_beca_bene']==""){//si no está le digo que me cree el checkbox con el nombre de la beca desabilitado y vacío
                      echo "<label class='checkbox span4'>
                        <input type='checkbox' name='becas[]' disabled >".utf8_encode($res['becas_nombre'])."</label>";
                      }
                      else{//si está le digo que me cree el checkbox con el nombre de la beca desabilitado y marcado
                        echo "<label class='checkbox span4'>
                        <input type='checkbox' name='becas[]'  disabled checked >".utf8_encode($res['becas_nombre'])."</label>";
                      }
                }*/
            ?>
                   <h6>Otras Becas</h6>
                   <input type="text" id="1" name="1" disabled value="<?php echo $otra; ?>">
                  <h6>Postulación a beca interna</h6>
                   <input type="text" disabled value="<?php echo $postula; ?>">
          </div>
          fin del comentqrio de los beneficios//-->
          <p>
        <div class="controls controls-row">
          <legend>Antecedentes del grupo familiar</legend>
          
          <p>
           <?php
              $resultado3=$con->query("SELECT alumnos.*,hogar.*,vivienda.*
              FROM alumnos, hogar, vivienda
              WHERE rut_alum ='$rut' AND id_alum = hogar_id_alum AND hogar_vivienda = id_vivienda");

              $fila1 = $resultado3->fetch_array(MYSQLI_ASSOC);

                $dirgrupo=$fila1['hogar_dir'];
                $comunagrupo=$fila1['hogar_comuna'];
                $ciudadgrupo=$fila1['hogar_ciudad'];
                $fonogrupo=$fila1['hogar_telefono'];
                $viv_tipo=$fila1['vivienda_tipo'];

            ?>
          <h6>Escriba su dirección completa.</h6>
          <input type="text" disabled class="span5" value="<?php echo $dirgrupo; ?>">
          <input type="text" disabled class="span2" value="<?php echo $comunagrupo; ?>">
          <input type="text" disabled class="span2" value="<?php echo $ciudadgrupo; ?>">
          <input type="text" disabled class="span2" value="<?php echo $fonogrupo; ?>">
        </div>
        <div class="controls controls-row">
          <h6>Tenencia de la Vivienda</h6>
          <input type="text" disabled class="span5" value="<?php echo $viv_tipo; ?>">
        </div>
        <p>
        <div class="controls controls-row">
          <!--
          <h5>Si sus padres no son integrantes del grupo familiar</h5>
          <p>
            <?php
            $resultado5=$con->query("SELECT estado_civil.*, actividad.*, alumnos.*,un_grupo_familiar.*
              FROM estado_civil, actividad, alumnos, un_grupo_familiar
              WHERE rut_alum ='$rut' AND id_alum = un_grupo_alum_id AND un_grupo_ecivil = id_estado_civil AND un_grupo_actividad = cod_actividad");
              while($fila3 = $resultado5->fetch_array(MYSQLI_ASSOC)){
              $parent = $fila3['un_grupo_parent'];
              $nom_actividad = $fila3['nom_actividad'];
              $un_grupo_rut = $fila3['un_grupo_rut'];
              $un_grupo_ap_pat = $fila3['un_grupo_ap_pat'];
              $un_grupo_ap_mat = $fila3['un_grupo_ap_mat'];
              $un_grupo_nombres = $fila3['un_grupo_nombres'];
              $un_grupo_direccion = $fila3['un_grupo_direccion'];
              $un_grupo_comuna = $fila3['un_grupo_comuna'];
              $un_grupo_ciudad = $fila3['un_grupo_ciudad'];
              $un_grupo_region = $fila3['un_grupo_region'];
              $estado_civil = $fila3['estado_civil_tipo']

            ?>
          <?php if($parent == 'Padre'): ?>
          <h6>Antecedentes del Padre</h6>
          <input type="hidden"  name="padre" value="Padre">
          <input type="text" disabled class="span2" value="<?php echo $un_grupo_rut; ?>">
          <input type="text" disabled class="span2" value="<?php echo $un_grupo_nombres; ?>">
          <input type="text" disabled class="span2" value="<?php echo $un_grupo_ap_pat; ?>">
          <input type="text" disabled class="span2" value="<?php echo $un_grupo_ap_mat; ?>">
          <input type="text" disabled class="span2" value="<?php echo $estado_civil; ?>">
         </div>
              <div class="controls controls-row">
                <input type="text" disabled class="span10" value="<?php echo utf8_encode($nom_actividad); ?>">
              </div>
              <div class="controls controls-row">
                  <input type="text" disabled class="span3" value="<?php echo $un_grupo_direccion; ?>">
                  <input type="text" disabled class="span2" value="<?php echo $un_grupo_comuna; ?>">
                  <input type="text" disabled class="span2" value="<?php echo $un_grupo_ciudad; ?>">
                  <input type="text" disabled class="span2" value="<?php echo $un_grupo_region; ?>">
              </div>
            <? endif; ?>
            <?php if($parent == 'Madre'): ?>
              <div class="controls controls-row">
                <p>
                <h6>Antecedentes de la Madre</h6>
                <input type="hidden" name="madre" value="Madre">
                <input type="text" disabled class="span2" value="<?php echo $un_grupo_rut; ?>">
                <input type="text" disabled class="span2" value="<?php echo $un_grupo_nombres; ?>">
                <input type="text" disabled class="span2" value="<?php echo $un_grupo_ap_pat; ?>">
                <input type="text" disabled class="span2" value="<?php echo $un_grupo_ap_mat; ?>">
                <input type="text" disabled class="span2" value="<?php echo $estado_civil; ?>">
               </div>
              <div class="controls controls-row">
                <input type="text" disabled class="span10" value="<?php echo utf8_encode($nom_actividad); ?>">
              </div>
              <div class="controls controls-row">
                  <input type="text" disabled class="span3" value="<?php echo $un_grupo_direccion; ?>">
                  <input type="text" disabled class="span2" value="<?php echo $un_grupo_comuna; ?>">
                  <input type="text" disabled class="span2" value="<?php echo $un_grupo_ciudad; ?>">
                  <input type="text" disabled class="span2" value="<?php echo $un_grupo_region; ?>">
              </div>
            <?php endif; ?>
            <?php } ?>
              <p>
              -->
              <h4 class="page-header">Antecedentes e ingresos del grupo familiar</h4>
                <h6>Datos por cada integrante del grupo familiar incluído usted mismo</h6>
                    <?php
                    $i=1;
                      $resultado4=$con->query("SELECT alumnos.*, persona_grupo.*, ingresos.*, estado_civil.*, parentesco.*, prev_social.*, prev_salud.*, estudios.*, actividad.*
                        FROM alumnos, persona_grupo, ingresos, estado_civil, parentesco, prev_social, prev_salud, estudios, actividad
                        WHERE rut_alum ='$rut'
                        AND id_alum = persona_id_alum
                        AND persona_rut = ingreso_persona_grp_id
                        AND id_alum = ingreso_alumn_id
                        AND persona_ecivil = id_estado_civil
                        AND persona_parent = id_parentesco
                        AND persona_prev_soc = id_prev_soc
                        AND persona_prev_sal = id_prev_sal
                        AND persona_niv_est = cod_estudios
                        AND persona_act = cod_actividad ORDER BY id_persona_grupo");

                        while($fila2 = $resultado4->fetch_array(MYSQLI_ASSOC)){
                        $id_ingreso=$fila2['id_ingreso'];
                        $persona_nombres=$fila2['persona_nombres'];
                        $persona_ap_pat=$fila2['persona_ap_pat'];
                        $persona_ap_mat=$fila2['persona_ap_mat'];
                        $persona_rut=$fila2['persona_rut'];
                        $persona_edad=$fila2['persona_edad'];
                        $persona_ecivil=$fila2['estado_civil_tipo'];
                        $persona_parent=$fila2['parentesco_tipo'];
                        $persona_prev_soc=$fila2['tipo_prev_soc'];
                        $persona_prev_sal=$fila2['tipo_prev_sal'];
                        $persona_niv_est=$fila2['tipo_estudios'];
                        $persona_act=$fila2['nom_actividad'];
                        $sueldo=$fila2['ingreso_sueldos'];
                        $honorario=$fila2['ingreso_honorario'];
                        $retiro=$fila2['ingreso_retiro'];
                        $pension=$fila2['ingreso_pension'];
                        $act_indep=$fila2['ingreso_activ_indep'];
                        $otros=$fila2['ingreso_otros'];

                    ?>
              <div>
                  <p>
                <div class="controls controls-row">
                  Integrante: <? echo $i; ?>
                  <p>
                  <input type="text" disabled class="span2" value="<?php echo $persona_nombres; ?>">
                  <input type="text" disabled class="span2" value="<?php echo $persona_ap_pat; ?>">
                  <input type="text" disabled class="span2" value="<?php echo $persona_ap_mat; ?>">
                  <input type="text" disabled class="span2" value="Rut: <?php echo $persona_rut; ?>">
                  <input type="text" disabled class="span2" value="Edad: <?php echo $persona_edad; ?>">
                  <input type="text" disabled class="span2" value="<?php echo $persona_ecivil; ?>">
                </div>
                <div class="controls controls-row">
                      <input type="text" disabled class="span2" value="<?php echo utf8_encode($persona_parent); ?>">
                      <input type="text" disabled class="span2" value="<?php echo utf8_encode($persona_prev_soc); ?>">
                      <input type="text" disabled class="span2" value="<?php echo utf8_encode($persona_prev_sal); ?>">
                      <input type="text" disabled class="span6" value="<?php echo utf8_encode($persona_niv_est); ?>">
                    </div>
                    <div class="controls controls-row">
                       <input type="text" disabled class="span12" value="<?php echo utf8_encode($persona_act); ?>">
                    </div>
                    <div class="controls controls-row">
                      <h6>Ingresos Promedio mensuales de los últimos 8 meses</h6>
                      <input type="text" disabled class="span2" value="Sueldo: <?php echo $sueldo; ?>">
                      <input type="text" disabled class="span2" value="Honorarios: <?php echo $honorario; ?>">
                      <input type="text" disabled class="span2" value="Aportes: <?php echo $retiro; ?>">
                      <input type="text" disabled class="span2" value="Pension: <?php echo $pension; ?>">
                      <input type="text" disabled class="span2" value="Act. Indep:<?php echo $act_indep; ?>">
                      <input type="text" disabled class="span2" value="Otros: <?php echo $otros; ?>">
                    </div>
                    <hr>

              </div>
              <?php $i++; }  ?>
              <h5><a href="print_formalum.php?var7=<?php echo $rut; ?>"><i class="icon-print"></i> Imprimir el Formulario</a></h5>
            <?php endif; ?>
</div>

      <hr>

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
