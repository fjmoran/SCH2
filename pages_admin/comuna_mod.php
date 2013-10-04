<div class="col-md-11">
 	<h2>Comunas</h2>
	<h5>Administración de comunas</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/comuna_crear.php');" href="#comuna_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Comunas registradas en el sistema</h4>

	<?php 
	$_GET['table'] = $bd.".Comuna";
	$_GET['select'] = "Region_idRegion as Region, nombreComuna as Comuna, codeComuna as Codigo, activoComuna as Estado";
	$_GET['orderby'] = "activoComuna DESC, Region_idRegion, codeComuna";
	$_GET['tabla']['width'] = "25%, 25%, 25%, 15%";
	$_GET['tabla']['title'] = "Región, Comuna, Código, Estado";
	$_GET['acciones'] = "true";
	$_GET['accion']['editar']['URL'] = "pages_admin/comuna_editar.php";
	$_GET['accion']['editar']['title'] = "Editar";
	$_GET['accion']['editar']['class'] = "glyphicon glyphicon-pencil";
	$_GET['accion']['activar']['URL'] = "pages_admin/comuna_estado.php";

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
