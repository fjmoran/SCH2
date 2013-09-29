<div class="col-md-11">
 	<h2>Feriados</h2>
	<h5>Administración de días feridos</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/feriados_crear.php');" href="#feriados_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Días feriados registrados</h4>
	<table class="table table-striped table-bordered table-condensed">
	  <thead>
	    <tr>
	      <th width=25%>Fecha</th>
	      <th width=25%>Descripción</th>
	      <th width=25%>Tipo</th>
	      <th wigth=15%>Estado</th>
	      <th width=10%>Acciones</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>01-01-2014</td>    	
	      <td>Año Nuevo</td>
	      <td>Feriado legal</td>
	      <td><span class="label label-danger">Inactivo</span></td>
	      <td><span class="glyphicon glyphicon-refresh" rel="tooltip" data-toggle="tooltip" title="Reactivar"></span></td>
	    </tr>
	    <tr>
	      <td>25-12-2013</td>    	
	      <td>Navidad</td>
	      <td>JO JO JO</td>
	      <td><span class="label label-success">Activo</span></td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/feriado_editar.php');" href="#feriado_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>	
	      <span class="glyphicon glyphicon-remove-circle" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Desactivar"></span></td>
	    </tr>
	    <tr>
	      <td>18-09-2013</td>     	
	      <td>el 18!</td>
	      <td>Tiki Tiki Ti</td>
	      <td><span class="label label-success">Activo</span></td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/feriado_editar.php');" href="#feriado_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>	      	
	      <span class="glyphicon glyphicon-remove-circle" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Desactivar"></span></td>
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
