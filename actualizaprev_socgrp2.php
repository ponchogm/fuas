<?php
include('conectar.php');
$rut=$_GET['var3'];
$id_alum=$_GET['var2'];
$prev_socgrp=$_POST['prev_socgrp'];
$persona_rut=$_POST['persona_rut'];

$actualizar_alumno="UPDATE persona_grupo SET persona_prev_soc='$prev_socgrp' WHERE persona_rut = '$persona_rut'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar2.php?rut=$rut\"</script>";
?>