<div class="col-md-11">
 	<h2>Estados de Factura</h2>
	<h5>Administración de estados de las facturas</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/fact_estdo_crear.php');" href="#fact_estdo_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Estados disponibles para facturas</h4>

	<?php 
	$_GET['table'] = $bd.".EstadoFactura";
	$_GET['select'] = "nombreEstadoFactura as Estado, descripcionEstadoFactura as Descripcion";
	$_GET['orderby'] = "nombreEstadoFactura";
	$_GET['tabla']['width'] = "45%, 45%";
	$_GET['tabla']['title'] = "Nombre, Descripción";
	$_GET['acciones'] = "true";
	$_GET['accion']['editar']['URL'] = "pages_admin/fact_estdo_editar.php";
	$_GET['accion']['editar']['title'] = "Editar";
	$_GET['accion']['editar']['class'] = "glyphicon glyphicon-pencil";	
	$_GET['accion']['eliminar']['URL'] = "pages_admin/fact_estdo_del.php";
	$_GET['accion']['eliminar']['title'] = "Eliminar";
	$_GET['accion']['eliminar']['class'] = "glyphicon glyphicon-trash";	

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
    
    <script type="text/javascript">
		$('.modal').on('hidden.bs.modal', function () {
			// alert("cerrado!");
			$(this).removeData();
		});
	</script>  