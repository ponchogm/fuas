<?
@session_start();
if($_SESSION["autentica"] != "YEP"){
	header("Location: index.php");
	exit();
}

?>