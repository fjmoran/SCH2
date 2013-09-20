<?php

require "CreaConnv2.php";
#require "auth.php";

echo "Insert Generic</br>";

$select_all = "select * from ".$_POST[table].";";
echo $select_all;
echo "</br>";

$select = "select ";
if (isset($_POST[select])){
	$select = $select.$_POST[select];
}else {
	$select = $select."*";
}

$select = $select." from ".$_POST[table].";";
echo $select;
echo "</br>";

$select_all = $select_all.$select;

if ($mysqli->multi_query($select_all)) {
	echo "despues de query";
	echo "</br>";
	$resultado_tabla_completa = $mysqli->store_result();
	$mysqli->next_result();
	$resultado_tabla_select = $mysqli->store_result();
	echo "Despues del store result";
	echo "</br>";
	$info_tabla = $resultado_tabla_completa->fetch_fields();
	print_r($info_tabla);
	echo "</br>";
	$info_select = $resultado_tabla_select->fetch_fields();	
	print_r($info_select);
	echo "</br>";
	
 } else{
	echo "Falló al ejecutar la consulta: (". $mysqli->errno .") ". $mysqli->error;
}
 
?>
