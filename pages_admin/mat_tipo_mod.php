<div class="col-md-11">
 	<h2>Tipos de Materia</h2>
	<h5>Administración de tipos de materia</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/mat_tipo_crear.php');" href="#mat_tipo_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Tipos de materias disponibles</h4>
	<table class="table table-striped table-bordered table-condensed">
	  <thead>
	    <tr>
	      <th width=30%>Nombre</th>
	      <th width=45%>Descripción</th>
	      <th wigth=15%>Estado</th>
	      <th width=10%>Acciones</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>Materia 1</td>      	
	      <td>Esta es la materia 1</td>
	      <td><span class="label label-danger">Inactivo</span></td>      
	      <td><span class="glyphicon glyphicon-refresh" rel="tooltip" data-toggle="tooltip" title="Reactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Materia 2</td>    	
	      <td>Esta es la materia 2</td>
	      <td><span class="label label-success">Activo</span></td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/mat_tipo_editar.php');" href="#mat_tipo_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>	
	      <span class="glyphicon glyphicon-remove-circle" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Desactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Materia 3</td>     	
	      <td>Esta es la materia 3</td>
	      <td><span class="label label-success">Activo</span></td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/mat_tipo_editar.php');" href="#mat_tipo_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>	      	
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
