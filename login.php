<?php
$username=$_POST['usuario'];
$password=$_POST['password'];
$pass=md5($password);
//conexion a la base de datos
$con = new mysqli('localhost','root','umce123','alumnos_dae');
if (!$con)
  {
  die('Imposible conectar a la base de datos: ' . mysqli_error($con));
  }

$resultado=$con->query("SELECT * FROM asistente WHERE nombre_usuario ='$username' and contrasena='$pass'");

while($row = $resultado->fetch_array(MYSQLI_ASSOC))
  {
  	echo $row['id_asistente'];
	echo $row['nivel'];
	echo $row['nombre_usuario'];
       echo $row['contrasena'];
  }

mysqli_close($mysqli);
  
?>
