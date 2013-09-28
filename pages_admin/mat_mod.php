<div class="col-md-11">
 	<h2>Materias</h2>
	<h5>Administración de materias</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/mat_crear.php');" href="#mat_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Materias disponibles</h4>
	<table class="table table-striped table-bordered table-condensed">
	  <thead>
	    <tr>
	      <th width=25%>Nombre</th>
	      <th width=25%>Cliente</th>
	      <th width=25%>Tipo</th>
	      <th wigth=15%>Estado</th>
	      <th width=10%>Acciones</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>Materia 1</td>    	
	      <td>Codelco</td>
	      <td>Tipo materia 1</td>
	      <td><span class="label label-danger">Inactivo</span></td>
	      <td><span class="glyphicon glyphicon-refresh" rel="tooltip" data-toggle="tooltip" title="Reactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Materia 2</td>      	
	      <td>Cencosud</td>
	      <td>Tipo materia 5</td>
	      <td><span class="label label-danger">Inactivo</span></td>      
	      <td><span class="glyphicon glyphicon-refresh" rel="tooltip" data-toggle="tooltip" title="Reactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Materia 3</td>    	
	      <td>Parque Arauco</td>
	      <td>Tipo materia 1</td>
	      <td><span class="label label-success">Activo</span></td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/mat_editar.php');" href="#usr_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>	
	      <span class="glyphicon glyphicon-remove-circle" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Desactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Materia 4</td>     	
	      <td>Andres de la Fontana</td>
	      <td>Tipo materia 56</td>
	      <td><span class="label label-success">Activo</span></td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/mat_editar.php');" href="#usr_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>	      	
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
