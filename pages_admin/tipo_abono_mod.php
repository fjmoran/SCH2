<div class="col-md-11">
 	<h2>Tipo de Abono</h2>
	<h5>Administración de tipos de abono</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/tipo_abono_crear.php');" href="#tipo_abono_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Tipos de abonos disponibles</h4>
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
	      <td>Dinero efectivo</td>    	
	      <td>Cash</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/tipo_abono_editar.php');" href="#tipo_abono_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>Cheque</td>      	
	      <td>Cheque al día</td>  	         
	      <td><a onclick="$('#cuerpo').load('pages_admin/tipo_abono_editar.php');" href="#tipo_abono_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>Pagaré</td>      	
	      <td>Pagaré a nombre de la empresa</td>	      
	      <td><a onclick="$('#cuerpo').load('pages_admin/tipo_abono_editar.php');" href="#tipo_abono_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>Otro</td>      	
	      <td>Otro tipo de abono</td>	      
	      <td><a onclick="$('#cuerpo').load('pages_admin/tipo_abono_editar.php');" href="#tipo_abono_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
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
