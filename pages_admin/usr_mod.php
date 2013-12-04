<?php

require_once("../recursos/zhi/CreaConnv2.php");
require_once ("../recursos/zhi/auth.php");
require_once ("../recursos/zhi/funciones.php");

if (!isset($_GET['pagina'])){ $_GET['pagina']=1;} // pagina inicial
if (!isset($_GET['tampag'])){ $_GET['tampag']=10;} // cantidad de items por pagina
	
?>

<div class="col-md-11">
 	<h2>Usuarios</h2>
	<h5>Administración de usuarios</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/usr_crear.php');" href="#usr_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Usuarios del sistema</h4>

	<?php 
	$_GET['table'] = $db.".Usuario";
	$_GET['select'] = "nombreUsuario as Nombre, userUsuario as Usuario, Perfil_idPerfil as Rol, activoUsuario as Estado";
	$_GET['orderby'] = "activoUsuario DESC, nombreUsuario";
	$_GET['tabla']['width'] = "25%, 25%, 25%, 15%";
	$_GET['tabla']['title'] = "Nombre, Usuario, Rol, Estado";
	$_GET['acciones'] = "true";
	$_GET['accion']['editar']['URL'] = "pages_admin/usr_editar.php";
	$_GET['accion']['editar']['title'] = "Editar";
	$_GET['accion']['editar']['class'] = "glyphicon glyphicon-pencil";	
	$_GET['accion']['tar']['URL'] = "pages_admin/usr_tar_mod.php";
	$_GET['accion']['tar']['title'] = "Tarifa del Usuario";
	$_GET['accion']['tar']['class'] = "glyphicon glyphicon-usd";	
	$_GET['accion']['clave']['URL'] = "#usr_clave_mod";
	$_GET['accion']['clave']['title'] = "Cambiar clave";
	$_GET['accion']['clave']['class'] = "glyphicon glyphicon-user";
	$_GET['accion']['activar']['URL'] = "pages_admin/usr_estado.php";

	list($reg,$total)=select_paginar($_GET['table'],$_GET['where'],$_GET['pagina'],$_GET['tampag'],"id".$_GET['table'],$mysqli);

	$hasta = $_GET['tampag']+$reg;
	$_GET['limit'] = $reg.",".$hasta;

	#$_GET['debug']=1;	

	require("../recursos/zhi/table_generator.php");
	?>
	
	<div class="col-md-12 text-center">
	<?php

		if ($_GET['tampag'] < $total){
			echo paginar($_GET['pagina'],$total,$_GET['tampag'],"pages_admin/usr_mod.php?tampag=".$_GET['tampag']."&pagina=","#usr_mod");
		}
	?>
	</div>

</div><!-- col-md-11 -->


<div id="usr_clave_mod" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="agregarLabel" aria-hidden="true">
    
</div><!-- modal cambio de clave-->  


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
