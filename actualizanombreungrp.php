<?php
include('conectar.php');
$rut=$_GET['var3'];
$id_alum=$_GET['var2'];
$nombre=$_POST['nombre'];
$ap_pat=$_POST['ap_pat'];
$ap_mat=$_POST['ap_mat'];
$parent=$_POST['parent'];

$actualizar_alumno="UPDATE un_grupo_familiar SET un_grupo_nombres='$nombre', un_grupo_ap_pat='$ap_pat', 
un_grupo_ap_mat='$ap_mat', un_grupo_parent='$parent' WHERE un_grupo_alum_id = '$id_alum' AND un_grupo_parent = '$parent'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>