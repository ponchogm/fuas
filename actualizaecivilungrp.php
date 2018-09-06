<?php
include('conectar.php');
$rut=$_GET['var3'];
$id_alum=$_GET['var2'];
$ecivilungrp=$_POST['ecivilungrp'];
$parent=$_POST['parent'];


$actualizar_alumno="UPDATE un_grupo_familiar SET un_grupo_ecivil='$ecivilungrp' WHERE un_grupo_parent = '$parent' AND un_grupo_alum_id = '$id_alum'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>