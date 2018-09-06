<?php
include('conectar.php');
$rut=$_GET['var2'];
$comuna=$_POST['comuna'];

$actualizar_alumno="UPDATE alumnos SET comuna_alum ='$comuna' WHERE rut_alum = '$rut'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>