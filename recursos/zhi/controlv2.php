<?php

require "CreaConnv2.php";

$host  = $_SERVER['HTTP_HOST'];

//Definir consulta
$SSQL="SELECT idUsuario, userUsuario,nombreUsuario,Perfil_idPerfil FROM ".$bd.".Usuario WHERE Usuario.userUsuario='".$_POST['user']."' and Usuario.claveUsuario='".$_POST['password']."' and Usuario.activoUsuario=1";
//Realizar consulta echo "Antes de consulta ".$SSQL."</br>";

if ($rs=$mysqli->query($SSQL)){
	//Buscar coincidencias
	if ($rs->num_rows > 0){
		$row=$rs->fetch_array(MYSQLI_ASSOC);
	//	echo $row[idUsuario].",". $row[userUsuario].",".$row[nombreUsuario].",".$row[Perfil_idPerfil];	
		session_start();
		$_SESSION[auth]=1;
		$_SESSION[userUsuario]=$row[userUsuario];
		$_SESSION[idUsuario]=$row[idUsuario];
		$_SESSION[nombreUsuario]=$row[nombreUsuario];
		$_SESSION[idperfilUsuario] = $row[Perfil_idPerfil];
		$rs->close();
		header ("Location:http://".$host."/".$ini_array[basedir]."/index.php");
	}
	else
	{
		$rs->close();
		header("Location:http://".$host."/".$ini_array[basedir]."/login.php?error=1&user=".$_POST[user]);
	}
}

?>