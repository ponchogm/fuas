<?php 

function insertarGrupoFamiliar($id_alum,$persona_rut,$persona_ap_pat,$persona_ap_mat,$persona_nombres,$persona_edad,$persona_ecivil,$persona_parent,$persona_prev_soc,$persona_prev_sal,$persona_niv_est,$persona_act){
include('conectar.php');	 
	 $grp1="INSERT INTO persona_grupo(persona_id_alum, persona_rut, persona_ap_pat, persona_ap_mat, persona_nombres, persona_edad, persona_ecivil,
persona_parent, persona_prev_soc, persona_prev_sal, persona_niv_est, persona_act)
VALUES ('$id_alum','$persona_rut','$persona_ap_pat','$persona_ap_mat','$persona_nombres','$persona_edad','$persona_ecivil','$persona_parent',
  '$persona_prev_soc','$persona_prev_sal','$persona_niv_est','$persona_act')";
	 
	 if (!mysqli_query($con,$grp1))
  	{
  	die('Error: ' . mysqli_error($con));
  	}
}

function insertarIngresoGrupoFamiliar($id_alum,$persona_rut,$ingreso_sueldos,$ingreso_hono,$ingreso_retiro,$ingreso_pen,$ingreso_act_in,$ingreso_otros,$ingreso_total){
include('conectar.php');	 
	 $grp1="INSERT INTO ingresos(ingreso_alumn_id, ingreso_persona_grp_id, ingreso_sueldos, ingreso_honorario, ingreso_retiro, ingreso_pension,
ingreso_activ_indep, ingreso_otros, ingreso_total )
VALUES ('$id_alum','$persona_rut','$ingreso_sueldos','$ingreso_hono','$ingreso_retiro','$ingreso_pen','$ingreso_act_in','$ingreso_otros','$ingreso_total')";
	 
	 if (!mysqli_query($con,$grp1))
  	{
  	die('Error: ' . mysqli_error($con));
  	}
}

?>