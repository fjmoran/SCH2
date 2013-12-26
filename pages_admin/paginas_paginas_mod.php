<?php
require_once("../recursos/zhi/auth.php");
require_once("../recursos/zhi/CreaConnv2.php");
require_once("../recursos/zhi/funciones.php");
?>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <title>Sistema de Control de Horas</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../recursos/bootstrap3/css/bootstrap.min.css" rel="stylesheet" media="screen">
	    <link href="../recursos/zhi/css/zhi.css" rel="stylesheet"> 
	    <link href="../recursos/jquery-ui/css/zhi/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">    
	    <link href="../fonts/fonts.css" rel="stylesheet" type="text/css">
	    <link href="../img/favicon.ico" rel="SHORTCUT ICON">
	</head>
	<body style>
		<div class="container">
			<div class="col-md-10">
				<div id="cuerpo">
					<div class="col-md-11">
					 	<h2>Relaciones entre Páginas</h2>
					 	<h5>Seleccione la pagina que desea configurar y arrastre las paginas de la columna izquierda a la derecha para indicar que dichas paginas estan relacionadas.</h5><br>
					 	<form role="form" action="paginas_paginas_mod.php" name="selpagina" method="POST">
						 	<div class="row">
						 		<div class="col-md-6">
								 	<div class="form-group">
							          <label for="rol">Página:</label>
							            <select id="pagina" class="form-control" name="pagina" onchange="javascript:submit();">
							            	<option value="">&nbsp</option>
							            	<?php
							            		echo option_select("Pagina","nombrePagina","idPagina",$mysqli,$_POST['pagina']);
							            	?>
							            </select>          
							        </div>
						 		</div>
						 		<div class="col-md-6"> <!-- columna vacia -->
						 		</div>
							</div>
						</form>
						 	<? 
								if ((isset($_POST['pagina'])) && (!empty($_POST['pagina'])))
								{
							?>
						<form role="form" action="../recursos/zhi/update_paginas_paginas.php" name="paginasenpagina" id="paginasenpagina" method="POST">	
						 	<div class="row">		
						 		<div class="col-md-6">
						 			<h5>Páginas disponibles</h5>
						 			<ul id="sortable1" class="droptrue">
						 				<?php
						 					echo listado("ui-state-default","Pagina","nombrePagina","idPagina",$mysqli,"Pagina.idPagina NOT IN (select Pagina_idPagina1 from PaginaenPagina where Pagina_idPagina ='".$_POST['pagina']."')");
						 				?>
									</ul>
								</div>
						 		<div class="col-md-6">
						 			<h5>Páginas relacionadas</h5>		
									<ul id="sortable2" class="droptrue">
										<?php
											echo listado("ui-state-default","Pagina","nombrePagina","idPagina",$mysqli,"Pagina.idPagina IN (select Pagina_idPagina1 from PaginaenPagina where Pagina_idPagina ='".$_POST['pagina']."')");
										?>
									</ul>
						 		</div>		
						 	</div>
							<div class="row">
							    <div class="row pull-left"> <!-- fila para botones -->
							      <div class="col-md-12">
							        <p>
							          <input class="btn btn-success" type="button" value="Actualizar" id="frmboton">
							        </p>
							      </div>
							    </div>  
							<div>     
					 	</form>
					 	<?php
					 	}
					 	?>	
					</div><!-- col-md-11 -->
				</div><!-- cuerpo -->
			</div><!-- col-md-10 -->
		</div><!-- container -->
		<iframe name="IframeOutput" class="hide"></iframe>
	</body>
</html>

	<script src="../recursos/jquery/jquery-1.10.2.js"></script>
	<script src="../recursos/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
	<script src="../recursos/bootstrap3/js/bootstrap.min.js"></script>
	<script>$(function(){$("ul.droptrue").sortable({connectWith:"ul"});$("ul.dropfalse").sortable({connectWith:"ul",dropOnEmpty:false});$("#sortable1,#sortable2").disableSelection();});$(document).ready(function(){$('#sortable1,#sortable2').tooltip({selector:"[rel=tooltip]"})});</script>
	<script>
		$('#frmboton').click(function() {
  		alert( "Handler for .submit() called." );
  		//event.preventDefault();
		});
	</script>