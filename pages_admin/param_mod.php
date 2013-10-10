<div class="col-md-11">
 	<h2>Parámetros Globales</h2>
	<h5>Administración de parámetros globales del sistema</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/param_crear.php');" href="#param_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Páginas disponibles</h4>

	<?php 
	$_GET['table'] = $bd.".Parametro";
	$_GET['select'] = "nombreParametros, valorParametros as Valor, activoParametros as Estado";
	$_GET['orderby'] = "activoParametros DESC, nombreParametros";
	$_GET['tabla']['width'] = "45%, 30%, 15%";
	$_GET['tabla']['title'] = "Parámetro, Valor, Estado";
	$_GET['acciones'] = "true";
	$_GET['accion']['editar']['URL'] = "pages_admin/parametros_editar.php";
	$_GET['accion']['editar']['title'] = "Editar";
	$_GET['accion']['editar']['class'] = "glyphicon glyphicon-pencil";	
	$_GET['accion']['activar']['URL'] = "pages_admin/parametros_estado.php";

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