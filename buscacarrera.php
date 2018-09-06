<?php
include('conectar.php');
$cod_car=$_POST['cod_car'];
	
	 $result=$con->query("SELECT count(*) AS total FROM alumnos WHERE cod_carrera_alum='$cod_car' AND direccion_alum !=''");
	 while($valor=$result->fetch_array(MYSQLI_ASSOC)){
			$total=$valor['total'];	 
		}
	//return $total;
	
	echo "<h6>Resultado <i class='icon-arrow-right'></i> Se han ingresado un total de: <b>".$total."</b> formularios para la carrera <b>".$cod_car."</b></h6>";
?>