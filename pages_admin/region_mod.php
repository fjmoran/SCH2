<div class="col-md-11">
 	<h2>Regiones</h2>
	<h5>Administración de regiones</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/region_crear.php');" href="#region_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Regiones registradas en el sistema</h4>
	<table class="table table-striped table-bordered table-condensed">
	  <thead>
	    <tr>
	      <th width=25%>País</th>
	      <th width=25%>Región</th>
	      <th width=25%>Código</th>
	      <th wigth=15%>Estado</th>
	      <th width=10%>Acciones</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>Chile</td>    	
	      <td>Metropolitana</td>
	      <td>13</td>
	      <td><span class="label label-danger">Inactivo</span></td>
	      <td><span class="glyphicon glyphicon-refresh" rel="tooltip" data-toggle="tooltip" title="Reactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Chile</td>      	
	      <td>Arica y Parinacota</td>
	      <td>14</td>
	      <td><span class="label label-danger">Inactivo</span></td>      
	      <td><span class="glyphicon glyphicon-refresh" rel="tooltip" data-toggle="tooltip" title="Reactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Chile</td>    	
	      <td>Atacama</td>
	      <td>1</td>
	      <td><span class="label label-success">Activo</span></td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/region_editar.php');" href="#region_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>	
	      <span class="glyphicon glyphicon-remove-circle" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Desactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Chile</td>     	
	      <td>Los Ríos</td>
	      <td>15</td>
	      <td><span class="label label-success">Activo</span></td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/region_editar.php');" href="#region_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>	      	
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
