<div class="col-md-11">
 	<h2>Materias</h2>
	<h5>Administración de materias</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/mat_crear.php');" href="#mat_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Materias disponibles</h4>

	<?php 
	$_GET['table'] = $bd.".Materia";
	$_GET['select'] = "nombreMateria as Materia, Cliente_idCliente as Cliente, TipoMateria_idTipoMateria as TipoMateria, activoMateria as Estado";
	$_GET['orderby'] = "Cliente_idCliente, nombreMateria";
	$_GET['tabla']['width'] = "25%, 25%, 25%, 15%";
	$_GET['tabla']['title'] = "Materia, Cliente, Tipo, Estado";
	$_GET['acciones'] = "true";
	$_GET['accion']['editar']['URL'] = "pages_admin/mat_editar.php";
	$_GET['accion']['editar']['title'] = "Editar";
	$_GET['accion']['editar']['class'] = "glyphicon glyphicon-pencil";		
	$_GET['accion']['activar']['URL'] = "pages_admin/mat_estado.php";	

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