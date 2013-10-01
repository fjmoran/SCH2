<?php

if (isset($_GET['debug'])) { echo "Generador de tablas automatico </br>";}
#Requiere el nombre de la tabla, el schema y la consulta a ejecutar, en caso que no exista consulta trae toda la tabla.

#require_once ("auth.php");
require_once("CreaConnv2.php");

$table = substr($_GET['table'],strpos($_GET['table'],".")+1);
$schema = substr($_GET['table'],0,strpos($_GET['table'],"."));
$select = "select ";

$body_table = array(); //se guardan los campos que van en body de la tabla
$header_table = array(); //se guardan los campos que van en header de la tabla

$show_key = "show keys from ".$_GET['table']." where key_name = 'PRIMARY'";

if (isset($_GET['debug'])) {echo "Query para buscar llaves primarias ".$show_key."</br>";}

if ($rs_show = $mysqli->query($show_key)){
	$keys = array();
	while ($row = $rs_show->fetch_assoc()){
		array_push($keys,$row['Column_name']);
	}
	$rs_show->free();
	if (isset($_GET['debug'])) {echo "Resultado de la query que retorna el listado de llaves primarias ";print_r($keys); echo "</br>";}

}else {
	echo "Falló al ejecutar la consulta: (". $mysqli->errno .") ". $mysqli->error;
}


// Generacion del select como el usuario lo solicita

if (isset($_GET['select'])) { 
	$select = $select . $_GET['select'];
}
else { 
	$select = $select . "*";
}

$select = $select ." from ". $_GET['table']; 

if (isset($_GET['where'])) { 
	$select = $select." where ".$_GET['where'];
}

if (isset($_GET['debug'])) {echo "query que viene del usuario ".$select ."</br>";}

// Se ejecuta la consulta con el select solicitado por el usuario
$rs = $mysqli->query($select);
if (!$rs) {
	echo "Falló al ejecutar la consulta: (". $mysqli->errno .") ". $mysqli->error;
}

if (isset($_GET['debug'])) {
	echo "Numero de Filas que retorna la query ". $rs->num_rows."</br>";
	echo "====================</br>";
}

$info_select = $rs->fetch_fields();
if (isset($_GET['debug'])){ echo "Informacion de los campos de la query que viene del usuario ";print_r($info_select); echo "</br>";}

$column_select = array();
$title_select = array();

foreach ($info_select as $valor){
	array_push($column_select,$valor->orgname);
	array_push($title_select,$valor->name);
}

if (isset($_GET['debug'])) {echo "columnas que vienen del select usuario ";print_r ($column_select); echo "</br>";}
if (isset($_GET['debug'])) {echo "Titulos que vienen del select del usuario ";print_r ($title_select); echo "</br>";}

if (isset($_GET['tabla']['title'])){
	$title_table = explode(",",$_GET['tabla']['title']);
}else{
	$title_table = $title_select;
}

if (isset($_GET['debug'])) {echo "Titulos que entrego el usuario ";print_r ($title_table); echo "</br>";}

if (isset($_GET['tabla']['width'])){
	$title_width = explode(",",$_GET['tabla']['width']);
	if (isset($_GET['debug'])) {echo "Ancho de columnas que entrego el usuario ";print_r ($title_width); echo "</br>";}
}



$regen_select = false; // variable para indicar si hay que regenerar la query

foreach ($keys as $key){
	if (in_array($key,$column_select)){
		echo "Se encontro la llave ".$key." </br>";
	}else{
		echo "No se econtro la llave ".$key." </br>";
		$_GET['select'] .= ",".$key." ";
		$regen_select = true;
	}
}

if ($regen_select) {
	$select = "select ";
	if (isset($_GET['select'])) { 
		$select = $select . $_GET['select'];
	}
	else { 
		$select = $select . "*";
	}

	$select = $select ." from ". $_GET['table']; 

	if (isset($_GET['where'])) { 
		$select = $select." where ".$_GET['where'];
	}
	if (isset($_GET['debug'])) {echo $select ."</br>";}

	// Se libera el result de la query con select del usuario
	$rs->free();

	// se ejecuta el query con los id faltantes
	$rs = $mysqli->query($select);
}

if ($rs->num_rows > 0){
	 if (isset($_GET['debug'])) {echo "En if num_rows</br>";}
}

$campos_tabla = array();
while ($row = $rs->fetch_assoc()) {array_push($campos_tabla,$row);}
$campos_tabla_info = $rs->fetch_fields();

if (isset($_GET['debug'])) {echo "Listado de datos para la tabla : "; print_r($campos_tabla); echo "</br>";}
if (isset($_GET['debug'])) {echo "Listado de campos que trae la tabla : ";print_r($campos_tabla_info); echo "</br>";}
/*
	while($row = $rs->fetch_assoc()){
		$fila_tabla = "";
		$fila_tabla .= "<tr>\n";
		$fila_tabla .= "<td>".$row[nombrePerfil]."</td>\n";
		$fila_tabla .= "<td>".$row[descripcionPerfil]."</td>\n";
		$fila_tabla .= "<td><span class=\"label ";
		if ($row[activoPerfil]){
			$fila_tabla .= "label-success";
		}else {
			$fila_tabla .= "label-danger";
		}
		$fila_tabla .= "\">";
		if ($row[activoPerfil]){
			$fila_tabla .= "Activo";
		}else {
			$fila_tabla .= "Inactivo";
		}
		$fila_tabla .= "</span></td>\n";
		$fila_tabla .= "<td>\n";
		$fila_tabla .= "<a onclick=\"$('#cuerpo').load('pages_admin/roles_editar.php?idPerfil=".$row[idPerfil]."');\" href=\"#roles_editar\">";
		$fila_tabla .= "<span class=\"glyphicon glyphicon-pencil\" style=\"color: black;\" rel=\"tooltip\" data-toggle=\"tooltip\" title=\"Editar\"></span></a>";
		if ($row[activoPerfil]){
			$fila_tabla .= "&nbsp;<span class=\"glyphicon glyphicon-remove-circle\" style=\"color: black;\" rel=\"tooltip\" data-toggle=\"tooltip\" title=\"Desactivar\"></span>";
		}else {
			$fila_tabla .= "&nbsp;<span class=\"glyphicon glyphicon-refresh\" rel=\"tooltip\" data-toggle=\"tooltip\" title=\"Reactivar\"></span>";
		}
		$fila_tabla .= "</td>\n";	  					
		$fila_tabla .= "</tr>\n";

		array_push($campos_tabla,$fila_tabla);
	}
	if (isset($_GET[debug])) {print_r ($campos_tabla); echo "</br>";}
}*/


foreach ($campos_tabla_info as $campo) {
	//$row_table = "<tr>";
	switch ($valor->type){
		case 3:
		case 4:
		case 253:
		case 254: 
		case 1:
	}

}


?>
<table class="table table-striped table-bordered table-condensed">
	  <thead>
	    <tr> 
	    <?php
	    	for($i = 0; $i < count($title_table); $i++){
	    		echo "<th ";
	    		if (isset($_GET['tabla']['width'])){
	    			echo "width='".$title_width[$i]."'";
	    		}
	    		echo " >".$title_table[$i]."</th>\n";
	    	}
	    ?>	
	    	<th width=10%>Acciones</th>
		</tr>

	  </thead>
	  <tbody>
	  	<?php
	  	?>

	  </tbody>
	</table>
