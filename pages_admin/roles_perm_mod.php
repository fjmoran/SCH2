<?php
require_once("../recursos/zhi/auth.php");
require_once("../recursos/zhi/CreaConnv2.php");
require_once("../recursos/zhi/funciones.php");
?>
<div class="col-md-11">
 	<h2>Permisos por Rol</h2>
 	<h5>Seleccione el rol que desea configurar.</h5><br>
 	<form role="form">
	 	<div class="row">
	 		<div class="col-md-6">
			 	<div class="form-group">
		          <label for="rol">Rol:</label>
		            <select id="rol" class="form-control">
		            	<?php
		            		echo option_select("Perfil","nombrePerfil","idPerfil",$mysqli);
		            	?>
		            </select>          
		        </div>
	 		</div>
	 		<div class="col-md-6"> <!-- columna vacia -->
	 		</div>
	 	</div>
	 	<div class="row">		
	 		<div class="col-md-6">
	 			<ul id="sortable1" class="connectedSortable">
	 				<?php
	 					echo listado("ui-state-default","Pagina","nombrePagina","idPagina",$mysqli);
	 				?>
				</ul>
			</div>
	 		<div class="col-md-6">				
				<ul id="sortable2" class="connectedSortable">
				  <li class="ui-state-highlight">Item 1</li>
				  <li class="ui-state-highlight">Item 2</li>
				  <li class="ui-state-highlight">Item 3</li>
				  <li class="ui-state-highlight">Item 4</li>
				  <li class="ui-state-highlight">Item 5</li>
				</ul>
	 		</div>		
	 	</div>
 	</form>	
</div><!-- col-md-11 -->

<script>
  $(function() {
    $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  });
</script>