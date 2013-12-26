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
    <!-- Bootstrap -->
    <link href="../recursos/bootstrap3/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Zhi CSS -->
    <link href="../recursos/zhi/css/zhi.css" rel="stylesheet"> 
    <!-- Jquery-ui -->
    <link href="../recursos/jquery-ui/css/zhi/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">    
    <!-- Fonts -->
    <link href="../fonts/fonts.css" rel="stylesheet" type="text/css">
    <!-- Fav Icon -->    
    <link href="../img/favicon.ico" rel="SHORTCUT ICON">
    <!-- jquery -->  
    <script src="../recursos/jquery/jquery-1.10.2.js"></script>
    <script src="../recursos/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
    <script src="../recursos/bootstrap3/js/bootstrap.min.js"></script>

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
  </script>

  <script type="text/javascript"> 
      
      $(document).ready(function(){       
        /* Tooltip */
        $('#sortable1, #sortable2').tooltip({
          selector: "[rel=tooltip]"
         })
      })    
  </script>
  </head>
<body style>
<div class="container">
<div class="col-md-10">
<div id="cuerpo">
<div class="col-md-11">
 	<h2>Paginas en Paginas</h2>
 	<h5>Seleccione la pagina que desea configurar y arrastre las paginas de la columna izquierda a la derecha para indicar que dichas paginas estan contenidas.</h5><br>
 	<form role="form">
	 	<div class="row">
	 		<div class="col-md-6">
			 	<div class="form-group">
		          <label for="rol">Rol:</label>
		            <select id="rol" class="form-control">
		            	<?php
		            		echo option_select("Pagina","nombrePagina","idPagina",$mysqli);
		            	?>
		            </select>          
		        </div>
	 		</div>
	 		<div class="col-md-6"> <!-- columna vacia -->
	 		</div>
	 	</div>
	 	<div class="row">		
	 		<div class="col-md-6">
	 			<h5>Permisos disponibles</h5>
	 			<ul id="sortable1" class="droptrue">
	 				<?php
	 					echo listado("ui-state-default","Pagina","nombrePagina","idPagina",$mysqli);
	 				?>
				</ul>
			</div>
	 		<div class="col-md-6">
	 			<h5>Permisos para el Rol</h5>		
				<ul id="sortable2" class="droptrue">

				</ul>
	 		</div>		
	 	</div>
 	</form>	
</div><!-- col-md-11 -->
</div>
</div>
</div>
<iframe name="IframeOutput" class="hide"></iframe>
</body>
</html>