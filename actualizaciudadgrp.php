<?php
include('conectar.php');
$rut=$_GET['var3'];
$id_alumno=$_GET['var2'];
$ciudadgrp=$_POST['ciudadgrp'];

$actualizar_alumno="UPDATE hogar SET hogar_ciudad ='$ciudadgrp' WHERE hogar_id_alum = '$id_alumno'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>