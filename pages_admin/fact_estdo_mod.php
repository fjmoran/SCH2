<div class="col-md-11">
 	<h2>Estados de Factura</h2>
	<h5>Administración de estados de las facturas</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/fact_estdo_crear.php');" href="#fact_estdo_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Estados disponibles para facturas</h4>
	<table class="table table-striped table-bordered table-condensed">
	  <thead>
	    <tr>
	      <th width=45%>Nombre</th>
	      <th width=45%>Descripción</th>
	      <th width=10%>Acciones</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>Facturada</td>    	
	      <td>Factura enviada al cliente</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/fact_estdo_editar.php');" href="#fact_estdo_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>Pagada</td>      	
	      <td>Factura pagada por el cliente</td>  	         
	      <td><a onclick="$('#cuerpo').load('pages_admin/fact_estdo_editar.php');" href="#fact_estdo_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>Pendiente</td>      	
	      <td>Pendiente de facturar</td>	      
	      <td><a onclick="$('#cuerpo').load('pages_admin/fact_estdo_editar.php');" href="#fact_estdo_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>Rechazada</td>      	
	      <td>Factura rechazada por el cliente</td>	      
	      <td><a onclick="$('#cuerpo').load('pages_admin/fact_estdo_editar.php');" href="#fact_estdo_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
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
