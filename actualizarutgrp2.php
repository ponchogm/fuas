<?php
include('conectar.php');
$id_persona=$_GET['var'];
$id_alum=$_GET['var2'];
$rut=$_GET['var3'];

$rut_nuevo=$_POST['rut'];
$persona_rut=$_POST['persona_rut'];

$actualizar_alumno="UPDATE persona_grupo SET persona_rut='$rut_nuevo' WHERE persona_rut = '$persona_rut' AND persona_id_alum = '$id_alum'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

$actualizar_alumno2="UPDATE ingresos  SET ingreso_persona_grp_id='$rut_nuevo' WHERE ingreso_persona_grp_id = '$persona_rut' AND ingreso_alumn_id = '$id_alum'";
if (!mysqli_query($con,$actualizar_alumno2))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar2.php?rut=$rut\"</script>";
?>