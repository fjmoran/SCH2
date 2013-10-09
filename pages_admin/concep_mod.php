<div class="col-md-11">
 	<h2>Conceptos</h2>
	<h5>Administración de conceptos del sistema</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/concep_crear.php');" href="#concep_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Conceptos disponibles</h4>

	<?php 
	$_GET['table'] = $bd.".Concepto";
	$_GET['select'] = "nombreConcepto as Concepto, descripcionConcepto as Descripcion, activoConcepto as Estado";
	$_GET['orderby'] = "nombreConcepto";
	$_GET['tabla']['width'] = "35%, 40%, 15%";
	$_GET['tabla']['title'] = "Concepto, Descripción, Estado";
	$_GET['acciones'] = "true";
	$_GET['accion']['editar']['URL'] = "pages_admin/concep_editar.php";
	$_GET['accion']['editar']['title'] = "Editar";
	$_GET['accion']['editar']['class'] = "glyphicon glyphicon-pencil";	
	$_GET['accion']['activar']['URL'] = "pages_admin/concept_estado.php";

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
