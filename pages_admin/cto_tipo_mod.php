<div class="col-md-11">
 	<h2>Tipos de Contacto</h2>
	<h5>Administración de tipos de contacto que puede tener un cliente</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/cto_tipo_crear.php');" href="#cto_tipo_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Tipos de contacto disponibles</h4>

	<?php 
	$_GET[table] = $bd.".TipoContacto";
	$_GET[select] = "nombreTipoContacto as Nombre, descripcionTipoContacto as Descripcion";
	$_GET[orderby] = "nombreTipoContacto DESC";
	$_GET[tabla][width] = "45%, 45%";
	$_GET[tabla][title] = "Tipo, Descripción";
	$_GET[acciones] = "true";

	require("../recursos/zhi/table_generator.php");
	?>

	<table class="table table-striped table-bordered table-condensed">
	  <thead>
	    <tr>
	      <th width=45%>Tipo</th>
	      <th width=45%>Descripción</th>
	      <th width=10%>Acciones</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>Gerente General</td>    	
	      <td>Gerente General de la empresa</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/cto_tipo_editar.php');" href="#cto_tipo_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>Secretaria</td>      	
	      <td>Secretaria del cliente</td>     
	      <td><a onclick="$('#cuerpo').load('pages_admin/cto_tipo_editar.php');" href="#cto_tipo_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>Influencia</td>      	
	      <td>Ejerce influencia en el cliente</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/cto_tipo_editar.php');" href="#cto_tipo_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>Familiar</td>      	
	      <td>Familiar del cliente</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/cto_tipo_editar.php');" href="#cto_tipo_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	  </tbody>
	</table>

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
