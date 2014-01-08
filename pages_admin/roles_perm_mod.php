<?php
require_once("../recursos/zhi/auth.php");
require_once("../recursos/zhi/CreaConnv2.php");
require_once("../recursos/zhi/funciones.php");
?>
<div class="col-md-11">
 	<h2>Permisos por Rol</h2>
 	<h5>Seleccione el rol que desea configurar y arrastre los permisos de la columna izquierda a la derecha.</h5><br>
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
	 		<div class="col-md-4">
	 			<h5>Permisos disponibles</h5>
	 			<ul id="sortable1" class="droptrue">
	 				<?php
	 					echo listado("ui-state-default","Pagina","nombrePagina","idPagina",$mysqli);
	 				?>
				</ul>
			</div>
			<div class="col-md-2" style="padding-top: 190px;">
				<a href="#" class="btn btn-success btn-sm btn-block" role="button"> Agregar todos >> </a>
				</br></br>
				<a href="#" class="btn btn-danger btn-sm btn-block" role="button"> << Quitar todos</a>
			</div>	
	 		<div class="col-md-6">
	 			<h5>Permisos para el Rol</h5>		
				<ul id="sortable2" class="droptrue">

				</ul>
	 		</div>		
	 	</div>
		<div class="row">
			<div class="row pull-left"> <!-- fila para botones -->
			    <div class="col-md-12">
			    	<p>
			  	  <input class="btn btn-success" type="submit" value="Actualizar" id="frmboton">
				    </p>
			    </div>
		    </div>  
		<div>	 	
 	</form>	
</div><!-- col-md-11 -->

<script>$(function(){$("ul.droptrue").sortable({connectWith:"ul"});$("ul.dropfalse").sortable({connectWith:"ul",dropOnEmpty:false});$("#sortable1,#sortable2").disableSelection();});$(document).ready(function(){$('#sortable1,#sortable2').tooltip({selector:"[rel=tooltip]"})});</script>
<script>
$('#send_all').bind({
    'click': function(){ 
        $('#sortable1 li').each(function(){
            $(this).appendTo('#sortable2');
        });
        $tabs.tabs('select', 1 );
    }
});
</script>