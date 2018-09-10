<?php
include ('conectar.php');
include ('seguridad2.php');
$rut='11837242-5';
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
        
        <div class="controls controls-row">
          <legend>Antecedentes del estudiante</legend>
          <h6>Llene cuidadosamente este formulario y revise el contenido antes de enviar</h6>       
          <?php 
        $resultado=$con->query("SELECT alumnos.*,carreras.* FROM alumnos, carreras  
        WHERE rut_alum ='$rut' AND cod_carrera_alum = codigo_car");
        
        while($row = $resultado->fetch_array(MYSQLI_ASSOC))
  {
    echo $row['rut_alum'];
    echo "<p>";
    echo $row['cod_carrera_alum'];
    echo "<table class='table table-hover table table-bordered'>
            <tr>
              <th class='span3'>Nombre</th>
              <th class='span2'>Rut</th>
              <th class='span2'>Fecha de Nac.</th>
              <th class='span2'>Año ingreso</th>
            </tr>
            <tr>
              <td>". $row['nombres_alum'] ." ". $row['ap_pat_alum'] ." ". $row['ap_mat_alum'] ."</td>
              <td>". $row['rut_alum'] ."</td>
              <td>". $row['fecha_nac'] ."</td>
              <td>". $row['anio_ingreso_alum'] ."</td>
            </tr>
            <tr>
              <th class='span3'>Dirección</th>
              <th class='span2'>Comuna</th>
              <th class='span2'>Teléfono</th>
              <th class='span2'>Email</th>
            </tr>
            <tr>
              <td><a data-toggle='modal' href='#divdir'>". $row['direccion_alum'] ."</a></td>
              <td><a data-toggle='modal' href='#divcomuna'>". $row['comuna_alum'] ."</a></td>
              <td><a data-toggle='modal' href='#divfono'>". $row['telefono_alum'] ."</a> - <a data-toggle='modal' href='#divcelu'>". $row['celular_alum'] ."</a></td>
              <td><a data-toggle='modal' href='#divmail'>". $row['correo_alum'] ."</a></td>
            </tr>
            <tr>
              <th>Nacionalidad</th>
              <th>Discapacidad</th>
              <th>Pueblo Originario</th>
            </tr>
            <tr>
              <td>". $row['nac_alum'] ."</td>
              <td>". $row['discap_alum'] ."</td>
              <td>". $row['pueb_orig_alum'] ."</td>
            </tr>
            <tr>
              <th>Carrera</th>
            </tr>
            <tr>
              <td>". $row['nombre_car'] ."</td>
            </tr>
          </table>
          
          </div>";
              }
            ?>
            <div class='controls controls-row'>
            <!-- Modal para actualizar Dirección-->
            <div id="divdir" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar dirección del alumno</h3>
                    </div>
                  <div class="modal-body">
                  <form name="dir" action="actualizadir.php?var2=<?phpecho $rut; ?>" method="post">
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
                  <form name="comuna" action="actualizacomuna.php?var2=<?phpecho $rut; ?>" method="post">
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
                  <form name="fono" action="actualizafijo.php?var2=<?phpecho $rut; ?>" method="post">
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
                  <form name="celu" action="actualizacel.php?var2=<?phpecho $rut; ?>" method="post">
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
                  <form name="mail" action="actualizamail.php?var2=<?phpecho $rut; ?>" method="post">
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
              <legend>Beneficios del estudiante</legend>
              <table class='table table-hover table table-bordered'>
                <tr>
                  <td>
                    <table span="6">
                      <tr>
                      <th>
                    Beneficios
                  </th>
                </tr>
            <?php  
              $resultado2=$con->query("SELECT alumnos.*,beneficios.*,becasycreditos.* 
              FROM alumnos, beneficios, becasycreditos 
              WHERE rut_alum ='$rut' AND id_alum = id_alum_bene AND id_beca_bene = id_becas");

              while($fila = $resultado2->fetch_array(MYSQLI_ASSOC))
            {
            $postula=$fila['postula_beca_alum'];
            echo "<tr><td>".utf8_encode($fila['becas_nombre'])."</td></tr>";
            }
          ?>
             </table>
           </td>
           <td>
             <table span="6">
                <tr>
                  <th>
                    Beca interna a la cual postula
                  </th>
                </tr>
                <tr>
                <td><?php echo $postula; ?></td>
              </tr>
             </table>
             </td>
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
              <td><a data-toggle='modal' href='#divdirgrp'><?phpecho $dirgrupo; ?></a></td>
              <td><a data-toggle='modal' href='#divcomgrp'><?phpecho $comunagrupo; ?></a></td>
              <td><a data-toggle='modal' href='#divcitygrp'><?phpecho $ciudadgrupo; ?></a></td>
              <td><a data-toggle='modal' href='#divfijogrp'><?phpecho $fonogrupo; ?></a></td>
            </tr>
          </table>
        </div>  
        <div class='controls controls-row'>
          <table class='table table-hover table table-bordered'>
            <tr>
              <th class='span3'>Condición de la vivienda</th>           
            </tr>
            <tr>
              <td><a data-toggle='modal' href='#divvivgrp'><?phpecho $viv_tipo; ?></a></td>   
            </tr>
          </table>

              <!-- Modal para actualizar Dirección del grupo fam-->
            <div id="divdirgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar dirección del grupo familiar</h3>
                    </div>
                  <div class="modal-body">
                  <form name="dirgrp" action="actualizadirgrp.php?var2=<?phpecho $rut; ?>" method="post">
                  <p>Escriba su dirección actual.</p>
                  <input type="text" id="dirgrp" name="dirgrp" class="span4">                
                  
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
               </div>
              </div>
              <!-- Fin Modal para actualizar Dirección del grupo fam-->
              <!-- Modal para actualizar Comuna del grupo fam-->
            <div id="divcomgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar comuna del grupo familiar</h3>
                    </div>
                  <div class="modal-body">
                  <form name="comgrp" action="actualizadir.php?var2=<?phpecho $rut; ?>" method="post">
                  <p>Escriba su comuna actual.</p>
                  <input type="text" id="comgrp" name="comgrp" class="span4">                
                  
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
               </div>
              </div>
              <!-- Fin Modal para actualizar Comuna del grupo fam-->
              <!-- Modal para actualizar Ciudad del grupo fam-->
            <div id="divcitygrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Ciudad del grupo familiar</h3>
                    </div>
                  <div class="modal-body">
                  <form name="citygrp" action="actualizadir.php?var2=<?phpecho $rut; ?>" method="post">
                  <p>Escriba su ciudad actual.</p>
                  <input type="text" id="citygrp" name="citygrp" class="span4">                
                  
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
               </div>
              </div>
              <!-- Fin Modal para actualizar Ciudad del grupo fam-->
              <!-- Modal para actualizar Teléfono del grupo fam-->
            <div id="divfijogrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar Teléfono fijo del grupo familiar</h3>
                    </div>
                  <div class="modal-body">
                  <form name="fijogrp" action="actualizadir.php?var2=<?phpecho $rut; ?>" method="post">
                  <p>Escriba su teléfono fijo actual.</p>
                  <input type="text" id="fijogrp" name="fijogrp" class="span4">                
                  
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
               </div>
              </div>
              <!-- Fin Modal para actualizar Teléfono del grupo fam-->
              <!-- Modal para actualizar Vivienda del grupo fam-->
            <div id="divvivgrp" class="modal hide fade in" style="display: none;">
              <div class="modal-header">
                <a data-dismiss="modal" class="close">×</a>
                   <h3>Actualizar condición de la vivienda</h3>
                    </div>
                  <div class="modal-body">
                  <form name="vivgrp" action="actualizadir.php?var2=<?phpecho $rut; ?>" method="post">
                  <p>Escriba su dirección actual.</p>
                  <input type="text" id="vivgrp" name="vivgrp" class="span4">                
                  
                  </div>
                <div class="modal-footer">
                <button class="btn btn-success" onclick="this.form.submit()">Actualizar</button>
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                </form>
               </div>
              </div>
              <!-- Fin Modal para actualizar Vivienda del grupo fam-->

        </div>
        <form name="alumnos_dae" method="post" action="inserta2.php">
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
