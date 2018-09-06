<?php
include('conectar.php');
$rut=$_GET['var3'];
$id_alum=$_GET['var2'];
$persona_rut=$_POST['persona_rut'];
$nombre=$_POST['nombre'];
$ap_pat=$_POST['ap_pat'];
$ap_mat=$_POST['ap_mat'];

$actualizar_alumno="UPDATE persona_grupo SET persona_nombres='$nombre', persona_ap_pat='$ap_pat', 
persona_ap_mat='$ap_mat' WHERE persona_rut = '$persona_rut' AND persona_id_alum = '$id_alum'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar2.php?rut=$rut\"</script>";
?>