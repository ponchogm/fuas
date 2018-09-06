<?php
include ('seguridad.php');
include ('conectar.php');
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
    function OcultarCampo(){
      var contenedor = document.getElementById("addinput1");
        contenedor.style.display = "none";
        return true;
    }
    function OcultarCampo2(){
      var contenedor = document.getElementById("addinput2");
        contenedor.style.display = "none";
        return true;
    }
    function OcultarCampo3(){
      var contenedor = document.getElementById("addinput3");
        contenedor.style.display = "none";
        return true;
    }
    function OcultarCampo4(){
      var contenedor = document.getElementById("addinput4");
        contenedor.style.display = "none";
        return true;
    }
    function OcultarCampo5(){
      var contenedor = document.getElementById("addinput5");
        contenedor.style.display = "none";
        return true;
    }
    function OcultarCampo6(){
      var contenedor = document.getElementById("addinput6");
        contenedor.style.display = "none";
        return true;
    }
    function OcultarCampo7(){
      var contenedor = document.getElementById("addinput7");
        contenedor.style.display = "none";
        return true;
    }
    function OcultarCampo8(){
      var contenedor = document.getElementById("addinput8");
        contenedor.style.display = "none";
        return true;
    }
    function OcultarCampo9(){
      var contenedor = document.getElementById("addinput9");
        contenedor.style.display = "none";
        return true;
    }
	function OcultarCampo10(){
      var contenedor = document.getElementById("addinput10");
        contenedor.style.display = "none";
        return true;
    }
	function OcultarCampo11(){
      var contenedor = document.getElementById("addinput11");
        contenedor.style.display = "none";
        return true;
    }
	function OcultarCampo12(){
      var contenedor = document.getElementById("addinput12");
        contenedor.style.display = "none";
        return true;
    }
	function OcultarCampo13(){
      var contenedor = document.getElementById("addinput13");
        contenedor.style.display = "none";
        return true;
    }
	function OcultarCampo14(){
      var contenedor = document.getElementById("addinput14");
        contenedor.style.display = "none";
        return true;
    }
	function OcultarCampo15(){
      var contenedor = document.getElementById("addinput15");
        contenedor.style.display = "none";
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
          <li><a href="#">Universidad Metropolitana de Ciencias de la Educación - Dirección de asuntos estudiantiles</a></li>
        </ul>
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
              <h4 class="page-header">Antecedentes e ingresos del grupo familiar <h6>Ingrese estos datos por cada integrante del grupo familiar incluído usted mismo (Para agregar integrantes de su grupo familiar haga click en el link "Agregar Integrante")</h6></h4>

              <div id="addinput">
                  <p>
                    <h6>1</h6>
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
                  <input type="text" id="rut_grupo2" name="rut_grupo2" class="span2" placeholder="Rut">
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
                        <option "">Parentesco</option>
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
                      <input type="text" id="retiro_grupo2" name="retiro_grupo2" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo2" name="pen_grupo2" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo2" name="act_in_grupo2" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo2" name="otros_grupo2" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p>
                    <a href="#3" onclick="ActivarCampo2();">Agregar Integrante</a> | <a href="#2" onclick="OcultarCampo();">Eliminar integrante</a>
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
                  <input type="text" id="rut_grupo3" name="rut_grupo3" class="span2" placeholder="Rut">
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
                      <input type="text" id="retiro_grupo3" name="retiro_grupo3" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo3" name="pen_grupo3" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo3" name="act_in_grupo3" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo3" name="otros_grupo3" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p><a href="#4" onclick="ActivarCampo3();">Agregar Integrante</a> | <a href="#3" onclick="OcultarCampo2();">Eliminar integrante</a>
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
                  <input type="text" id="rut_grupo4" name="rut_grupo4" class="span2" placeholder="Rut">
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
                      <input type="text" id="retiro_grupo4" name="retiro_grupo4" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo4" name="pen_grupo4" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo4" name="act_in_grupo4" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo4" name="otros_grupo4" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p>
                      <a href="#5" onclick="ActivarCampo4();">Agregar Integrante</a> | <a href="#4" onclick="OcultarCampo3();">Eliminar integrante</a>
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
                  <input type="text" id="rut_grupo5" name="rut_grupo5" class="span2" placeholder="Rut">
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
                      <input type="text" id="retiro_grupo5" name="retiro_grupo5" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo5" name="pen_grupo5" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo5" name="act_in_grupo5" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo5" name="otros_grupo5" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p>
                      <a href="#6" onclick="ActivarCampo5();">Agregar Integrante</a> | <a href="#5" onclick="OcultarCampo4();">Eliminar integrante</a>
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
                  <input type="text" id="rut_grupo6" name="rut_grupo6" class="span2" placeholder="Rut">
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
                      <input type="text" id="retiro_grupo6" name="retiro_grupo6" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo6" name="pen_grupo6" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo6" name="act_in_grupo6" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo6" name="otros_grupo6" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p>
                      <a href="#7" onclick="ActivarCampo6();">Agregar Integrante</a> | <a href="#6" onclick="OcultarCampo5();">Eliminar integrante</a>
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
                  <input type="text" id="rut_grupo7" name="rut_grupo7" class="span2" placeholder="Rut">
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
                      <input type="text" id="retiro_grupo7" name="retiro_grupo7" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo7" name="pen_grupo7" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo7" name="act_in_grupo7" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo7" name="otros_grupo7" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p>
                      <a href="#8" onclick="ActivarCampo7();">Agregar Integrante</a> | <a href="#7" onclick="OcultarCampo6();">Eliminar integrante</a>
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
                  <input type="text" id="rut_grupo8" name="rut_grupo8" class="span2" placeholder="Rut">
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
                      <input type="text" id="retiro_grupo8" name="retiro_grupo8" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo8" name="pen_grupo8" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo8" name="act_in_grupo8" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo8" name="otros_grupo8" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p>
                      <a href="#9" onclick="ActivarCampo8();">Agregar Integrante</a> | <a href="#8" onclick="OcultarCampo7();">Eliminar integrante</a>
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
                  <input type="text" id="rut_grupo9" name="rut_grupo9" class="span2" placeholder="Rut">
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
                      <input type="text" id="retiro_grupo9" name="retiro_grupo9" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo9" name="pen_grupo9" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo9" name="act_in_grupo9" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo9" name="otros_grupo9" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p>
                      <a href="#10" onclick="ActivarCampo9();">Agregar Integrante</a> | <a href="#9" onclick="OcultarCampo8();">Eliminar integrante</a>
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
                  <input type="text" id="rut_grupo10" name="rut_grupo10" class="span2" placeholder="Rut">
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
                      <input type="text" id="retiro_grupo10" name="retiro_grupo10" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo10" name="pen_grupo10" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo10" name="act_in_grupo10" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo10" name="otros_grupo10" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p>
                    <a href="#11" onclick="ActivarCampo10();">Agregar Integrante</a> | <a href="#10" onclick="OcultarCampo9();">Eliminar integrante</a>
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
                  <input type="text" id="rut_grupo11" name="rut_grupo11" class="span2" placeholder="Rut">
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
                      <input type="text" id="retiro_grupo11" name="retiro_grupo11" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo11" name="pen_grupo11" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo11" name="act_in_grupo11" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo11" name="otros_grupo11" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p>
					           <a href="#12" onclick="ActivarCampo11();">Agregar Integrante</a> | <a href="#11" onclick="OcultarCampo10();">Eliminar integrante</a>
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
                  <input type="text" id="rut_grupo12" name="rut_grupo12" class="span2" placeholder="Rut">
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
                      <input type="text" id="retiro_grupo12" name="retiro_grupo12" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo12" name="pen_grupo12" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo12" name="act_in_grupo12" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo12" name="otros_grupo12" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p>
					           <a href="#13" onclick="ActivarCampo12();">Agregar Integrante</a> | <a href="#12" onclick="OcultarCampo11();">Eliminar integrante</a>
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
                  <input type="text" id="rut_grupo13" name="rut_grupo13" class="span2" placeholder="Rut">
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
                      <input type="text" id="retiro_grupo13" name="retiro_grupo13" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo13" name="pen_grupo13" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo13" name="act_in_grupo13" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo13" name="otros_grupo13" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p>
					           <a href="#14" onclick="ActivarCampo13();">Agregar Integrante</a> | <a href="#13" onclick="OcultarCampo12();">Eliminar integrante</a>
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
                  <input type="text" id="rut_grupo14" name="rut_grupo14" class="span2" placeholder="Rut">
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
                      <input type="text" id="retiro_grupo14" name="retiro_grupo14" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo14" name="pen_grupo14" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo14" name="act_in_grupo14" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo14" name="otros_grupo14" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p>
					           <a href="#15" onclick="ActivarCampo14();">Agregar Integrante</a> | <a href="#14" onclick="OcultarCampo13();">Eliminar integrante</a>
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
                  <input type="text" id="rut_grupo15" name="rut_grupo15" class="span2" placeholder="Rut">
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
                      <input type="text" id="retiro_grupo15" name="retiro_grupo15" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo15" name="pen_grupo15" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo15" name="act_in_grupo15" class="span2" placeholder="Actividades Indep.">
                      <input type="text" id="otros_grupo15" name="otros_grupo15" class="span2" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <p>
					               <a href="#15" onclick="OcultarCampo14();">Eliminar integrante</a>
                    </p>
                    <hr>
              </div>
                    <div class="controls controls-row">
                      <h6>Total número de integrantes del grupo familiar (incluído el alumno)</h6>
                      <input type="text" id="total" name="total" required class="span1" placeholder="Total">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Formulario</button>
                    <button type="reset" class="btn">Limpiar Datos</button>
              </div>

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
