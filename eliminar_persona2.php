<?php
include('conectar.php');
$rut_persona=$_GET['var'];
$id_persona=$_GET['var2'];
$id_ingreso=$_GET['var4'];

//echo $rut_persona;

$res1="DELETE persona_grupo.* FROM persona_grupo WHERE id_persona_grupo = '$id_persona' AND persona_rut = '$rut_persona'";
if (!mysqli_query($con,$res1))
  {
  die('Error: ' . mysqli_error($con));
  }
$res2="DELETE ingresos.* FROM ingresos WHERE id_ingreso = '$id_ingreso' AND ingreso_persona_grp_id = '$rut_persona'";
if (!mysqli_query($con,$res2))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);

echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar2.php?rut=$rut\"</script>";
?>