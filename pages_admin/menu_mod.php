<div class="col-md-11">
 	<h2>Menú</h2>
	<h5>Administración de menús del sistema</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/menu_crear.php');" href="#menu_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Items de menú disponibles</h4>

	<?php 
	$_GET['table'] = $bd.".Menu";
	$_GET['select'] = "nombreMenu as Menu, nivelMenu as Nivel, urlMenu as URL, targetMenu as Destino, activoMenu as Estado";
	$_GET['orderby'] = "activoMenu DESC, nombreMenu";
	$_GET['tabla']['width'] = "20%, 10%, 25%, 20%, 15%";
	$_GET['tabla']['title'] = "Nombre, Nivel, URL, Destino, Estado";
	$_GET['acciones'] = "true";
	$_GET['accion']['editar']['URL'] = "pages_admin/menu_editar.php";
	$_GET['accion']['editar']['title'] = "Editar";
	$_GET['accion']['editar']['class'] = "glyphicon glyphicon-pencil";	
	$_GET['accion']['activar']['URL'] = "pages_admin/menu_estado.php";

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