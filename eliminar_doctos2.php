<?php
include('conectar.php');
$rut=$_GET['rut'];
$id=$_GET['id'];
$fichero=$_GET['name'];

$resultado4="DELETE FROM adjuntos WHERE id='$id' AND rut_alum='$rut'";
if (!mysqli_query($con,$resultado4))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);

unlink("adjuntos/".$fichero);

echo"<script>alert('Registro Eliminado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>