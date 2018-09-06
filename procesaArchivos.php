<?php
include ('conectar.php');
$rut = $_GET['user'];

if(isset($_FILES['archivo'])){
    $errors= array();
	foreach($_FILES['archivo']['tmp_name'] as $key => $tmp_name ){
		$file_name = $key.$_FILES['archivo']['name'][$key];
		$file_size =$_FILES['archivo']['size'][$key];
		$file_tmp =$_FILES['archivo']['tmp_name'][$key];
		$file_type=$_FILES['archivo']['type'][$key];
        if($file_size > 8388608){
			$errors[]='El tamaño del archivo no debe ser mayor de 8 MB';
        }
        $query="INSERT INTO adjuntos (rut_alum, file_name, file_type, file_size) VALUES('$rut','$file_name','$file_type','$file_size')";
        if (!mysqli_query($con,$query))
  			{
  				die('Error: ' . mysqli_error($con));
  			}

        $desired_dir="adjuntos";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
            }else{									// rename the file if another one exist
                $new_dir="$desired_dir/".$file_name.time();
                 rename($file_tmp,$new_dir) ;
            }
		 mysql_query($query);
        }else{
                print_r($errors);
        }
    }
	if(empty($error)){
		echo "<script>alert('Archivos enviados exitosamente.');window.location.href=\"adjuntar.php?rut=".$rut."\"</script>";
	}
}
/////////////////////////////////////// Envio de correo ////////////////////////////////////////////

$correo = "luis.garcia@umce.cl, renovacion.beneficios@umce.cl";
$remitente  = $correo; // atención a la coma


// subject
$titulo = 'Ha llegado un nuevo documento para usted';

// message
$mensaje = '
<html>
<head>
<style type="text/css">
.pie {
        font-color: #f5f5f5;
        font-size:9px
        }
</style>
</head>
<body>
  <table border="0">
    <tr>
      <td><img src="http://sgd.umce.cl/bootstrap/img/Logo_umce_print.jpg"></td>
      <td>Beneficios UMCE</td>

    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>

    </tr>
    <tr>
      <td colspan="3">Ingrese al Sistema y obtendr&aacute; detalles del env&iacute;o</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>

    </tr>
    <tr>
      <td>Rut del emisor del documento:</td>
      <td><b>'. $rut .'</b></td>

    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</b></td>

    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>

    </tr>
    <tr>
      <td colspan="2">Para acceder al sistema puede hacer click <a href ="http://beneficios2014.umce.cl/sesion.php">aqu&iacute;</a></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" class="pie">Cordialmente Departamento de informática UMCE</td>
    </tr>
  </table>
</body>
</html>
';

// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Sistema de Beneficios UMCE <cumples@example.com>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
mail($remitente, $titulo, $mensaje, $cabeceras);

/*echo"<script type='text/javascript'>
            alert('Documento ingresado exitosamente!');window.location.href=\"new.php\"</script>";*/

?>