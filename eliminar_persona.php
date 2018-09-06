<?php
include('conectar.php');
$rut_persona=$_GET['var'];
$id_persona=$_GET['var2'];
$rut=$_GET['var3'];
$id_ingreso=$_GET['var4'];
$id_alum=$_GET['var0'];

echo $rut_persona;
echo $id_persona;

$resultado4="DELETE persona_grupo.*, ingresos.* FROM persona_grupo, ingresos WHERE id_persona_grupo = '$id_persona' AND 
id_ingreso = '$id_ingreso'";
if (!mysqli_query($con,$resultado4))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);


echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>