<?php
include('conectar.php');
$rut=$_GET['var3'];
$id_alumno=$_GET['var2'];
$fonogrp=$_POST['fonogrp'];

$actualizar_alumno="UPDATE hogar SET hogar_telefono ='$fonogrp' WHERE hogar_id_alum = '$id_alumno'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar2.php?rut=$rut\"</script>";
?>