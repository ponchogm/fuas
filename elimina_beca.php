<?php
include('conectar.php');
$rut=$_GET['rut'];
$id_alum=$_GET['id_alum'];
$beca=$_GET['beca'];


$eliminar="DELETE FROM beneficios WHERE id_alum_bene ='$id_alum' AND id_beca_bene = '$beca'";
if (!mysqli_query($con,$eliminar))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Beca Eliminada.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>