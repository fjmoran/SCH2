<?php
	error_reporting(E_ALL);
	
	require_once("CreaConnv2.php");
	require_once("auth.php");

	$pos = strpos($_POST['table'],".") + 1;
	$tabla = substr($_POST['table'],$pos);
	$activo = "activo".$tabla;
	$id = "id".$tabla;
	
	
	$update_query = "update ".$_POST['table']." set ".$activo."=".$_POST[$activo]." where ".$id."=".$_POST[$id];
	
	if ((isset($_POST['debug'])) or (isset($_GET['debug']))) 
	{ 
	echo $update_query."<br>\n";
	}
	
	if ($mysqli->query($update_query) === TRUE) {
    	echo $update_query." successfully done.<br>\n";
	}else {
		echo $update_query." Failed!<br>\n";
	}

	echo "TEST";
?>