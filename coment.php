<?php
include ('conectar.php');
$coment = $_POST['comentario'];
$id_alum = $_POST['id_alum'];
$rut = $_POST['rut_alum'];
$fecha = time();

/*$res=$con->query("SELECT observaciones.* FROM observaciones WHERE '$id_alum' = id_alum_obs");
              $row = $res->fetch_array(MYSQLI_ASSOC);
              $com=$row['comentario'];
              if($com != "")
              {
           			$actualizar_coment="UPDATE observaciones SET comentario ='$coment' WHERE id_alum_obs = '$id_alum'";
					if (!mysqli_query($con,$actualizar_coment))
  						{
  							die('Error: ' . mysqli_error($con));
  						}
  				}else{*/
  					$grp2="INSERT INTO observaciones(id_alum_obs, comentario, fecha) VALUES ('$id_alum','$coment', FROM_UNIXTIME('$fecha'))";

	 					if (!mysqli_query($con,$grp2))
  						{
  						die('Error: ' . mysqli_error($con));
  						}
  				//}
echo"<script>alert('Registro Actualizado.');window.location.href=\"modificar.php?rut=$rut\"</script>";
?>