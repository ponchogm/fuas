<?php
include('conectar.php');
include('insertargrupo.php');
include('consultapersona.php');
$rut_alum=$_GET['var'];
//
$dir_alum=$_POST['dir_alum'];
$comuna=$_POST['comuna'];
$telefono_alum=$_POST['telefono_alum'];
$cel_alum=$_POST['cel_alum'];
$correo_alum=$_POST['correo_alum'];
$nac_alum=$_POST['nac_alum'];
$porigin_alum=$_POST['porigin_alum'];
$discapacidad_alum=$_POST['discapacidad_alum'];
$beca_int=$_POST['beca_int'];//***********************preguntar por esto
$beca_otras=$_POST['otras'];
$dir_hogar=$_POST['dir_grupo'];
$comuna_hogar=$_POST['comuna_grupo'];
$ciudad_hogar=$_POST['ciudad_grupo'];
$telefono_hogar=$_POST['telefono_grupo'];
$vivienda_hogar=$_POST['vivienda_grupo'];
$ren=$_POST['ren'];
$pos=$_POST['pos'];

//Recibe datos para tabla un_grupo_fam Padre
$padre=$_POST['padre'];
$rut_padre_ungrupo=$_POST['rut_padre_ungrupo'];
$nombre_padre_ungrupo=$_POST['nombre_padre_ungrupo'];
$ap_pat_padre_ungrupo=$_POST['ap_pat_padre_ungrupo'];
$ap_mat_padre_ungrupo=$_POST['ap_mat_padre_ungrupo'];
$ecivil_padre_ungrupo=$_POST['ecivil_padre_ungrupo'];
$actividad_padre_ungrupo=$_POST['actividad_padre_ungrupo'];
$dir_padre_ungrupo=$_POST['dir_padre_ungrupo'];
$comuna_padre_ungrupo=$_POST['comuna_padre_ungrupo'];
$ciudad_padre_ungrupo=$_POST['ciudad_padre_ungrupo'];
$region_padre_ungrupo=$_POST['region_padre_ungrupo'];
//Recibe datos para tabla un_grupo_fam Madre
$madre=$_POST['madre'];
$rut_madre_ungrupo=$_POST['rut_madre_ungrupo'];
$nombre_madre_ungrupo=$_POST['nombre_madre_ungrupo'];
$ap_pat_madre_ungrupo=$_POST['ap_pat_madre_ungrupo'];
$ap_mat_madre_ungrupo=$_POST['ap_mat_madre_ungrupo'];
$ecivil_madre_ungrupo=$_POST['ecivil_madre_ungrupo'];
$actividad_madre_ungrupo=$_POST['actividad_madre_ungrupo'];
$dir_madre_ungrupo=$_POST['dir_madre_ungrupo'];
$comuna_madre_ungrupo=$_POST['comuna_madre_ungrupo'];
$ciudad_madre_ungrupo=$_POST['ciudad_madre_ungrupo'];
$region_madre_ungrupo=$_POST['region_madre_ungrupo'];
//Recibe antecedentes e ingresos del grupo familiar1
$persona_nombres1=$_POST['nombre_grupo1'];
$persona_ap_pat1=$_POST['ap_pat_grupo1'];
$persona_ap_mat1=$_POST['ap_mat_grupo1'];
$persona_rut1=$_POST['rut_grupo1'];
$persona_edad1=$_POST['edad_grupo1'];
$persona_ecivil1=$_POST['ecivil_grupo1'];
$persona_parent1=$_POST['parent_grupo1'];
$persona_prev_soc1=$_POST['prev_soc_grupo1'];
$persona_prev_sal1=$_POST['prev_sal_grupo1'];
$persona_niv_est1=$_POST['niv_est_grupo1'];
$persona_act1=$_POST['act_grupo1'];
//Recibe ingresos del grupo1
$ingreso_sueldos1=$_POST['sueldos_grupo1'];
$ingreso_hono1=$_POST['hono_grupo1'];
$ingreso_retiro1=$_POST['retiro_grupo1'];
$ingreso_pen1=$_POST['pen_grupo1'];
$ingreso_act_in1=$_POST['act_in_grupo1'];
$ingreso_otros1=$_POST['otros_grupo1'];
$ingreso_total1=$ingreso_sueldos1 + $ingreso_hono1 + $ingreso_pen1 + $ingreso_act_in1 + $ingreso_otros1 + $ingreso_retiro1;
//Recibe antecedentes e ingresos del grupo familiar2
$persona_nombres2=$_POST['nombre_grupo2'];
$persona_ap_pat2=$_POST['ap_pat_grupo2'];
$persona_ap_mat2=$_POST['ap_mat_grupo2'];
$persona_rut2=$_POST['rut_grupo2'];
$persona_edad2=$_POST['edad_grupo2'];
$persona_ecivil2=$_POST['ecivil_grupo2'];
$persona_parent2=$_POST['parent_grupo2'];
$persona_prev_soc2=$_POST['prev_soc_grupo2'];
$persona_prev_sal2=$_POST['prev_sal_grupo2'];
$persona_niv_est2=$_POST['niv_est_grupo2'];
$persona_act2=$_POST['act_grupo2'];
//Recibe ingresos del grupo2
$ingreso_sueldos2=$_POST['sueldos_grupo2'];
$ingreso_hono2=$_POST['hono_grupo2'];
$ingreso_retiro2=$_POST['retiro_grupo2'];
$ingreso_pen2=$_POST['pen_grupo2'];
$ingreso_act_in2=$_POST['act_in_grupo2'];
$ingreso_otros2=$_POST['otros_grupo2'];
$ingreso_total2=$ingreso_sueldos2 + $ingreso_hono2 + $ingreso_pen2 + $ingreso_act_in2 + $ingreso_otros2 + $ingreso_retiro2;
//Recibe antecedentes e ingresos del grupo familiar3
$persona_nombres3=$_POST['nombre_grupo3'];
$persona_ap_pat3=$_POST['ap_pat_grupo3'];
$persona_ap_mat3=$_POST['ap_mat_grupo3'];
$persona_rut3=$_POST['rut_grupo3'];
$persona_edad3=$_POST['edad_grupo3'];
$persona_ecivil3=$_POST['ecivil_grupo3'];
$persona_parent3=$_POST['parent_grupo3'];
$persona_prev_soc3=$_POST['prev_soc_grupo3'];
$persona_prev_sal3=$_POST['prev_sal_grupo3'];
$persona_niv_est3=$_POST['niv_est_grupo3'];
$persona_act3=$_POST['act_grupo3'];
//Recibe ingresos del grupo3
$ingreso_sueldos3=$_POST['sueldos_grupo3'];
$ingreso_hono3=$_POST['hono_grupo3'];
$ingreso_retiro3=$_POST['retiro_grupo3'];
$ingreso_pen3=$_POST['pen_grupo3'];
$ingreso_act_in3=$_POST['act_in_grupo3'];
$ingreso_otros3=$_POST['otros_grupo3'];
$ingreso_total3=$ingreso_sueldos3 + $ingreso_hono3 + $ingreso_pen3 + $ingreso_act_in3 + $ingreso_otros3 + $ingreso_retiro3;
//Recibe antecedentes e ingresos del grupo familiar4
$persona_nombres4=$_POST['nombre_grupo4'];
$persona_ap_pat4=$_POST['ap_pat_grupo4'];
$persona_ap_mat4=$_POST['ap_mat_grupo4'];
$persona_rut4=$_POST['rut_grupo4'];
$persona_edad4=$_POST['edad_grupo4'];
$persona_ecivil4=$_POST['ecivil_grupo4'];
$persona_parent4=$_POST['parent_grupo4'];
$persona_prev_soc4=$_POST['prev_soc_grupo4'];
$persona_prev_sal4=$_POST['prev_sal_grupo4'];
$persona_niv_est4=$_POST['niv_est_grupo4'];
$persona_act4=$_POST['act_grupo4'];
//Recibe ingresos del grupo4
$ingreso_sueldos4=$_POST['sueldos_grupo4'];
$ingreso_hono4=$_POST['hono_grupo4'];
$ingreso_retiro4=$_POST['retiro_grupo4'];
$ingreso_pen4=$_POST['pen_grupo4'];
$ingreso_act_in4=$_POST['act_in_grupo4'];
$ingreso_otros4=$_POST['otros_grupo4'];
$ingreso_total4=$ingreso_sueldos4 + $ingreso_hono4 + $ingreso_pen4 + $ingreso_act_in4 + $ingreso_otros4 + $ingreso_retiro4;
//Recibe antecedentes e ingresos del grupo familiar5
$persona_nombres5=$_POST['nombre_grupo5'];
$persona_ap_pat5=$_POST['ap_pat_grupo5'];
$persona_ap_mat5=$_POST['ap_mat_grupo5'];
$persona_rut5=$_POST['rut_grupo5'];
$persona_edad5=$_POST['edad_grupo5'];
$persona_ecivil5=$_POST['ecivil_grupo5'];
$persona_parent5=$_POST['parent_grupo5'];
$persona_prev_soc5=$_POST['prev_soc_grupo5'];
$persona_prev_sal5=$_POST['prev_sal_grupo5'];
$persona_niv_est5=$_POST['niv_est_grupo5'];
$persona_act5=$_POST['act_grupo5'];
//Recibe ingresos del grupo5
$ingreso_sueldos5=$_POST['sueldos_grupo5'];
$ingreso_hono5=$_POST['hono_grupo5'];
$ingreso_retiro5=$_POST['retiro_grupo5'];
$ingreso_pen5=$_POST['pen_grupo5'];
$ingreso_act_in5=$_POST['act_in_grupo5'];
$ingreso_otros5=$_POST['otros_grupo5'];
$ingreso_total5=$ingreso_sueldos5 + $ingreso_hono5 + $ingreso_pen5 + $ingreso_act_in5 + $ingreso_otros5 + $ingreso_retiro5;
//Recibe antecedentes e ingresos del grupo familiar6
$persona_nombres6=$_POST['nombre_grupo6'];
$persona_ap_pat6=$_POST['ap_pat_grupo6'];
$persona_ap_mat6=$_POST['ap_mat_grupo6'];
$persona_rut6=$_POST['rut_grupo6'];
$persona_edad6=$_POST['edad_grupo6'];
$persona_ecivil6=$_POST['ecivil_grupo6'];
$persona_parent6=$_POST['parent_grupo6'];
$persona_prev_soc6=$_POST['prev_soc_grupo6'];
$persona_prev_sal6=$_POST['prev_sal_grupo6'];
$persona_niv_est6=$_POST['niv_est_grupo6'];
$persona_act6=$_POST['act_grupo6'];
//Recibe ingresos del grupo6
$ingreso_sueldos6=$_POST['sueldos_grupo6'];
$ingreso_hono6=$_POST['hono_grupo6'];
$ingreso_retiro6=$_POST['retiro_grupo6'];
$ingreso_pen6=$_POST['pen_grupo6'];
$ingreso_act_in6=$_POST['act_in_grupo6'];
$ingreso_otros6=$_POST['otros_grupo6'];
$ingreso_total6=$ingreso_sueldos6 + $ingreso_hono6 + $ingreso_pen6 + $ingreso_act_in6 + $ingreso_otros6 + $ingreso_retiro6;
//Recibe antecedentes e ingresos del grupo familiar7
$persona_nombres7=$_POST['nombre_grupo7'];
$persona_ap_pat7=$_POST['ap_pat_grupo7'];
$persona_ap_mat7=$_POST['ap_mat_grupo7'];
$persona_rut7=$_POST['rut_grupo7'];
$persona_edad7=$_POST['edad_grupo7'];
$persona_ecivil7=$_POST['ecivil_grupo7'];
$persona_parent7=$_POST['parent_grupo7'];
$persona_prev_soc7=$_POST['prev_soc_grupo7'];
$persona_prev_sal7=$_POST['prev_sal_grupo7'];
$persona_niv_est7=$_POST['niv_est_grupo7'];
$persona_act7=$_POST['act_grupo7'];
//Recibe ingresos del grupo7
$ingreso_sueldos7=$_POST['sueldos_grupo7'];
$ingreso_hono7=$_POST['hono_grupo7'];
$ingreso_retiro7=$_POST['retiro_grupo7'];
$ingreso_pen7=$_POST['pen_grupo7'];
$ingreso_act_in7=$_POST['act_in_grupo7'];
$ingreso_otros7=$_POST['otros_grupo7'];
$ingreso_total7=$ingreso_sueldos7 + $ingreso_hono7 + $ingreso_pen7 + $ingreso_act_in7 + $ingreso_otros7 + $ingreso_retiro7;
//Recibe antecedentes e ingresos del grupo familiar1
$persona_nombres8=$_POST['nombre_grupo8'];
$persona_ap_pat8=$_POST['ap_pat_grupo8'];
$persona_ap_mat8=$_POST['ap_mat_grupo8'];
$persona_rut8=$_POST['rut_grupo8'];
$persona_edad8=$_POST['edad_grupo8'];
$persona_ecivil8=$_POST['ecivil_grupo8'];
$persona_parent8=$_POST['parent_grupo8'];
$persona_prev_soc8=$_POST['prev_soc_grupo8'];
$persona_prev_sal8=$_POST['prev_sal_grupo8'];
$persona_niv_est8=$_POST['niv_est_grupo8'];
$persona_act8=$_POST['act_grupo8'];
//Recibe ingresos del grupo8
$ingreso_sueldos8=$_POST['sueldos_grupo8'];
$ingreso_hono8=$_POST['hono_grupo8'];
$ingreso_retiro8=$_POST['retiro_grupo8'];
$ingreso_pen8=$_POST['pen_grupo8'];
$ingreso_act_in8=$_POST['act_in_grupo8'];
$ingreso_otros8=$_POST['otros_grupo8'];
$ingreso_total8=$ingreso_sueldos8 + $ingreso_hono8 + $ingreso_pen8 + $ingreso_act_in8 + $ingreso_otros8 + $ingreso_retiro8;
//Recibe antecedentes e ingresos del grupo familiar9
$persona_nombres9=$_POST['nombre_grupo9'];
$persona_ap_pat9=$_POST['ap_pat_grupo9'];
$persona_ap_mat9=$_POST['ap_mat_grupo9'];
$persona_rut9=$_POST['rut_grupo9'];
$persona_edad9=$_POST['edad_grupo9'];
$persona_ecivil9=$_POST['ecivil_grupo9'];
$persona_parent9=$_POST['parent_grupo9'];
$persona_prev_soc9=$_POST['prev_soc_grupo9'];
$persona_prev_sal9=$_POST['prev_sal_grupo9'];
$persona_niv_est9=$_POST['niv_est_grupo9'];
$persona_act9=$_POST['act_grupo9'];
//Recibe ingresos del grupo9
$ingreso_sueldos9=$_POST['sueldos_grupo9'];
$ingreso_hono9=$_POST['hono_grupo9'];
$ingreso_retiro9=$_POST['retiro_grupo9'];
$ingreso_pen9=$_POST['pen_grupo9'];
$ingreso_act_in9=$_POST['act_in_grupo9'];
$ingreso_otros9=$_POST['otros_grupo9'];
$ingreso_total9=$ingreso_sueldos9 + $ingreso_hono9 + $ingreso_pen9 + $ingreso_act_in9 + $ingreso_otros9 + $ingreso_retiro9;
//Recibe antecedentes e ingresos del grupo familiar10
$persona_nombres10=$_POST['nombre_grupo10'];
$persona_ap_pat10=$_POST['ap_pat_grupo10'];
$persona_ap_mat10=$_POST['ap_mat_grupo10'];
$persona_rut10=$_POST['rut_grupo10'];
$persona_edad10=$_POST['edad_grupo10'];
$persona_ecivil10=$_POST['ecivil_grupo10'];
$persona_parent10=$_POST['parent_grupo10'];
$persona_prev_soc10=$_POST['prev_soc_grupo10'];
$persona_prev_sal10=$_POST['prev_sal_grupo10'];
$persona_niv_est10=$_POST['niv_est_grupo10'];
$persona_act10=$_POST['act_grupo10'];
//Recibe ingresos del grupo10
$ingreso_sueldos10=$_POST['sueldos_grupo10'];
$ingreso_hono10=$_POST['hono_grupo10'];
$ingreso_retiro10=$_POST['retiro_grupo10'];
$ingreso_pen10=$_POST['pen_grupo10'];
$ingreso_act_in10=$_POST['act_in_grupo10'];
$ingreso_otros10=$_POST['otros_grupo10'];
$ingreso_total10=$ingreso_sueldos10 + $ingreso_hono10 + $ingreso_pen10 + $ingreso_act_in10 + $ingreso_otros10 + $ingreso_retiro10;
//Recibe antecedentes e ingresos del grupo familiar11
$persona_nombres11=$_POST['nombre_grupo11'];
$persona_ap_pat11=$_POST['ap_pat_grupo11'];
$persona_ap_mat11=$_POST['ap_mat_grupo11'];
$persona_rut11=$_POST['rut_grupo11'];
$persona_edad11=$_POST['edad_grupo11'];
$persona_ecivil11=$_POST['ecivil_grupo11'];
$persona_parent11=$_POST['parent_grupo11'];
$persona_prev_soc11=$_POST['prev_soc_grupo11'];
$persona_prev_sal11=$_POST['prev_sal_grupo11'];
$persona_niv_est11=$_POST['niv_est_grupo11'];
$persona_act11=$_POST['act_grupo11'];
//Recibe ingresos del grupo11
$ingreso_sueldos11=$_POST['sueldos_grupo11'];
$ingreso_hono11=$_POST['hono_grupo11'];
$ingreso_retiro11=$_POST['retiro_grupo11'];
$ingreso_pen11=$_POST['pen_grupo11'];
$ingreso_act_in11=$_POST['act_in_grupo11'];
$ingreso_otros11=$_POST['otros_grupo11'];
$ingreso_total11=$ingreso_sueldos11 + $ingreso_hono11 + $ingreso_pen11 + $ingreso_act_in11 + $ingreso_otros11 + $ingreso_retiro11;
//Recibe antecedentes e ingresos del grupo familiar12
$persona_nombres12=$_POST['nombre_grupo12'];
$persona_ap_pat12=$_POST['ap_pat_grupo12'];
$persona_ap_mat12=$_POST['ap_mat_grupo12'];
$persona_rut12=$_POST['rut_grupo12'];
$persona_edad12=$_POST['edad_grupo12'];
$persona_ecivil12=$_POST['ecivil_grupo12'];
$persona_parent12=$_POST['parent_grupo12'];
$persona_prev_soc12=$_POST['prev_soc_grupo12'];
$persona_prev_sal12=$_POST['prev_sal_grupo12'];
$persona_niv_est12=$_POST['niv_est_grupo12'];
$persona_act12=$_POST['act_grupo12'];
//Recibe ingresos del grupo12
$ingreso_sueldos12=$_POST['sueldos_grupo12'];
$ingreso_hono12=$_POST['hono_grupo12'];
$ingreso_retiro12=$_POST['retiro_grupo12'];
$ingreso_pen12=$_POST['pen_grupo12'];
$ingreso_act_in12=$_POST['act_in_grupo12'];
$ingreso_otros12=$_POST['otros_grupo12'];
$ingreso_total12=$ingreso_sueldos12 + $ingreso_hono12 + $ingreso_pen12 + $ingreso_act_in12 + $ingreso_otros12 + $ingreso_retiro12;
//Recibe antecedentes e ingresos del grupo familiar13
$persona_nombres13=$_POST['nombre_grupo13'];
$persona_ap_pat13=$_POST['ap_pat_grupo13'];
$persona_ap_mat13=$_POST['ap_mat_grupo13'];
$persona_rut13=$_POST['rut_grupo13'];
$persona_edad13=$_POST['edad_grupo13'];
$persona_ecivil13=$_POST['ecivil_grupo13'];
$persona_parent13=$_POST['parent_grupo13'];
$persona_prev_soc13=$_POST['prev_soc_grupo13'];
$persona_prev_sal13=$_POST['prev_sal_grupo13'];
$persona_niv_est13=$_POST['niv_est_grupo13'];
$persona_act13=$_POST['act_grupo13'];
//Recibe ingresos del grupo13
$ingreso_sueldos13=$_POST['sueldos_grupo13'];
$ingreso_hono13=$_POST['hono_grupo13'];
$ingreso_retiro13=$_POST['retiro_grupo13'];
$ingreso_pen13=$_POST['pen_grupo13'];
$ingreso_act_in13=$_POST['act_in_grupo13'];
$ingreso_otros13=$_POST['otros_grupo13'];
$ingreso_total13=$ingreso_sueldos13 + $ingreso_hono13 + $ingreso_pen13 + $ingreso_act_in13 + $ingreso_otros13 + $ingreso_retiro13;
//Recibe antecedentes e ingresos del grupo familiar14
$persona_nombres14=$_POST['nombre_grupo14'];
$persona_ap_pat14=$_POST['ap_pat_grupo14'];
$persona_ap_mat14=$_POST['ap_mat_grupo14'];
$persona_rut14=$_POST['rut_grupo14'];
$persona_edad14=$_POST['edad_grupo14'];
$persona_ecivil14=$_POST['ecivil_grupo14'];
$persona_parent14=$_POST['parent_grupo14'];
$persona_prev_soc14=$_POST['prev_soc_grupo14'];
$persona_prev_sal14=$_POST['prev_sal_grupo14'];
$persona_niv_est14=$_POST['niv_est_grupo14'];
$persona_act14=$_POST['act_grupo14'];
//Recibe ingresos del grupo14
$ingreso_sueldos14=$_POST['sueldos_grupo14'];
$ingreso_hono14=$_POST['hono_grupo14'];
$ingreso_retiro14=$_POST['retiro_grupo14'];
$ingreso_pen14=$_POST['pen_grupo14'];
$ingreso_act_in14=$_POST['act_in_grupo14'];
$ingreso_otros14=$_POST['otros_grupo14'];
$ingreso_total14=$ingreso_sueldos14 + $ingreso_hono14 + $ingreso_pen14 + $ingreso_act_in14 + $ingreso_otros14 + $ingreso_retiro14;
//Recibe antecedentes e ingresos del grupo familiar15
$persona_nombres15=$_POST['nombre_grupo15'];
$persona_ap_pat15=$_POST['ap_pat_grupo15'];
$persona_ap_mat15=$_POST['ap_mat_grupo15'];
$persona_rut15=$_POST['rut_grupo15'];
$persona_edad15=$_POST['edad_grupo15'];
$persona_ecivil15=$_POST['ecivil_grupo15'];
$persona_parent15=$_POST['parent_grupo15'];
$persona_prev_soc15=$_POST['prev_soc_grupo15'];
$persona_prev_sal15=$_POST['prev_sal_grupo15'];
$persona_niv_est15=$_POST['niv_est_grupo15'];
$persona_act15=$_POST['act_grupo15'];
//Recibe ingresos del grupo15
$ingreso_sueldos15=$_POST['sueldos_grupo15'];
$ingreso_hono15=$_POST['hono_grupo15'];
$ingreso_retiro15=$_POST['retiro_grupo15'];
$ingreso_pen15=$_POST['pen_grupo15'];
$ingreso_act_in15=$_POST['act_in_grupo15'];
$ingreso_otros15=$_POST['otros_grupo15'];
$ingreso_total15=$ingreso_sueldos15 + $ingreso_hono15 + $ingreso_pen15 + $ingreso_act_in15 + $ingreso_otros15 + $ingreso_retiro15;

$total=$_POST['total'];

if($ren != ""){
	$ren_pos = "1";
}
if($pos != ""){
	$ren_pos = "2";
}
if($ren != "" && $pos != ""){
	$ren_pos = "3";
}

$resultado=$con->query("SELECT id_alum, rut_alum FROM alumnos WHERE rut_alum='$rut_alum'");
	while($row=$resultado->fetch_array(MYSQLI_ASSOC))
	{

	  $id_alum=$row['id_alum'];

	}


//echo $id_alum;
/*
//Inserta datos del alumno
$sql="INSERT INTO alumnos (direccion_alum, comuna_alum, telefono_alum, celular_alum, correo_alum, nac_alum,
	pueb_orig_alum, discap_alum, postula_beca_alum )
VALUES
('$dir_alum','$comuna','$telefono_alum','$cel_alum','$correo_alum','$nac_alum','$porigin_alum','$discapacidad_alum','$beca_int')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
*/

//Actualiza datos del alumno

$sql="UPDATE alumnos SET direccion_alum ='$dir_alum', comuna_alum ='$comuna', telefono_alum ='$telefono_alum',
celular_alum ='$cel_alum', correo_alum ='$correo_alum', nac_alum ='$nac_alum', pueb_orig_alum ='$porigin_alum',
renueva_postula = '$ren_pos', discap_alum ='$discapacidad_alum', postula_beca_alum ='$beca_int', otras_becas_alum = '$beca_otras'
WHERE rut_alum = '$rut_alum' AND id_alum = '$id_alum'";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

//inserta datos de las becas
/*
foreach($_POST['becas'] as $index => $val){
$q1="INSERT INTO beneficios (id_beca_bene, id_alum_bene) VALUES('$val','$id_alum')";
$r = mysqli_query($con,$q1);
}
*/

//Inserta datos del hogar familiar
if(consultahogar($id_alum)==0){
$sql2="INSERT INTO hogar(hogar_id_alum, hogar_dir, hogar_comuna, hogar_ciudad, hogar_telefono, hogar_vivienda)
VALUES ('$id_alum','$dir_hogar','$comuna_hogar','$ciudad_hogar','$telefono_hogar','$vivienda_hogar')";
if (!mysqli_query($con,$sql2))
  {
  die('Error: ' . mysqli_error($con));
  }
}
//Inserta datos de los padres que no son del grupo familiar
  if (!empty($rut_padre_ungrupo) && !empty($ap_pat_padre_ungrupo) &&!empty($nombre_padre_ungrupo)){
$sql3="INSERT INTO un_grupo_familiar(un_grupo_alum_id, un_grupo_rut, un_grupo_ap_pat, un_grupo_ap_mat, un_grupo_nombres, un_grupo_parent,
un_grupo_direccion, un_grupo_comuna, un_grupo_ciudad, un_grupo_region, un_grupo_ecivil, un_grupo_actividad )
VALUES
('$id_alum','$rut_padre_ungrupo','$ap_pat_padre_ungrupo','$ap_mat_padre_ungrupo','$nombre_padre_ungrupo','$padre',
'$dir_padre_ungrupo','$comuna_padre_ungrupo','$ciudad_padre_ungrupo','$region_padre_ungrupo','$ecivil_padre_ungrupo','$actividad_padre_ungrupo')";
if (!mysqli_query($con,$sql3))
  {
  die('Error: ' . mysqli_error($con));
  }
  }
  //Inserta datos de los padres que no son del grupo familiar
  if (!empty($rut_madre_ungrupo) && !empty($ap_pat_madre_ungrupo) &&!empty($nombre_madre_ungrupo)){
$sql4="INSERT INTO un_grupo_familiar(un_grupo_alum_id, un_grupo_rut, un_grupo_ap_pat, un_grupo_ap_mat, un_grupo_nombres, un_grupo_parent,
un_grupo_direccion, un_grupo_comuna, un_grupo_ciudad, un_grupo_region, un_grupo_ecivil, un_grupo_actividad )
VALUES
('$id_alum','$rut_madre_ungrupo','$ap_pat_madre_ungrupo','$ap_mat_madre_ungrupo','$nombre_madre_ungrupo','$madre',
'$dir_madre_ungrupo','$comuna_madre_ungrupo','$ciudad_madre_ungrupo','$region_madre_ungrupo','$ecivil_madre_ungrupo','$actividad_madre_ungrupo')";
if (!mysqli_query($con,$sql4))
  {
  die('Error: ' . mysqli_error($con));
  }
  }
//Inserta datos del primer integrante del grupo familiar1
if (!empty($persona_rut1)){

	if(consultaPersona($persona_rut1,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut1,$persona_ap_pat1,$persona_ap_mat1,$persona_nombres1,$persona_edad1,$persona_ecivil1,$persona_parent1,$persona_prev_soc1,$persona_prev_sal1,$persona_niv_est1,$persona_act1);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar1
if (!empty($persona_rut1)){
	if(consultaIngresoPersona($persona_rut1,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut1,$ingreso_sueldos1,$ingreso_hono1,$ingreso_retiro1,$ingreso_pen1,$ingreso_act_in1,$ingreso_otros1,$ingreso_total1);
	}
}
//Inserta datos del primer integrante del grupo familiar2
if (!empty($persona_rut2)){

	if(consultaPersona($persona_rut2,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut2,$persona_ap_pat2,$persona_ap_mat2,$persona_nombres2,$persona_edad2,$persona_ecivil2,$persona_parent2,$persona_prev_soc2,$persona_prev_sal2,$persona_niv_est2,$persona_act2);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar2
if (!empty($persona_rut2)){
	if(consultaIngresoPersona($persona_rut2,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut2,$ingreso_sueldos2,$ingreso_hono2,$ingreso_retiro2,$ingreso_pen2,$ingreso_act_in2,$ingreso_otros2,$ingreso_total2);
	}
}
//Inserta datos del primer integrante del grupo familiar3
if (!empty($persona_rut3)){

	if(consultaPersona($persona_rut3,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut3,$persona_ap_pat3,$persona_ap_mat3,$persona_nombres3,$persona_edad3,$persona_ecivil3,$persona_parent3,$persona_prev_soc3,$persona_prev_sal3,$persona_niv_est3,$persona_act3);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar3
if (!empty($persona_rut3)){
	if(consultaIngresoPersona($persona_rut3,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut3,$ingreso_sueldos3,$ingreso_hono3,$ingreso_retiro3,$ingreso_pen3,$ingreso_act_in3,$ingreso_otros3,$ingreso_total3);
	}
}
//Inserta datos del primer integrante del grupo familiar4
if (!empty($persona_rut4)){

	if(consultaPersona($persona_rut4,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut4,$persona_ap_pat4,$persona_ap_mat4,$persona_nombres4,$persona_edad4,$persona_ecivil4,$persona_parent4,$persona_prev_soc4,$persona_prev_sal4,$persona_niv_est4,$persona_act4);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar4
if (!empty($persona_rut4)){
	if(consultaIngresoPersona($persona_rut4,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut4,$ingreso_sueldos4,$ingreso_hono4,$ingreso_retiro4,$ingreso_pen4,$ingreso_act_in4,$ingreso_otros4,$ingreso_total4);
	}
}
//Inserta datos del primer integrante del grupo familiar5
if (!empty($persona_rut5)){

	if(consultaPersona($persona_rut5,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut5,$persona_ap_pat5,$persona_ap_mat5,$persona_nombres5,$persona_edad5,$persona_ecivil5,$persona_parent5,$persona_prev_soc5,$persona_prev_sal5,$persona_niv_est5,$persona_act5);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar5
if (!empty($persona_rut5)){
	if(consultaIngresoPersona($persona_rut5,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut5,$ingreso_sueldos5,$ingreso_hono5,$ingreso_retiro5,$ingreso_pen5,$ingreso_act_in5,$ingreso_otros5,$ingreso_total5);
	}
}
//Inserta datos del primer integrante del grupo familiar6
if (!empty($persona_rut6)){

	if(consultaPersona($persona_rut6,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut6,$persona_ap_pat6,$persona_ap_mat6,$persona_nombres6,$persona_edad6,$persona_ecivil6,$persona_parent6,$persona_prev_soc6,$persona_prev_sal6,$persona_niv_est6,$persona_act6);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar6
if (!empty($persona_rut6)){
	if(consultaIngresoPersona($persona_rut6,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut6,$ingreso_sueldos6,$ingreso_hono6,$ingreso_retiro6,$ingreso_pen6,$ingreso_act_in6,$ingreso_otros6,$ingreso_total6);
	}
}
//Inserta datos del primer integrante del grupo familiar7
if (!empty($persona_rut7)){

	if(consultaPersona($persona_rut7,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut7,$persona_ap_pat7,$persona_ap_mat7,$persona_nombres7,$persona_edad7,$persona_ecivil7,$persona_parent7,$persona_prev_soc7,$persona_prev_sal7,$persona_niv_est7,$persona_act7);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar7
if (!empty($persona_rut7)){
	if(consultaIngresoPersona($persona_rut7,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut7,$ingreso_sueldos7,$ingreso_hono7,$ingreso_retiro7,$ingreso_pen7,$ingreso_act_in7,$ingreso_otros7,$ingreso_total7);
	}
}
//Inserta datos del primer integrante del grupo familiar8
if (!empty($persona_rut8)){

	if(consultaPersona($persona_rut8,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut8,$persona_ap_pat8,$persona_ap_mat8,$persona_nombres8,$persona_edad8,$persona_ecivil8,$persona_parent8,$persona_prev_soc8,$persona_prev_sal8,$persona_niv_est8,$persona_act8);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar8
if (!empty($persona_rut8)){
	if(consultaIngresoPersona($persona_rut8,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut8,$ingreso_sueldos8,$ingreso_hono8,$ingreso_retiro8,$ingreso_pen8,$ingreso_act_in8,$ingreso_otros8,$ingreso_total8);
	}
}
//Inserta datos del primer integrante del grupo familiar9
if (!empty($persona_rut9)){

	if(consultaPersona($persona_rut9,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut9,$persona_ap_pat9,$persona_ap_mat9,$persona_nombres9,$persona_edad9,$persona_ecivil9,$persona_parent9,$persona_prev_soc9,$persona_prev_sal9,$persona_niv_est9,$persona_act9);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar9
if (!empty($persona_rut9)){
	if(consultaIngresoPersona($persona_rut9,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut9,$ingreso_sueldos9,$ingreso_hono9,$ingreso_retiro9,$ingreso_pen9,$ingreso_act_in9,$ingreso_otros9,$ingreso_total9);
	}
}
//Inserta datos del primer integrante del grupo familiar10
if (!empty($persona_rut10)){

	if(consultaPersona($persona_rut10,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut10,$persona_ap_pat10,$persona_ap_mat10,$persona_nombres10,$persona_edad10,$persona_ecivil10,$persona_parent10,$persona_prev_soc10,$persona_prev_sal10,$persona_niv_est10,$persona_act10);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar10
if (!empty($persona_rut10)){
	if(consultaIngresoPersona($persona_rut10,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut10,$ingreso_sueldos10,$ingreso_hono10,$ingreso_retiro10,$ingreso_pen10,$ingreso_act_in10,$ingreso_otros10,$ingreso_total10);
	}
}
//Inserta datos del primer integrante del grupo familiar11
if (!empty($persona_rut11)){

	if(consultaPersona($persona_rut11,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut11,$persona_ap_pat11,$persona_ap_mat11,$persona_nombres11,$persona_edad11,$persona_ecivil11,$persona_parent11,$persona_prev_soc11,$persona_prev_sal11,$persona_niv_est11,$persona_act11);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar11
if (!empty($persona_rut11)){
	if(consultaIngresoPersona($persona_rut11,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut11,$ingreso_sueldos11,$ingreso_hono11,$ingreso_retiro11,$ingreso_pen11,$ingreso_act_in11,$ingreso_otros11,$ingreso_total11);
	}
}
//Inserta datos del primer integrante del grupo familiar12
if (!empty($persona_rut12)){

	if(consultaPersona($persona_rut12,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut12,$persona_ap_pat12,$persona_ap_mat12,$persona_nombres12,$persona_edad12,$persona_ecivil12,$persona_parent12,$persona_prev_soc12,$persona_prev_sal12,$persona_niv_est12,$persona_act12);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar12
if (!empty($persona_rut12)){
	if(consultaIngresoPersona($persona_rut12,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut12,$ingreso_sueldos12,$ingreso_hono12,$ingreso_retiro12,$ingreso_pen12,$ingreso_act_in12,$ingreso_otros12,$ingreso_total12);
	}
}
//Inserta datos del primer integrante del grupo familiar13
if (!empty($persona_rut13)){

	if(consultaPersona($persona_rut13,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut13,$persona_ap_pat13,$persona_ap_mat13,$persona_nombres13,$persona_edad13,$persona_ecivil13,$persona_parent13,$persona_prev_soc13,$persona_prev_sal13,$persona_niv_est13,$persona_act13);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar13
if (!empty($persona_rut13)){
	if(consultaIngresoPersona($persona_rut13,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut13,$ingreso_sueldos13,$ingreso_hono13,$ingreso_retiro13,$ingreso_pen13,$ingreso_act_in13,$ingreso_otros13,$ingreso_total13);
	}
}
//Inserta datos del primer integrante del grupo familiar14
if (!empty($persona_rut14)){

	if(consultaPersona($persona_rut14,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut14,$persona_ap_pat14,$persona_ap_mat14,$persona_nombres14,$persona_edad14,$persona_ecivil14,$persona_parent14,$persona_prev_soc14,$persona_prev_sal14,$persona_niv_est14,$persona_act14);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar14
if (!empty($persona_rut14)){
	if(consultaIngresoPersona($persona_rut14,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut14,$ingreso_sueldos14,$ingreso_hono14,$ingreso_retiro14,$ingreso_pen14,$ingreso_act_in14,$ingreso_otros14,$ingreso_total14);
	}
}
//Inserta datos del primer integrante del grupo familiar15
if (!empty($persona_rut15)){

	if(consultaPersona($persona_rut15,$id_alum)==0){
		insertarGrupoFamiliar($id_alum,$persona_rut15,$persona_ap_pat15,$persona_ap_mat15,$persona_nombres15,$persona_edad15,$persona_ecivil15,$persona_parent15,$persona_prev_soc15,$persona_prev_sal15,$persona_niv_est15,$persona_act15);
		}
	}
//Inserta datos de ingresos del primer integrante del grupo familiar15
if (!empty($persona_rut15)){
	if(consultaIngresoPersona($persona_rut15,$id_alum)==0){
	insertarIngresoGrupoFamiliar($id_alum,$persona_rut15,$ingreso_sueldos15,$ingreso_hono15,$ingreso_retiro15,$ingreso_pen15,$ingreso_act_in15,$ingreso_otros15,$ingreso_total15);
	}
}


       echo"<script type='text/javascript'>
            alert('Datos insertados con éxito!');
        window.location.href=\"print_formalum.php?var7=$rut_alum\"</script>";

?>