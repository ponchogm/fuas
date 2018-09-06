<?php
include('conectar.php');
$rut=$_GET['var3'];
$id_alum=$_GET['var2'];
$ingreso_sueldos=$_POST['sueldos'];
$ingreso_hono=$_POST['hono'];
$ingreso_pen=$_POST['pen'];
$ingreso_act_in=$_POST['act_in'];
$ingreso_otros=$_POST['otros'];
$ingreso_retiro=$_POST['retiro'];
$ingreso_total=$ingreso_sueldos + $ingreso_hono + $ingreso_pen + $ingreso_act_in + $ingreso_otros + $ingreso_retiro;
$persona_rut=$_POST['persona_rut'];

$actualizar_alumno="UPDATE ingresos SET ingreso_sueldos='$ingreso_sueldos', ingreso_honorario='$ingreso_hono', 
ingreso_retiro='$ingreso_retiro', ingreso_pension='$ingreso_pen', ingreso_activ_indep='$ingreso_act_in', 
ingreso_otros='$ingreso_otros',ingreso_total='$ingreso_total' WHERE ingreso_persona_grp_id = '$persona_rut'";
if (!mysqli_query($con,$actualizar_alumno))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar2.php?rut=$rut\"</script>";
?>