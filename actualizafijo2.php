<?php
include('conectar.php');
$rut=$_GET['var2'];
$fijo=$_POST['fijo'];

$actualizar_alumno="UPDATE alumnos SET telefono_alum ='$fijo' WHERE rut_alum = '$rut'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar2.php?rut=$rut\"</script>";
?>