<?php
include('conectar.php');
$rut=$_GET['rut'];
$id=$_GET['var'];
$resultado4="DELETE FROM observaciones WHERE id='$id'";
if (!mysqli_query($con,$resultado4))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);


echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>