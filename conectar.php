<?php
//conexion a la base de datos
$con = new mysqli('localhost','root','','alumnos_dae');
if (!$con)
  {
  die('Imposible conectar a la base de datos: ' . mysqli_error($con));
  }

  $con1 = new mysqli('localhost','root','','dae_2014');
if (!$con1)
  {
  die('Imposible conectar a la base de datos: ' . mysqli_error($con1));
  }

  $con2 = new mysqli('localhost','root','','dae_2015');
if (!$con2)
  {
  die('Imposible conectar a la base de datos: ' . mysqli_error($con2));
  }
$con4 = new mysqli('localhost','root','','dae_2016');
if (!$con4)
  {
  die('Imposible conectar a la base de datos: ' . mysqli_error($con4));
  }
  $con5 = new mysqli('localhost','root','','dae_2017');
if (!$con5)
  {
  die('Imposible conectar a la base de datos: ' . mysqli_error($con5));
  }




  $con3 = new mysqli('localhost','root','','base_correos_2017');
if (!$con3)
  {
  die('Imposible conectar a la base de datos: ' . mysqli_error($con2));
  }
?>