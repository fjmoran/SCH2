<div class="col-md-11">
 	<h2>Feriados</h2>
	<h5>Administración de días feridos</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/feriados_crear.php');" href="#feriados_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Días feriados registrados</h4>

	<?php 
	$_GET['table'] = $bd.".Feriado";
	$_GET['select'] = "fechaFeriado as Fecha, descripcionFeriado as Descripcion, tipoFeriado as Tipo, Pais_idPais as Pais, activoFeriado as Estado";
	$_GET['orderby'] = "activoFeriado DESC, Pais_idPais";
	$_GET['tabla']['width'] = "15%, 30%, 15%, 15%, 15%";
	$_GET['tabla']['title'] = "Fecha, Descripción, Tipo, País, Estado";
	$_GET['acciones'] = "true";
	$_GET['accion']['editar']['URL'] = "pages_admin/feriados_editar.php";
	$_GET['accion']['editar']['title'] = "Editar";
	$_GET['accion']['editar']['class'] = "glyphicon glyphicon-pencil";
	$_GET['accion']['activar']['URL'] = "pages_admin/feriados_estado.php";

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
