<div class="col-md-11">
 	<h2>Tarifas por Materia</h2>
	<h5>Administración de tarifas asignadas por materia</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/mat_tar_crear.php');" href="#mat_tar_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Tarifas por materia disponibles</h4>
	<table class="table table-striped table-bordered table-condensed">
	  <thead>
	    <tr>
	      <th width=45%>Materia</th>
	      <th width=25%>Tarifa</th>
	      <th width=20%>Moneda</th>
	      <th width=10%>Acciones</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>Materia 1</td>    	
	      <td>10.000</td>
	      <td>$</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/mat_tar_editar.php');" href="#mat_tar_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>Materia 2</td>      	
	      <td>5</td>  
	      <td>UF</td>	         
	      <td><a onclick="$('#cuerpo').load('pages_admin/mat_tar_editar.php');" href="#mat_tar_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>Materia 3</td>      	
	      <td>50.000</td>
	      <td>$</td>	      
	      <td><a onclick="$('#cuerpo').load('pages_admin/mat_tar_editar.php');" href="#mat_tar_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>Materia 4</td>      	
	      <td>100</td>
	      <td>USD</td>	      
	      <td><a onclick="$('#cuerpo').load('pages_admin/mat_tar_editar.php');" href="#mat_tar_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
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
