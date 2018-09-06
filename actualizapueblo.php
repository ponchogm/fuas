<?php
include('conectar.php');
$rut=$_GET['var2'];
$pueblo=$_POST['pueblo'];

$actualizar_alumno="UPDATE alumnos SET pueb_orig_alum ='$pueblo' WHERE rut_alum = '$rut'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>