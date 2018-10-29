<?php
include('conectar.php');
$rut=$_GET['var2'];
$monto=$_POST['pos'];

if($monto != ""){

$actualizar_alumno="UPDATE alumnos SET monto_pos ='$monto' WHERE rut_alum = '$rut'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
}else{
	echo"<script>alert('El monto no debe venir vacío.');window.location.href=\"modificar.php?rut=$rut\"</script>";
}
?>