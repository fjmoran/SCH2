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
		$_SESSION['auth']=1;
		$_SESSION['userUsuario']=$row['userUsuario'];
		$_SESSION['idUsuario']=$row['idUsuario'];
		$_SESSION['nombreUsuario']=$row['nombreUsuario'];
		$_SESSION['Perfil_idPerfil'] = $row['Perfil_idPerfil'];
		$_SESSION['schema'] = $ini_array['schema'];
		$_SESSION['permisos'] = array();
		$rs->free();

		$select_permisos = "select * from PermisoPagina, PaginaenPagina where Perfil_idPerfil = '".$_SESSION['Perfil_idPerfil']."' AND PaginaenPagina.idPaginaenPagina = PermisoPagina.PaginaenPagina_idPaginaenPagina";
		//echo $select_permisos."</br>";
		if ($rs=$mysqli->query($select_permisos)){
			while ($fila = $rs->fetch_assoc()){				
				array_push($_SESSION['permisos'],$fila);
			}
			//echo "SESSION[permisos] :";
			//print_r($_SESSION['permisos']);
			$rs->free();
		}else{
			$_SESSION['permisos'] = FALSE;
		}
		if (is_array($_SESSION['permisos'])){
			header ("Location:http://".$host."/".$ini_array['basedir']."/index.php");
		}else{
			header("Location:http://".$host."/".$ini_array['basedir']."/login.php?error=3&user=".$_POST['user']);
		}
	}
	else
	{
		$rs->close();
		header("Location:http://".$host."/".$ini_array['basedir']."/login.php?error=1&user=".$_POST['user']);
	}
}

?>