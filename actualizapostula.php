<?php
include('conectar.php');
$rut=$_GET['var2'];
$postula=$_POST['postula'];

$actualizar_alumno="UPDATE alumnos SET postula_beca_alum ='$postula' WHERE rut_alum = '$rut'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>