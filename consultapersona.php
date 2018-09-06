<?php
function consultahogar($id_alum){
include('conectar.php');
	 $result=$con->query("SELECT count(*) AS total FROM hogar WHERE hogar_id_alum='$id_alum'");
	 while($valor=$result->fetch_array(MYSQLI_ASSOC)){
			$total=$valor['total'];	 
		}
	return $total;
}
function consultaPersona($personarut, $id_alum){
include('conectar.php');
	 $result=$con->query("SELECT count(*) AS total FROM persona_grupo WHERE persona_rut='$personarut' and persona_id_alum='$id_alum'");
	 while($valor=$result->fetch_array(MYSQLI_ASSOC)){
			$total=$valor['total'];	 
		}
	return $total;
}

function consultaIngresoPersona($rutpersona, $id_alum){
include('conectar.php');
	 $result=$con->query("SELECT count(*) AS total FROM ingresos WHERE ingreso_alumn_id='$id_alum' and ingreso_persona_grp_id='$rutpersona'");
	 while($valor=$result->fetch_array(MYSQLI_ASSOC)){
			$total=$valor['total'];	 
		}
	return $total;
}

?>