<?php
include('conectar.php');

$un_grupo_alum_id=$_GET['var'];
$un_grupo_id=$_GET['var2'];
$rut=$_GET['var3'];

$resultado4="DELETE FROM un_grupo_familiar WHERE un_grupo_alum_id='$un_grupo_alum_id' AND un_grupo_id='$un_grupo_id'";
if (!mysqli_query($con,$resultado4))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);


echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>