<?php

require_once("../recursos/zhi/CreaConnv2.php");
require_once ("../recursos/zhi/auth.php");
require_once ("../recursos/zhi/funciones.php");

if (($_GET['debug']) || ($_POST['debug'])){
	$debug = 1;
}

#$debug = 1;
if ($debug){
echo "GET : ";
print_r($_GET);
echo "<br>";
echo "POST : ";
print_r($_POST);
echo "<br>";
}

// Acá se definen los campos por los cuales se puede realizar las busquedas (basic_search)
$campos_busqueda = array("Descripción"=>"descripcionFeriado","País"=>"Pais_idPais");

if (!isset($_GET['pagina'])){ $_GET['pagina']=1;} // pagina inicial
if (!isset($_GET['tampag'])){ $_GET['tampag']=10;} // cantidad de items por pagina
if (($_GET['txt_search'])&&($_GET['select_field'])){
	if ($_GET['foreign']){
	$query_fk = "SELECT ".$_GET['fkcolumna']." FROM ".$_GET['fktabla']." WHERE nombre".$_GET['fktabla']." like '%".$_GET['txt_search']."%'";
	$_GET['where'] = $_GET['select_field']." IN (".$query_fk.")";
	} else {
		$_GET['where'] = $_GET['select_field']." like '%".$_GET['txt_search']."%'";
	}
}

$_GET['callerURL'] = $_SERVER ['PHP_SELF'];
$_GET['table'] = $db.".Feriado";

?>
<div class="col-md-11">
 	<h2>Feriados</h2>
	<h5>Administración de días feridos</h5>
	<br>
	<?php
	if ((isset($_GET['txt_search'])) && ($debug)) {
		echo $_GET['txt_search']."</br>";
		echo "@".$_GET['select_field']."@</br>";
		echo "Where : ".$_GET['where']."</br>";
	}
	include("../recursos/zhi/basic_search.php");
	?>

		<a onclick="$('#cuerpo').load('pages_admin/feriados_crear.php');" href="#feriados_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Días feriados registrados</h4>

	<?php 
	$_GET['select'] = "fechaFeriado as Fecha, descripcionFeriado as Descripcion, tipoFeriado as Tipo, Pais_idPais as Pais, activoFeriado as Estado";
	$_GET['orderby'] = "activoFeriado DESC, Pais_idPais, fechaFeriado";
	$_GET['tabla']['width'] = "15%, 30%, 15%, 15%, 15%";
	$_GET['tabla']['title'] = "Fecha, Descripción, Tipo, País, Estado";
	$_GET['acciones'] = "true";
	$_GET['accion']['editar']['URL'] = "pages_admin/feriados_editar.php";
	$_GET['accion']['editar']['title'] = "Editar";
	$_GET['accion']['editar']['class'] = "glyphicon glyphicon-pencil";
	$_GET['accion']['activar']['URL'] = "pages_admin/feriados_estado.php";

	list($reg,$total)=select_paginar($_GET['table'],$_GET['where'],$_GET['pagina'],$_GET['tampag'],"id".$_GET['table'],$mysqli);

	$hasta = $_GET['tampag'];
	$_GET['limit'] = $reg.",".$hasta;

	require("../recursos/zhi/table_generator.php");
	?>

	<div class="col-md-12 text-center">
	<?php

		if ($_GET['tampag'] < $total){
			echo paginar($_GET['pagina'],$total,$_GET['tampag'],"pages_admin/feriados_mod.php?".http_build_query($_GET)."&tampag=".$_GET['tampag']."&pagina=","#feriados_mod");
		}
	?>
	</div>

</div><!-- col-md-11 -->

<div id="act_desact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="act_deasctLabel" aria-hidden="true">
    
</div><!-- modal activar y desactivar -->  

    <script type="text/javascript"> 
      
      $(document).ready(function(){       
        /* Tooltip */
        $('.table').tooltip({
          selector: "[rel=tooltip]"
         })
      })    
    </script>
    
    <script type="text/javascript">
		$('.modal').on('hidden.bs.modal', function () {
			// alert("cerrado!");
			$(this).removeData();
		});
	</script>  