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

	#$_GET['debug']=1;	

	require("../recursos/zhi/table_generator.php");
	?>

	<div class="col-md-12 text-center">
	  <ul class="pagination pagination-sm" >
	    <li><a href="#">Anterior</a></li>
	    <li class="active"><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li><a href="#">4</a></li>
	    <li><a href="#">5</a></li>
	    <li><a href="#">Siguiente</a></li>
	  </ul>
	</div>

</div><!-- col-md-11 -->


<div id="usr_clave_mod" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="agregarLabel" aria-hidden="true">
    
</div><!-- modal -->  


    <script type="text/javascript"> 
      
      $(document).ready(function(){       
        /* Tooltip */
        $('.table').tooltip({
          selector: "[rel=tooltip]"
         })
      })    
    </script>
