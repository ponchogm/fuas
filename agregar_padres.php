<?php
include('conectar.php');

$un_grupo_alum_id=$_GET['var'];
//$un_grupo_id=$_GET['var2'];
$rut=$_GET['var3'];
$ungrp_rut=$_POST['un_grp_rut'];
$ap_pat =$_POST['ap_pat'];
$ap_mat=$_POST['ap_mat'];
$nombres=$_POST['nombre'];
$parent=$_POST['parent'];
$dir=$_POST['dirungrp'];
$com=$_POST['comungrp'];
$city=$_POST['cityungrp'];
$reg=$_POST['regungrp'];
$civil=$_POST['ecivilungrp'];
$act=$_POST['activungrp'];

$agregar_padre_ungrupo="INSERT INTO un_grupo_familiar (un_grupo_alum_id, un_grupo_rut, un_grupo_ap_pat, un_grupo_ap_mat, un_grupo_nombres, un_grupo_parent, un_grupo_direccion, un_grupo_comuna, un_grupo_ciudad, un_grupo_region, un_grupo_ecivil, un_grupo_actividad) VALUES ('$un_grupo_alum_id', '$ungrp_rut', '$ap_pat', '$ap_mat','$nombres','$parent','$dir','$com','$city','$reg','$civil','$act')";
if (!mysqli_query($con,$agregar_padre_ungrupo))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);

echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>