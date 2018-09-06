<?php
include('conectar.php');
$id_persona=$_GET['var'];
$rut=$_GET['var3'];
$id_alum=$_GET['var2'];
$rut_nuevo=$_POST['rut'];
$persona_rut=$_POST['persona_rut'];

$actualizar_alumno="UPDATE persona_grupo SET persona_rut='$rut_nuevo' WHERE id_persona_grupo = '$id_persona'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

$actualizar_alumno2="UPDATE ingresos  SET ingreso_persona_grp_id='$rut_nuevo' WHERE id_ingreso = '$id_persona'";
if (!mysqli_query($con,$actualizar_alumno2))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>