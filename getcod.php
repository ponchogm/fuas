<?php
include ('conectar.php');

$q=$_GET["q"];
//$q="5";
$resultado=$con->query("SELECT * FROM carreras WHERE codigo_car ='$q'");

while($row = $resultado->fetch_array(MYSQLI_ASSOC))
  {
  echo "<input class='span2' id='txtHint' type='text' placeholder='". $row['codigo_car'] ."'>"; 
  }

mysqli_close($mysqli);
?>