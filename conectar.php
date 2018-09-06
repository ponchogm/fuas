<?php
//conexion a la base de datos
$con = new mysqli('localhost','root','umce123','alumnos_dae');
if (!$con)
  {
  die('Imposible conectar a la base de datos: ' . mysqli_error($con));
  }

  $con1 = new mysqli('localhost','root','umce123','dae_2014');
if (!$con1)
  {
  die('Imposible conectar a la base de datos: ' . mysqli_error($con1));
  }

  $con2 = new mysqli('localhost','root','umce123','dae_2015');
if (!$con2)
  {
  die('Imposible conectar a la base de datos: ' . mysqli_error($con2));
  }
  $con3 = new mysqli('localhost','root','umce123','base_correos_2017');
if (!$con3)
  {
  die('Imposible conectar a la base de datos: ' . mysqli_error($con2));
  }
?>