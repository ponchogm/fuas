<?php
$serverName = "\\172.20.0.40\sqlexpress"; //serverName\instanceName
$connectionInfo = array( "Database"=>"ControlHorario", "UID"=>"sa", "PWD"=>"umce123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>