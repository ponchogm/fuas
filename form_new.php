<?php
include ('conectar.php');
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
    <script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getcod.php?q="+str,true);
xmlhttp.send();
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
    <style type="text/css">
      #enviar {display:block;}
      #limpiar {display: block;}
    </style>
  <script type="text/javascript">
      $(document).ready(function() {
        var cuentaInputs = $('#elementos').children().length;
      
      })
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
        <a class="brand" href="#">Beneficios 2014</a>
        <ul class="nav pull-right">
          <li><a href="#">Universidad Metropolitana de Ciencias de la Educación - Dirección de asuntos estudiantiles</a></li>
        </ul>  
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

    <div class="container">

      <!-- Cabecera del formulario -->
      <div class="row-fluid">
        <div class="span2"><img src="bootstrap/img/Logo_umce.jpg" class="img-rounded"></div>
        <div class="span8" style="text-align:center"><h3>Formulario de acreditación socioeconómica 2014</h3></div>
        <div class="span2"><img src="bootstrap/img/Logo_dae.jpg" class="img-rounded"></div>
      </div>
        <p>
      <!-- Comienzo del formulario UMCE por Luis García Manzo -->
    <div id="formulario">  
      <form name="alumnos_dae" method="post" action="inserta.php">  
        <div class="controls controls-row">
          <legend>Antecedentes del estudiante</legend>
          <h6>Llene cuidadosamente este formulario y revise el contenido antes de enviar</h6>       
          <input type="text" required id="n_alum" name="n_alum" class="span3" placeholder="Nombres">
          <input type="text" required id="ap_pat_alum" name="ap_pat_alum" class="span2" placeholder="Apellido Paterno">
          <input type="text" required id="ap_mat_alum" name="ap_mat_alum" class="span2" placeholder="Apellido Materno">
          <input type="text" required id="rut_alum" name="rut_alum" class="span2" placeholder="Rut">
        </div>
          <div class="controls controls-row">  
            <select class="span5" id="carrera" name="carrera" onchange="showUser(this.value)">
              <option value=''>Carrera</option>
            <?php
            $resultado=$con->query("SELECT * FROM carreras");

                while($row = $resultado->fetch_array(MYSQLI_ASSOC))
                {  
                    echo "<option value=". $row['codigo_car'] . ">". $row['nombre_car'] ."</opcion>";
                }
            ?> 
          </select> 
            <div id="txtHint" class="span2"><input class='span2' type='text' placeholder="Código carrera"></div> 
            
            <input type="text" required id="anio_ingreso" name="anio_ingreso" class="span2" placeholder="Año de ingreso">
          </div>
          <div class="controls controls-row">
            <input type="text" required id="dir_alum" name="dir_alum" class="span3" placeholder="Dirección estudiante">
            <input type="text" required id="comuna" name="comuna" class="span2" placeholder="Comuna">
            <input type="text" id="telefono_alum" name="telefono_alum" class="span2" placeholder="Fono fijo (incluya cod)">
            <input type="text" id="cel_alum" name="cel_alum" class="span2" placeholder="Celular">
          </div>
          <div class="controls controls-row"> 
            <input type="email" required id="correo_alum" name="correo_alum"class="span3" placeholder="Correo Institucional">
            <input type="text" required id="fnac_alum" name="fnac_alum" class="span3" placeholder="Fecha de nacimiento (dd/mm/aaaa)">
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
          <div class="controls controls-row">
              <h6>Indique los beneficios que tiene (Marque todas las becas que tiene, en caso contrario marque la opción sin beneficio)</h6>
              <table class="table">
               <tr>
                 <td class="span3">
                  <h6>Becas y Créditos</h6>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="1"> Bicentenario
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="2"> Excelencia Académica
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="3"> Hijo de profesionales de la educación
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="4"> B. Pedagogía
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="5"> B. Vocación de Profesor
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="6"> Juan Gómez Millas
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="7"> Juan Gómez Millas (extranjeros)
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="8"> Traspaso Valech
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="9"> Fondo Solidario
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="10"> Propedéutico
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="11"> Crédito UMCE
                  </label>
                 </td>
                 <td class="span3">
                   <h6>Becas Junaeb</h6>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="12"> Alimentación (BAES)
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="13"> Mantención $15.000 (BMES)
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="14"> Mantención beca vocación $80.000
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="15"> B. indígena
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="16"> B. Presidente de la República
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="17"> B. Territorial
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="18"> B. Patagonia Aysén
                  </label>
                  <label class="checkbox">
                  <input type="checkbox" name="becas[]" value="21">Sin beneficio
                  </label>
                 </td>                  
                 <td class="span3">
                   <h6>Otras Becas (indique cual)</h6>
                   <input type="text" id="1" name="1" placeholder="Otras ¿Cual?">                   
                 </td>
                 <td class="span3">
                  <h6>Postulación a beca interna</h6>
                   <select id="beca_int" name="beca_int">
                    <option value="No postula">No postula</option>
                    <option value="Beca de alimentación UMCE">Beca de alimentación UMCE</option>
                    <option value="Beca de estudios UMCE">Beca de estudios UMCE</option>
                  </select> 
                 </td>
               </tr> 
              </table>               
          </div>
          <p>
        <div class="controls controls-row">
          <legend>Antecedentes del grupo familiar</legend>
          <p>
          <h6>Escriba su dirección completa (Ej: Pasaje Lago todos los santos 4318 block C, Población uno).</h6>       
          <input type="text" id="dir_grupo" name="dir_grupo" required class="span5" placeholder="Dirección del grupo familiar">
          <input type="text" id="comuna_grupo" name="comuna_grupo" required class="span2" placeholder="comuna">
          <input type="text" id="ciudad_grupo" name="ciudad_grupo" required class="span2" placeholder="Ciudad">
          <input type="text" id="telefono_grupo" name="telefono_grupo" required class="span2" placeholder="Teléfono">
        </div>  
        <div class="controls controls-row">
          <h6>Vivienda que ocupan</h6>       
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
          <h5>Si sus padres no son integrantes del grupo familiar</h5>
          <p>
          <h6>Antecedentes del Padre</h6>       
          <input type="hidden"  name="padre" value="Padre">
          <input type="text" id="rut_padre_ungrupo" name="rut_padre_ungrupo" class="span2" placeholder="Rut Padre">
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
                <input type="text" id="rut_madre_ungrupo" name="rut_madre_ungrupo" class="span2" placeholder="Rut Madre">
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
              <p>
              <h4 class="page-header">Antecedentes e ingresos del grupo familiar 
                <h6>Ingrese estos datos por cada integrante del grupo familiar incluído usted mismo (Para agregar integrantes de su grupo familiar haga click en el link "Agregar Integrante")</h6></h4>
                  <p>
                    <h6>1</h6>
              <div id="inputs">  
                <div class="controls controls-row">
                  <p>
                  <input type="text" id="nombre_grupo1" name="nombre_grupo1" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo1" name="ap_pat_grupo1" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo1" name="ap_mat_grupo1" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo1" name="rut_grupo1" class="span2" placeholder="Rut">
                  <input type="text" id="edad_grupo1" name="edad_grupo1" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo1" name="ecivil_grupo1" class="span2">
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
                      <select id="parent_grupo1" name="parent_grupo1" class="span2">
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
                      </select>
                      <select id="prev_soc_grupo1" name="prev_soc_grupo1" class="span3">
                        <option value="0">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo1" name="prev_sal_grupo1" class="span3">
                        <option value="0">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">Otros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo1" name="niv_est_grupo1" class="span3">
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
                        <select id="act_grupo1" name="act_grupo1" class="span10">
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
                      <h6>Indique el promedio mensual de los últimos 8 meses (Enero - Agosto 2013), escriba los valores sin el signo $ y sin puntos Ej: 120000</h6>
                      <input type="text" id="sueldos_grupo1" name="sueldos_grupo1" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo1" name="hono_grupo1" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo1" name="retiro_grupo1" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo1" name="pen_grupo1" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo1" name="act_in_grupo1" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo1" name="otros_grupo1" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p><input class="btn btn-danger" type="button" id="agrega" value="+" />  Agregar integrante del grupo familiar</p>
                    <hr>
                </div> 
                    <div class="controls controls-row">     
                      <h6>Total número de integrantes del grupo familiar (incluído el alumno)</h6>
                      <input type="text" id="total" name="total" required class="span1" placeholder="Total">
                    </div>
                    <input class="btn btn-primary" type="button" id="enviar" value="Enviar Formulario" />
                    <input class="btn" type="button" id="limpiar" value="Borrar datos" />
              </div>
            </form>

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
