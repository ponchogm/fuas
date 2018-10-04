<?php
include ('seguridad.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Beneficios - Universidad Metropolitana de Ciencias de la Educación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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
      span{color:#f00;}
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <script>
function enviar_formulario(){
   document.form1.submit()
}
</script>
<script language="JavaScript"><!--
function validaRut(rut){
 var rexp = new RegExp(/^([0-9])+\-([kK0-9])+$/);
 if(rut.match(rexp)){
     var RUT = rut.split("-");
     var elRut = RUT[0].split('');
     var factor = 2;
     var suma = 0;
     var dv;
     for(i=(elRut.length-1); i>=0; i--){
         factor = factor > 7 ? 2 : factor;
         suma += parseInt(elRut[i])*parseInt(factor++);
     }
     dv = 11 -(suma % 11);
     if(dv == 11){
         dv = 0;
     }else if (dv == 10){
         dv = "k";
     }

     if(dv == RUT[1].toLowerCase()){
         //alert("El rut es válido!!");
         return true;
     }else{
         alert("El rut es incorrecto");
         return false;
     }
 }else{
     alert("Formato incorrecto. Recuerde que el formato correcto es 12345678-9");
     return false;
 }
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
            <li><a href="form.php"><i class="icon-plus"></i> Ingresar nuevo</a></li>
            <li><a href="historico.php">Histórico</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#">Ingrese RUT</a></li>

          </ul>
          <form name="form1" class="navbar-search pull-left" action="hero2.php" method="post">
            <input type="text" class="search-query span2" id="rut" name="rut" placeholder="Formato: 12345678-9" onkeypress="if (event.keyCode == 13) enviar_formulario()">
          </form>
          <span id="mensaje"></span>
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
        <div class="span8" style="text-align:center"><h3>Sistema de Acreditación Socioeconómica</h3></div>
        <div class="span8" style="text-align:center"><h3>2018-2019</h3><p><h7>(Conforme a la Ley N° 19.287 de 1994 y al Reglamento aprobado por el Decreto Supremo N°938 del Ministerio de Educación del 13 de Diciembre de 1994)</h7></div>
      </div>
      <!-- Comienzo del formulario UMCE por Luis García Manzo -->
</div> <!-- /container -->
      <hr>
      <div class="container pagination-centered">

      <!-- <h6>¿Quieres saber cuantos alumnos por carrera ya han llenado el formulario ?</h6> -->
       <p>
       <center>
        <!-- <table>
          <tr>
            <td>
              <form name="busca" id="buscacarrera" method="post" action="hero.php?page=buscacarrera" class="well form-inline">
                Código de carrera:
                <input type="text" id="cod_car" name="cod_car">
                <button type="submit" class="btn btn-primary">buscar</button>
              </form>
            </td>
          <tr>
           <td>
              <?php
              if(isset($_GET['page'])){
                $page = $_GET['page'];
              include($page.".php");
              }
                else
              echo "<h6>Resultado <i class='icon-arrow-right'></i></h6>";
        
              ?>
                </td>
              </tr>
            </tr>
          </table> -->
          </center>
          <p>
          <p>
        <img src="bootstrap/img/UMCE-820x385.jpg" class="img-polaroid" style="text-align:center">
        <footer>
          <br>
          <br>
          <br>
          <br>
          <br>
        <p>&copy; Informática - UMCE 2018</p>
        </footer>
      </div>
  </body>
</html>
