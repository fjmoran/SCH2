<div class="col-md-11">
 	<h2>Tipos de Contacto</h2>
	<h5>Administración de tipos de contacto que puede tener un cliente</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/cto_tipo_crear.php');" href="#cto_tipo_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Tipos de contacto disponibles</h4>

	<?php 
	$_GET['table'] = $bd.".TipoContacto";
	$_GET['select'] = "nombreTipoContacto as Nombre, descripcionTipoContacto as Descripcion";
	$_GET['orderby'] = "nombreTipoContacto ASC";
	$_GET['tabla']['width'] = "45%, 45%";
	$_GET['tabla']['title'] = "Tipo, Descripción";
	$_GET['acciones'] = "true";
	$_GET['accion']['editar']['URL'] = "pages_admin/cto_tipo_editar.php";
	$_GET['accion']['editar']['title'] = "Editar";
	$_GET['accion']['editar']['class'] = "glyphicon glyphicon-pencil";	
	$_GET['accion']['eliminar']['URL'] = "#";
	$_GET['accion']['eliminar']['title'] = "Eliminar";
	$_GET['accion']['eliminar']['class'] = "glyphicon glyphicon-remove";	

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



    <script type="text/javascript"> 
      
      $(document).ready(function(){       
        /* Tooltip */
        $('.table').tooltip({
          selector: "[rel=tooltip]"
         })
      })    
    </script>
