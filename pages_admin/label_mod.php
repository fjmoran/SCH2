<div class="col-md-11">
 	<h2>Labels</h2>
	<h5>Administración de labels (etiquetas) del sistema</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/label_crear.php');" href="#label_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Etiquetas disponibles</h4>

	<?php 
	$_GET['table'] = $bd.".Label";
	$_GET['select'] = "nombreLabel as Label, despliegueLabel as Despliegue, classLabel as Clase";
	$_GET['orderby'] = "nombreLabel";
	$_GET['tabla']['width'] = "35%, 40%, 15%";
	$_GET['tabla']['title'] = "Label, Despliegue, Clase";
	$_GET['acciones'] = "true";
	$_GET['accion']['editar']['URL'] = "pages_admin/label_editar.php";
	$_GET['accion']['editar']['title'] = "Editar";
	$_GET['accion']['editar']['class'] = "glyphicon glyphicon-pencil";	
	$_GET['accion']['eliminar']['URL'] = "pages_admin/label_del.php";
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