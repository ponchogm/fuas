<?php
//include ('seguridad.php');
include ('conectar.php');
$id_alum=$_GET['id'];
$rut=$_GET['rut'];
//Recibe antecedentes e ingresos del grupo familiar1
$persona_nombres=$_POST['nombre_grupo'];
$persona_ap_pat=$_POST['ap_pat_grupo'];
$persona_ap_mat=$_POST['ap_mat_grupo'];
$persona_rut=$_POST['rut_grupo'];
$persona_edad=$_POST['edad_grupo'];
$persona_ecivil=$_POST['ecivil_grupo'];
$persona_parent=$_POST['parent_grupo'];
$persona_prev_soc=$_POST['prev_soc_grupo'];
$persona_prev_sal=$_POST['prev_sal_grupo'];
$persona_niv_est=$_POST['niv_est_grupo'];
$persona_act=$_POST['act_grupo'];
//Recibe ingresos del grupo
$ingreso_sueldos=$_POST['sueldos_grupo'];
$ingreso_hono=$_POST['hono_grupo'];
$ingreso_retiro=$_POST['retiro_grupo'];
$ingreso_pen=$_POST['pen_grupo'];
$ingreso_act_in=$_POST['act_in_grupo'];
$ingreso_otros=$_POST['otros_grupo'];
$ingreso_total=$ingreso_sueldos + $ingreso_hono + $ingreso_pen + $ingreso_act_in + $ingreso_otros + $ingreso_retiro;


$grp1="INSERT INTO persona_grupo(persona_id_alum, persona_rut, persona_ap_pat, persona_ap_mat, persona_nombres, persona_edad, persona_ecivil,
persona_parent, persona_prev_soc, persona_prev_sal, persona_niv_est, persona_act)
VALUES ('$id_alum','$persona_rut','$persona_ap_pat','$persona_ap_mat','$persona_nombres','$persona_edad','$persona_ecivil','$persona_parent',
  '$persona_prev_soc','$persona_prev_sal','$persona_niv_est','$persona_act')";

	 if (!mysqli_query($con,$grp1))
  	{
  	die('Error: ' . mysqli_error($con));
  	}

$grp2="INSERT INTO ingresos(ingreso_alumn_id, ingreso_persona_grp_id, ingreso_sueldos, ingreso_honorario, ingreso_retiro, ingreso_pension,
ingreso_activ_indep, ingreso_otros, ingreso_total )
VALUES ('$id_alum','$persona_rut','$ingreso_sueldos','$ingreso_hono','$ingreso_retiro','$ingreso_pen','$ingreso_act_in','$ingreso_otros','$ingreso_total')";

	 if (!mysqli_query($con,$grp2))
  	{
  	die('Error: ' . mysqli_error($con));
  	}
header ("Location: ./form3.php?var=$rut");
?>