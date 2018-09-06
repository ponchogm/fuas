<?php
include('conectar.php');
$beca=$_POST['becas'];
$id_alum=$_GET['id_alum'];
$rut=$_GET['rut'];
$id_bene=$_GET['id_bene'];
echo $beca;
echo "-";
echo $id_alum;


$agrega_beca="INSERT INTO beneficios (id_alum_bene, id_beca_bene) VALUES ('$id_alum', '$beca')";
if (!mysqli_query($con,$agrega_beca))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Beca insertada con éxito.');window.location.href=\"modificar.php?rut=$rut\"</script>";

?>