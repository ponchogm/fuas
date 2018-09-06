<?php
include('../conectar.php');
$correo=$_POST['correo'];
$rut=$_GET['var'];
//echo $becas;
//echo $rut;
//break;
//Inserta datos del alumno
$guardacorreo="UPDATE alumnos SET correo_personal ='$correo', fecha = now() WHERE rut = '$rut'";
if (!mysqli_query($con3,$guardacorreo))
  {
  die('Error: ' . mysqli_error($con3));
  }

mysqli_close($con3);
echo"<script>alert('Correo Guardado.');window.location.href=\"http://beneficios.umce.cl/correos/res.php?var=$rut&var2=$correo\"</script>";
?>