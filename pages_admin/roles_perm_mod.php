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
	 			Listado de Paginas
	 			<ul id="sortable1" class="droptrue">
	 				<?php
	 					echo listado("ui-state-default","Pagina","nombrePagina","idPagina",$mysqli);
	 				?>
				</ul>
			</div>
	 		<div class="col-md-6">
	 			Paginas con Permiso Para el ROL			
				<ul id="sortable2" class="droptrue">

				</ul>
	 		</div>		
	 	</div>
 	</form>	
</div><!-- col-md-11 -->

<script>
  $(function() {
    $( "ul.droptrue" ).sortable({
      connectWith: "ul"
    });
 
    $( "ul.dropfalse" ).sortable({
      connectWith: "ul",
      dropOnEmpty: false
    });
 
    $( "#sortable1, #sortable2, #sortable3" ).disableSelection();
  });
  </script></script>