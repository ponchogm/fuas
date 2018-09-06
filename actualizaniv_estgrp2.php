<?php
include('conectar.php');
$rut=$_GET['var3'];
$id_alum=$_GET['var2'];
$niv_estgrp=$_POST['niv_estgrp'];
$persona_rut=$_POST['persona_rut'];

$actualizar_alumno="UPDATE persona_grupo SET persona_niv_est='$niv_estgrp' WHERE persona_rut = '$persona_rut'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar2.php?rut=$rut\"</script>";
?>