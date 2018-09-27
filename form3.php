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
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Beneficios 2018 - Universidad Metropolitana de Ciencias de la Educación</title>
    <link href="../img/templates/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
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

    <style type="text/css">
      body {
        padding-top: 0px;
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
    <?php include "cabecera.php"; ?> 
    <div class="container">
              <br>
          <div class="col-sm-12">
            <div style="float:right;">
              <a href="salir2.php" class="btn btn-success btn-sm" role="button">Salir</a>
            </div>
          </div>

<!-- Comienzo del formulario UMCE por Luis García Manzo 2018-->
  <?php if($dir == ''): ?>
      <form name="alumnos_dae" method="post" action="inserta2.php?var=<?php echo $rut; ?>">
        <div class="form-row">
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
            <div class="form-group col-md-3">
              <input type="text" disabled class="form-control" value="<?php echo utf8_encode($nombre); ?>">
            </div>
            <div class="form-group col-md-3">
              <input type="text" disabled class="form-control" value="<?php echo utf8_encode($ap_pat_alum); ?>">
            </div> 
            <div class="form-group col-md-3"> 
              <input type="text" disabled class="form-control" value="<?php echo utf8_encode($ap_mat_alum); ?>">
            </div>
            <div class="form-group col-md-3">  
              <input type="text" disabled class="form-control" value="<?php echo $rut; ?>">
            </div>  
            <div class="form-group col-md-8">
              <input class="form-control" disabled type="text" value="<?php echo $carrera; ?>">
            </div>
            <div class="form-group col-md-2">  
              <input class="form-control" disabled type='text' value="Código: <?php echo $cod_car; ?>">
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" disabled type="text" value="Año ingreso: <?php echo $ingreso; ?>">
            </div>
             <div class="form-group col-md-4">
              <input type="text" required id="dir_alum" name="dir_alum" class="form-control" placeholder="Dirección académica">
            </div>
             <div class="form-group col-md-2">
              <input type="text" required id="comuna" name="comuna" class="form-control" placeholder="Comuna">
            </div>
            <div class="form-group col-md-2">
              <input type="text" id="telefono_alum" name="telefono_alum" class="form-control" placeholder="Fono fijo">
            </div>
            <div class="form-group col-md-2">
              <input type="text" id="cel_alum" name="cel_alum" class="form-control" placeholder="Celular">
            </div>
            <div class="form-group col-md-2">
              <input type="text" disabled id="fnac_alum" name="fnac_alum" class="form-control" value="F. Nac: <?php echo $fnac; ?>">
            </div>
            <div class="form-group col-md-6">
              <input type="email" required id="correo_alum" name="correo_alum"class="form-control" placeholder="Correo Institucional">
            </div>
            <div class="form-group col-md-6">
              <input type="text" required id="nac_alum" name="nac_alum" class="form-control" placeholder="Indique su nacionalidad">
            </div>
            <div class="form-group col-md-4">
              <h6> Si no pertenece a ningún pueblo originario escriba: No</h6>
              <input type="text" required id="porigin_alum" name="porigin_alum" class="form-control" placeholder="¿Pertenece a algún pueblo originario?, indique cual">
            </div>
            <div class="form-group col-md-8">
              <h6>¿Tiene algún tipo de discapacidad cognitiva, física o sensorial?, si la respuesta es Si indique cual, de lo contrario escriba: No</h6>
              <input type="text" required id="discapacidad_alum" name="discapacidad_alum" class="form-control" placeholder="Discapacidad cognitiva, física o sensorial">
          </div>
         </div>  
        <div class="form-row">
          <legend>Antecedentes del Grupo Familiar</legend>
          <p>
          <h6>Escriba su dirección completa.</h6>
          <div class="form-group col-md-5">
            <input type="text" id="dir_grupo" name="dir_grupo" required class="form-control" placeholder="Dirección del grupo familiar">
          </div>
          <div class="form-group col-md-3">
            <input type="text" id="comuna_grupo" name="comuna_grupo" required class="form-control" placeholder="Comuna">
          </div>
          <div class="form-group col-md-2">
            <input type="text" id="ciudad_grupo" name="ciudad_grupo" required class="form-control" placeholder="Ciudad">
          </div>
          <div class="form-group col-md-2">
            <input type="text" id="telefono_grupo" name="telefono_grupo" required class="form-control" placeholder="Teléfono">
          </div>
        </div>
        <div class="form-row">
          <h6>Tenencia de la vivienda</h6>
          <div class="form-group col-md-12">
            <select class="form-control" id="vivienda_grupo" name="vivienda_grupo">
                   <option value="1">Propietario Vivienda Pagada</option>
                   <option value="2">Propietario Vivienda en Pago</option>
                   <option value="3">Arrendatario</option>
                   <option value="4">Usufructuario</option>
                   <option value="5">Allegado</option>
            </select>
          </div>  
        </div>
        <p>
        <!-- <div class="form-row"> -->
       
              <p>
              <h4 class="page-header">Antecedentes e ingresos del grupo familiar <h6>Ingrese estos datos por cada integrante del grupo familiar incluído el estudiante (Para agregar integrantes de su grupo familiar haga click en el link "Agregar Integrante")</h6></h4>
    <p><h6>(Los rut deben ser ingresados sin punto, pero con gui&oacute;n ej: 12345678-9)</h6>
              <div id="addinput">
                  
                <span class="label label-primary">1</span>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo1" name="nombre_grupo1" class="form-control" required value="<?php echo utf8_encode($nombre); ?>">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo1" name="ap_pat_grupo1" class="form-control" required value="<?php echo utf8_encode($ap_pat_alum); ?>">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo1" name="ap_mat_grupo1" class="form-control" required value="<?php echo utf8_encode($ap_mat_alum); ?>">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="rut_grupo1" name="rut_grupo1" class="form-control" required value="<?php echo $rut; ?>">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo1" name="edad_grupo1" class="form-control" required placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select id="ecivil_grupo1" name="ecivil_grupo1" class="form-control" required>
                        <option value="">Estado Civil</option>
                        <option value="1">Soltero/a</option>
                        <option value="2">Casado/a</option>
                        <option value="3">Separado/a legalmente</option>
                        <option value="4">Separado/a de hecho</option>
                        <option value="5">Divorciado/a</option>
                        <option value="6">Viudo/a</option>
                        <option value="7">Conviviente</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                      <select id="parent_grupo1" name="parent_grupo1" class="form-control" required>
                        <option value="0">Parentesco</option>
                        <option value="16">Yo</option>
                      </select>
                  </div> 
                  <div class="form-group col-md-3">     
                      <select id="prev_soc_grupo1" name="prev_soc_grupo1" class="form-control" required>
                        <option value="0">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">       
                      <select id="prev_sal_grupo1" name="prev_sal_grupo1" class="form-control" required>
                        <option value="0">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">       
                      <select id="niv_est_grupo1" name="niv_est_grupo1" class="form-control" required>
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
                  <div class="form-group col-md-4"> 
                        <select id="act_grupo1" name="act_grupo1" class="form-control" required>
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
                  </div>  
                  <div class="form-row">
                    <h6>Indique el promedio mensual de los meses de Junio, Julio y Agosto 2016. Escriba los valores sin el signo $ y sin puntos Ej: 120000</h6>
                    <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo1" name="sueldos_grupo1" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo1" name="hono_grupo1" class="form-control" placeholder="Honorarios">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo1" name="retiro_grupo1" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo1" name="pen_grupo1" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="act_in_grupo1" name="act_in_grupo1" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo1" name="otros_grupo1" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                  </div>
                    <p><a href="#2" onclick="ActivarCampo();">Agregar Integrante</a></p>
                  </div>
                  <hr>

              <div id="addinput1" style="display:none;">
                  <p>
                    <span class="label label-primary">2</span>
                <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo2" name="nombre_grupo2" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo2" name="ap_pat_grupo2" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo2" name="ap_mat_grupo2" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo2" name="rut_grupo2" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo2" name="edad_grupo2" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo2" name="ecivil_grupo2">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo2" name="parent_grupo2" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo2" name="prev_soc_grupo2" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo2" name="prev_sal_grupo2" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo2" name="niv_est_grupo2"class="form-control">
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
                    <div class="form-group col-md-4">
                        <select id="act_grupo2" name="act_grupo2" class="form-control">
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
                     <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo2" name="sueldos_grupo2" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo2" name="hono_grupo2" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo2" name="retiro_grupo2" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo2" name="pen_grupo2" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo2" name="act_in_grupo2" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo2" name="otros_grupo2" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                    <a href="#3" onclick="ActivarCampo2();">Agregar Integrante</a>
                    </p>
                    <hr>
                </div>
              </div>
              <div id="addinput2" style="display:none;">
                  <p>
                    <span class="label label-primary">3</span>
                <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo3" name="nombre_grupo3" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo3" name="ap_pat_grupo3" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo3" name="ap_mat_grupo3" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo3" name="rut_grupo3" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo3" name="edad_grupo3" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo3" name="ecivil_grupo3">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo3" name="parent_grupo3" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo3" name="prev_soc_grupo3" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo3" name="prev_sal_grupo3" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo3" name="niv_est_grupo3"class="form-control">
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
                    <div class="form-group col-md-4">
                        <select id="act_grupo3" name="act_grupo3" class="form-control">
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
                     <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo3" name="sueldos_grupo3" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo3" name="hono_grupo3" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo3" name="retiro_grupo3" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo3" name="pen_grupo3" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo3" name="act_in_grupo3" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo3" name="otros_grupo3" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p><a href="#4" onclick="ActivarCampo3();">Agregar Integrante</a>
                    </p>
                    <hr>
                </div>
              </div>
              <div id="addinput3" style="display:none;">
                  <p>
                    <span class="label label-primary">4</span>
                <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo4" name="nombre_grupo4" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo4" name="ap_pat_grupo4" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo4" name="ap_mat_grupo4" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo4" name="rut_grupo4" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo4" name="edad_grupo4" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo4" name="ecivil_grupo4">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo4" name="parent_grupo4" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo4" name="prev_soc_grupo4" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo4" name="prev_sal_grupo4" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo4" name="niv_est_grupo4"class="form-control">
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
                    <div class="form-group col-md-4">
                        <select id="act_grupo4" name="act_grupo4" class="form-control">
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
                     <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo4" name="sueldos_grupo4" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo4" name="hono_grupo4" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo4" name="retiro_grupo4" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo4" name="pen_grupo4" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo4" name="act_in_grupo4" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo4" name="otros_grupo4" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                      <a href="#5" onclick="ActivarCampo4();">Agregar Integrante</a>
                    </p>
                    <hr>
                </div>
              </div>
              <div id="addinput4" style="display:none;">
                  <p>
                    <span class="label label-primary">5</span>
                <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo5" name="nombre_grupo5" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo5" name="ap_pat_grupo5" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo5" name="ap_mat_grupo5" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo5" name="rut_grupo5" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo5" name="edad_grupo5" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo5" name="ecivil_grupo5">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo5" name="parent_grupo5" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo5" name="prev_soc_grupo5" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo5" name="prev_sal_grupo5" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo5" name="niv_est_grupo5"class="form-control">
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
                    <div class="form-group col-md-4">
                        <select id="act_grupo5" name="act_grupo5" class="form-control">
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
                     <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo5" name="sueldos_grupo5" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo5" name="hono_grupo5" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo5" name="retiro_grupo5" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo5" name="pen_grupo5" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo5" name="act_in_grupo5" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo5" name="otros_grupo5" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                      <a href="#6" onclick="ActivarCampo5();">Agregar Integrante</a>
                    </p>
                    <hr>
                </div>
              </div>
              <div id="addinput5" style="display:none;">
                  <p>
                    <span class="label label-primary">6</span>
               <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo6" name="nombre_grupo6" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo6" name="ap_pat_grupo6" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo6" name="ap_mat_grupo6" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo6" name="rut_grupo6" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo6" name="edad_grupo6" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo6" name="ecivil_grupo6">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo6" name="parent_grupo6" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo6" name="prev_soc_grupo6" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo6" name="prev_sal_grupo6" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo6" name="niv_est_grupo6"class="form-control">
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
                  <div class="form-group col-md-4">
                        <select id="act_grupo6" name="act_grupo6" class="form-control">
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
                  <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo6" name="sueldos_grupo6" class="form-control" placeholder="Sueldos y Pensiones">
                  </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo6" name="hono_grupo6" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo6" name="retiro_grupo6" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo6" name="pen_grupo6" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo6" name="act_in_grupo6" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo6" name="otros_grupo6" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                      <a href="#7" onclick="ActivarCampo6();">Agregar Integrante</a>
                    </p>
                    <hr>
                </div>
              </div>
              <div id="addinput6" style="display:none;">
                  <p>
                    <span class="label label-primary">7</span>
               <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo7" name="nombre_grupo7" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo7" name="ap_pat_grupo7" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo7" name="ap_mat_grupo7" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo7" name="rut_grupo7" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo7" name="edad_grupo7" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo7" name="ecivil_grupo7">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo7" name="parent_grupo7" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo7" name="prev_soc_grupo7" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo7" name="prev_sal_grupo7" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo7" name="niv_est_grupo7"class="form-control">
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
                    <div class="form-group col-md-4">
                        <select id="act_grupo7" name="act_grupo7" class="form-control">
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
                     <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo7" name="sueldos_grupo7" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo7" name="hono_grupo7" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo7" name="retiro_grupo7" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo7" name="pen_grupo7" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo7" name="act_in_grupo7" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo7" name="otros_grupo7" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                      <a href="#8" onclick="ActivarCampo7();">Agregar Integrante</a>
                    </p>
                    <hr>
                 </div>   
              </div>
              <div id="addinput7" style="display:none;">
                  <p>
                    <span class="label label-primary">8</span>
               <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo8" name="nombre_grupo8" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo8" name="ap_pat_grupo8" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo8" name="ap_mat_grupo8" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo8" name="rut_grupo8" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo8" name="edad_grupo8" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo8" name="ecivil_grupo8">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo8" name="parent_grupo8" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo8" name="prev_soc_grupo8" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo8" name="prev_sal_grupo8" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo8" name="niv_est_grupo8"class="form-control">
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
                    <div class="form-group col-md-4">
                        <select id="act_grupo8" name="act_grupo8" class="form-control">
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
                     <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo8" name="sueldos_grupo8" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo8" name="hono_grupo8" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo8" name="retiro_grupo8" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo8" name="pen_grupo8" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo8" name="act_in_grupo8" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo8" name="otros_grupo8" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                      <a href="#9" onclick="ActivarCampo8();">Agregar Integrante</a>
                    </p>
                    <hr>
                </div>
              </div>
              <div id="addinput8" style="display:none;">
                  <p>
                    <span class="label label-primary">9</span>
                <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo9" name="nombre_grupo9" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo9" name="ap_pat_grupo9" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo9" name="ap_mat_grupo9" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo9" name="rut_grupo9" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo9" name="edad_grupo9" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo9" name="ecivil_grupo9">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo9" name="parent_grupo9" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo9" name="prev_soc_grupo9" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo9" name="prev_sal_grupo9" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo9" name="niv_est_grupo9"class="form-control">
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
                    <div class="form-group col-md-4">
                        <select id="act_grupo9" name="act_grupo9" class="form-control">
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
                     <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo9" name="sueldos_grupo9" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo9" name="hono_grupo9" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo9" name="retiro_grupo9" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo9" name="pen_grupo9" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo9" name="act_in_grupo9" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo9" name="otros_grupo9" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                      <a href="#10" onclick="ActivarCampo9();">Agregar Integrante</a>
                    </p>
                    <hr>
                  </div>
              </div>
            <div id="addinput9" style="display:none;">
                  <p>
                    <span class="label label-primary">10</span>
                <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo10" name="nombre_grupo10" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo10" name="ap_pat_grupo10" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo10" name="ap_mat_grupo10" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo10" name="rut_grupo10" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo10" name="edad_grupo10" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo10" name="ecivil_grupo10">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo10" name="parent_grupo10" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo10" name="prev_soc_grupo10" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo10" name="prev_sal_grupo10" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo10" name="niv_est_grupo10"class="form-control">
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
                    <div class="form-group col-md-4">
                        <select id="act_grupo10" name="act_grupo10" class="form-control">
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
                     <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo10" name="sueldos_grupo10" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo10" name="hono_grupo10" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo10" name="retiro_grupo10" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo10" name="pen_grupo10" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo10" name="act_in_grupo10" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo10" name="otros_grupo10" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                    <a href="#11" onclick="ActivarCampo10();">Agregar Integrante</a>
                    </p>
                    <hr>
                 </div>   
              </div>
          <div id="addinput10" style="display:none;">
                  <p>
                    <span class="label label-primary">11</span>
                <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo11" name="nombre_grupo11" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo11" name="ap_pat_grupo11" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo11" name="ap_mat_grupo11" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo11" name="rut_grupo11" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo11" name="edad_grupo11" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo11" name="ecivil_grupo11">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo11" name="parent_grupo11" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo11" name="prev_soc_grupo11" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo11" name="prev_sal_grupo11" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo11" name="niv_est_grupo11"class="form-control">
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
                    <div class="form-group col-md-4">
                        <select id="act_grupo11" name="act_grupo11" class="form-control">
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
                     <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo11" name="sueldos_grupo11" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo11" name="hono_grupo11" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo11" name="retiro_grupo11" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo11" name="pen_grupo11" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo11" name="act_in_grupo11" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo11" name="otros_grupo11" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                     <a href="#12" onclick="ActivarCampo11();">Agregar Integrante</a>
                    </p>
                   </div> 
                    <hr>
                  </div>
        <div id="addinput11" style="display:none;">
                  <p>
                    <span class="label label-primary">12</span>
               <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo12" name="nombre_grupo12" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo12" name="ap_pat_grupo12" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo12" name="ap_mat_grupo12" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo12" name="rut_grupo12" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo12" name="edad_grupo12" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo12" name="ecivil_grupo12">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo12" name="parent_grupo12" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo12" name="prev_soc_grupo12" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo12" name="prev_sal_grupo12" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo12" name="niv_est_grupo12"class="form-control">
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
                    <div class="form-group col-md-4">
                        <select id="act_grupo12" name="act_grupo12" class="form-control">
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
                     <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo12" name="sueldos_grupo12" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo12" name="hono_grupo12" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo12" name="retiro_grupo12" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo12" name="pen_grupo12" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo12" name="act_in_grupo12" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo12" name="otros_grupo12" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                     <a href="#13" onclick="ActivarCampo12();">Agregar Integrante</a>
                    </p>
                  </div>
                    <hr>
                </div>
        <div id="addinput12" style="display:none;">
                  <p>
                    <span class="label label-primary">13</span>
               <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo13" name="nombre_grupo13" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo13" name="ap_pat_grupo13" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo13" name="ap_mat_grupo13" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo13" name="rut_grupo13" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo13" name="edad_grupo13" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo13" name="ecivil_grupo13">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo13" name="parent_grupo13" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo13" name="prev_soc_grupo13" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo13" name="prev_sal_grupo13" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo13" name="niv_est_grupo13"class="form-control">
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
                    <div class="form-group col-md-4">
                        <select id="act_grupo13" name="act_grupo13" class="form-control">
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
                     <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo13" name="sueldos_grupo13" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo13" name="hono_grupo13" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo13" name="retiro_grupo13" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo13" name="pen_grupo13" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo13" name="act_in_grupo13" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo13" name="otros_grupo13" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                     <a href="#14" onclick="ActivarCampo13();">Agregar Integrante</a>
                    </p>
                    <hr>
                </div>    
              </div>
        <div id="addinput13" style="display:none;">
                  <p>
                    <span class="label label-primary">14</span>
               <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo14" name="nombre_grupo14" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo14" name="ap_pat_grupo14" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo14" name="ap_mat_grupo14" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo14" name="rut_grupo14" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo14" name="edad_grupo14" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo14" name="ecivil_grupo14">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo14" name="parent_grupo14" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo14" name="prev_soc_grupo14" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo14" name="prev_sal_grupo14" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo14" name="niv_est_grupo14"class="form-control">
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
                    <div class="form-group col-md-4">
                        <select id="act_grupo14" name="act_grupo14" class="form-control">
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
                     <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo14" name="sueldos_grupo14" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo14" name="hono_grupo14" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo14" name="retiro_grupo14" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo14" name="pen_grupo14" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo14" name="act_in_grupo14" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo14" name="otros_grupo14" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>
                    <p>
                     <a href="#15" onclick="ActivarCampo14();">Agregar Integrante</a>
                    </p>
                 </div>   
                    <hr>
              </div>
                <div id="addinput14" style="display:none;">
                  <p>
                    <span class="label label-primary">15</span>
              <div class="form-row">
                  <p>
                  <div class="form-group col-md-3">
                    <input type="text" id="nombre_grupo15" name="nombre_grupo15" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_pat_grupo15" name="ap_pat_grupo15" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="ap_mat_grupo15" name="ap_mat_grupo15" class="form-control" placeholder="Apellido Materno">
                  </div>
                  <div class="form-group col-md-3">
                   <input type="text" id="rut_grupo15" name="rut_grupo15" class="form-control" placeholder="Rut" onblur="onRutBlur(this);">
                 </div>
                  <div class="form-group col-md-3">
                    <input type="text" id="edad_grupo15" name="edad_grupo15" class="form-control" placeholder="Edad">
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="ecivil_grupo15" name="ecivil_grupo15">
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
                <div class="form-group col-md-3">
                      <select id="parent_grupo15" name="parent_grupo15" class="form-control">
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
                  </div>
                  <div class="form-group col-md-3">    
                      <select id="prev_soc_grupo15" name="prev_soc_grupo15" class="form-control">
                        <option "">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="prev_sal_grupo15" name="prev_sal_grupo15" class="form-control">
                        <option "">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">    
                      <select id="niv_est_grupo15" name="niv_est_grupo15"class="form-control">
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
                    <div class="form-group col-md-4">
                        <select id="act_grupo15" name="act_grupo15" class="form-control">
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
                     <div class="form-group col-md-4">
                      <input type="text" id="sueldos_grupo15" name="sueldos_grupo15" class="form-control" placeholder="Sueldos y Pensiones">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="hono_grupo15" name="hono_grupo15" class="form-control" placeholder="Honorarios">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="retiro_grupo15" name="retiro_grupo15" class="form-control" placeholder="Aporte de Hermanos y Otros">
                    </div>
                     <div class="form-group col-md-4">
                      <input type="text" id="pen_grupo15" name="pen_grupo15" class="form-control" placeholder="Pensión de alimentos">
                    </div>
                    <div class="form-group col-md-4"> 
                      <input type="text" id="act_in_grupo15" name="act_in_grupo15" class="form-control" placeholder="Actividades Indep.">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" id="otros_grupo15" name="otros_grupo15" class="form-control" placeholder="Otros (Dividendos, ganancias de capital)">
                    </div>

                    <hr>
                </div>
              </div>
                    <br>
                    <div class="row">
                      <div class="form-group col-sm-6">
                          <button type="submit" class="btn btn-primary">Enviar Formulario</button>
                          <button type="reset" class="btn">Limpiar Datos</button>
                      </div>
                    </div>

  </form>
  <?php endif; ?>
  <?php if($dir != ''): ?>
        <div class="form-row">
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
              
              $resultado7=$con->query("SELECT count(ingreso_alumn_id) AS res FROM ingresos WHERE '$id_alum' = ingreso_alumn_id");
              $valor=$resultado7->fetch_array(MYSQLI_ASSOC);
                $t=$valor['res'];
            ?>
           <div class="alert"><h6>Tu formulario ya ha sido ingresado a nuestra base de datos, si necesitas hacer alguna modificación, por favor comunícate con la asistente social de la carrera en Bienestar Estudiantil</h6></div>
          <div class="form-group col-md-3"> 
          <input type="text" disabled class="form-control" value="<?php echo utf8_encode($nombre); ?>">
        </div>
        <div class="form-group col-md-3">
          <input type="text" disabled class="form-control" value="<?php echo utf8_encode($ap_pat_alum); ?>">
        </div>
        <div class="form-group col-md-3">  
          <input type="text" disabled class="form-control" value="<?php echo utf8_encode($ap_mat_alum); ?>">
        </div>
          <div class="form-group col-md-3">
          <input type="text" disabled class="form-control" value="<?php echo $rut; ?>">
        </div>
        <div class="form-group col-md-8">
          <input class="form-control" disabled type="text" name="rut_alum" value="<?php echo $carrera; ?>">
        </div>
         <div class="form-group col-md-2"> 
          <input class="form-control" disabled type='text' value="Código: <?php echo $cod_car; ?>">
        </div>
         <div class="form-group col-md-2"> 
          <input type="text" disabled id="anio_ingreso" name="anio_ingreso" class="form-control" value="Año ingreso: <?php echo $ingreso; ?>">
        </div>
        <div class="form-group col-md-4">
            <input type="text" disabled id="dir_alum" name="dir_alum" class="form-control" value="<?php echo $dir; ?>">
          </div>
          <div class="form-group col-md-2">
            <input type="text" disabled id="comuna" name="comuna" class="form-control" value="<?php echo $comuna; ?>">
          </div>
          <div class="form-group col-md-2">
            <input type="text" disabled id="telefono_alum" name="telefono_alum" class="form-control" value="<?php echo $fono; ?>">
          </div>
          <div class="form-group col-md-2">
            <input type="text" disabled id="cel_alum" name="cel_alum" class="form-control" value="<?php echo $cel; ?>">
          </div>
          <div class="form-group col-md-2">
          <input type="text" disabled id="fnac_alum" name="fnac_alum" class="form-control" value="<?php echo $fnac; ?>">
        </div>
          <div class="form-group col-md-6">
            <input type="email" disabled id="correo_alum" name="correo_alum"class="form-control" value="<?php echo $correo; ?>">
          </div>
            <div class="form-group col-md-6">
            <input type="text" disabled id="nac_alum" name="nac_alum" class="form-control" value="<?php echo $nac; ?>">
          </div>
        </div>
          <div class="form-row">
          <div class="form-group col-md-6" style="text-align:right;">
            <h6> Pertenencia a Pueblo originario o Etnia originaria: </h6>
          </div>
          <div class="form-group col-md-6">
            <input type="text" disabled id="porigin_alum" name="porigin_alum" class="form-control" value="<?php echo $pueblo; ?>">
          </div>
        </div>
          <div class="form-row">
            <div class="form-group col-md-6" style="text-align:right;">
          <h6>Tipo de capacidad diferente:</h6>
        </div>
          <div class="form-group col-md-6">
            <input type="text" disabled id="discapacidad_alum" name="discapacidad_alum" class="form-control" value="<?php echo $discap; ?>">
          </div>
         </div>
       
          <p>
        <div class="form-row">
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
           
          <h6>Dirección completa, comuna, ciudad y teléfono.</h6>
          <div class="form-group col-md-3"> 
          <input type="text" disabled class="form-control" value="<?php echo $dirgrupo; ?>">
        </div>
          <div class="form-group col-md-3"> 
          <input type="text" disabled class="form-control" value="<?php echo $comunagrupo; ?>">
        </div>
          <div class="form-group col-md-3"> 
          <input type="text" disabled class="form-control" value="<?php echo $ciudadgrupo; ?>">
        </div>
          <div class="form-group col-md-3"> 
          <input type="text" disabled class="form-control" value="<?php echo $fonogrupo; ?>">
        </div>
      </div>
        <div class="form-row">
          <h6>Tenencia de la Vivienda</h6>
          <div class="form-group col-md-3">
          <input type="text" disabled class="form-control" value="<?php echo $viv_tipo; ?>">
        </div>
      </div>
        <p>          <!-- <h5>Si sus padres no son integrantes del grupo familiar</h5> -->
          <p>
              <p>
            <div class="row">
              <div class="col-md-12"> 
              <h4 class="page-header">Antecedentes e ingresos del grupo familiar</h4>
            </div>
          </div>
                <h6>Datos por cada integrante del grupo familiar incluído usted mismo  <span class="label label-primary"><?php echo $t; ?> integrantes</span></h6>
                    <?php
                    $i=1;
                      $resultado4=$con->query("SELECT alumnos.*, persona_grupo.*, ingresos.*, estado_civil.*, parentesco.*, prev_social.*, prev_salud.*, estudios.*, actividad.*
                        FROM alumnos, persona_grupo, ingresos, estado_civil, parentesco, prev_social, prev_salud, estudios, actividad
                        WHERE alumnos.rut_alum ='$rut'
                        AND alumnos.id_alum = persona_grupo.persona_id_alum
                        /*AND alumnos.id_alum = ingresos.ingreso_alumn_id*/
                        /*AND persona_grupo.persona_rut = ingresos.ingreso_persona_grp_id*/
                        AND persona_grupo.id_persona_grupo = ingresos.id_ingreso
                        AND persona_grupo.persona_ecivil = estado_civil.id_estado_civil
                        AND persona_grupo.persona_parent = parentesco.id_parentesco
                        AND persona_grupo.persona_prev_soc = prev_social.id_prev_soc
                        AND persona_grupo.persona_prev_sal = prev_salud.id_prev_sal
                        AND persona_grupo.persona_niv_est = estudios.cod_estudios
                        AND persona_grupo.persona_act = actividad.cod_actividad ORDER BY persona_grupo.id_persona_grupo");

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
                        //$sueldo=ltrim($fila2['ingreso_sueldos'],'0');
                        $sueldo = number_format($fila2['ingreso_sueldos'], 0, ',', '.');
                        $honorario=number_format($fila2['ingreso_honorario'], 0, ',', '.');
                        $retiro=number_format($fila2['ingreso_retiro'], 0, ',', '.');
                        $pension=number_format($fila2['ingreso_pension'], 0, ',', '.');
                        $act_indep=number_format($fila2['ingreso_activ_indep'], 0, ',', '.');
                        $otros=number_format($fila2['ingreso_otros'], 0, ',', '.');
                        $ingreso_total=number_format($fila2['ingreso_total'], 0, ',', '.');

                    ?>
              <!-- <div> -->
                <div class=form-row">
                  Integrante: <strong><?php echo $i; ?></strong>************************************************************************************************************
                  <p>
                  <div class="form-group col-md-3">  
                    <input type="text" disabled class="form-control" value="<?php echo $persona_nombres; ?>">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" disabled class="form-control" value="<?php echo $persona_ap_pat; ?>">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" disabled class="form-control" value="<?php echo $persona_ap_mat; ?>">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" disabled class="form-control" value="Rut: <?php echo $persona_rut; ?>">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" disabled class="form-control" value="Edad: <?php echo $persona_edad; ?>">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" disabled class="form-control" value="<?php echo $persona_ecivil; ?>">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" disabled class="form-control" value="<?php echo utf8_encode($persona_parent); ?>">
                  </div>  
                  <div class="form-group col-md-3">
                    <input type="text" disabled class="form-control" value="<?php echo utf8_encode($persona_prev_soc); ?>">
                  </div>  
                  <div class="form-group col-md-3">  
                    <input type="text" disabled class="form-control" value="<?php echo utf8_encode($persona_prev_sal); ?>">
                  </div>  
                  <div class="form-group col-md-3">  
                    <input type="text" disabled class="form-control" value="<?php echo utf8_encode($persona_niv_est); ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" disabled class="form-control" value="<?php echo utf8_encode($persona_act); ?>">
                  </div> 
                    <h6>Ingresos Promedio mensuales de los últimos 8 meses</h6>
                  <div class="form-group col-md-3">
                    <input type="text" disabled class="form-control" value="Sueldo: $<?php echo $sueldo; ?>">
                  </div>  
                  <div class="form-group col-md-3">
                    <input type="text" disabled class="form-control" value="Honorarios: $<?php echo $honorario; ?>">
                  </div>  
                  <div class="form-group col-md-3">
                    <input type="text" disabled class="form-control" value="Aportes: $<?php echo $retiro; ?>">
                  </div>  
                  <div class="form-group col-md-3">
                    <input type="text" disabled class="form-control" value="Pension: $<?php echo $pension; ?>">
                  </div>  
                  <div class="form-group col-md-3">
                    <input type="text" disabled class="form-control" value="Act. Indep: $<?php echo $act_indep; ?>">
                  </div>  
                  <div class="form-group col-md-3">
                    <input type="text" disabled class="form-control" value="Otros: $<?php echo $otros; ?>">
                  </div>
                </div>   
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="text" disabled class="form-control" value="Total ingresos persona del grupo familiar: $<?php echo $ingreso_total; ?>">
                  </div>  
                </div>
                <p>
              <?php $i++; }  ?>
              <h5><a href="print_formalum.php?var7=<?php echo $rut; ?>"><i class="icon-print"></i> Imprimir el Formulario</a></h5>
            <?php endif; ?>


      <hr>

      <footer>
        <p>&copy; Informática - UMCE 2018</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>
