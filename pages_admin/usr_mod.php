<div class="col-md-11">
 	<h2>Usuarios</h2>
	<h5>Administración de usuarios</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/usr_crear.php');" href="#usr_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Usuarios del sistema</h4>
	<table class="table table-striped table-bordered table-condensed">
	  <thead>
	    <tr>
	      <th width=25%>Nombre</th>
	      <th width=25%>Usuario</th>
	      <th width=25%>Rol</th>
	      <th wigth=15%>Estado</th>
	      <th width=10%>Acciones</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td><span rel="tooltip" data-toggle="tooltip" title="Nombre completo del sujeto">Pedro Reyes</span></td>    	
	      <td>preyes</td>
	      <td>Usuario</td>
	      <td>Inactivo</td>
	      <td><span class="glyphicon glyphicon-refresh" rel="tooltip" data-toggle="tooltip" title="Reactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Andres Carcamo</td>      	
	      <td>acarcamo</td>
	      <td>Usuario</td>
	      <td>Inactivo</td>      
	      <td><span class="glyphicon glyphicon-refresh" rel="tooltip" data-toggle="tooltip" title="Reactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Roberto Rojas</td>    	
	      <td>rrojas</td>
	      <td>Usuario</td>
	      <td>Activo</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/usr_editar.php');" href="#usr_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <a onclick="$('#cuerpo').load('pages_admin/usr_tar.php');" href="#usr_tar"><span class="glyphicon glyphicon-usd" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Tarifa del usuario (Abogado)"></span></a>	
	      <span class="glyphicon glyphicon-remove-circle" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Desactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Jaime Acevedo</td>     	
	      <td>jae</td>
	      <td>Administrador</td>
	      <td>Activo</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/usr_editar.php');" href="#usr_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <a onclick="$('#cuerpo').load('pages_admin/usr_tar.php');" href="#usr_tar"><span class="glyphicon glyphicon-usd" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Tarifa del usuario (Abogado)"></span></a>	      	
	      <span class="glyphicon glyphicon-remove-circle" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Desactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Ximena Rojas</td>     	
	      <td>xrojas</td>
	      <td>Usuario</td>
	      <td>Activo</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/usr_editar.php');" href="#usr_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <a onclick="$('#cuerpo').load('pages_admin/usr_tar.php');" href="#usr_tar"><span class="glyphicon glyphicon-usd" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Tarifa del usuario (Abogado)"></span></a>	      	
	      <span class="glyphicon glyphicon-remove-circle" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Desactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Bernardita Riquelme</td>     	
	      <td>briquelme</td>
	      <td>Usuario</td>
	      <td>Activo</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/usr_editar.php');" href="#usr_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <a onclick="$('#cuerpo').load('pages_admin/usr_tar.php');" href="#usr_tar"><span class="glyphicon glyphicon-usd" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Tarifa del usuario (Abogado)"></span></a>	      	
	      <span class="glyphicon glyphicon-remove-circle" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Desactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Geronimo Diaz</td>     	
	      <td>gdiaz</td>
	      <td>Usuario</td>
	      <td>Activo</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/usr_editar.php');" href="#usr_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <a onclick="$('#cuerpo').load('pages_admin/usr_tar.php');" href="#usr_tar"><span class="glyphicon glyphicon-usd" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Tarifa del usuario (Abogado)"></span></a>	      	
	      <span class="glyphicon glyphicon-remove-circle" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Desactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Francisco Morán</td>     	
	      <td>fjmoran</td>
	      <td>Administrador</td>
	      <td>Activo</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/usr_editar.php');" href="#usr_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <a onclick="$('#cuerpo').load('pages_admin/usr_tar.php');" href="#usr_tar"><span class="glyphicon glyphicon-usd" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Tarifa del usuario (Abogado)"></span></a>	      		      		      	
	      <span class="glyphicon glyphicon-remove-circle" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Desactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Alejandro de la Vega</td>     	
	      <td>el.zorro</td>
	      <td>Usuario</td>
	      <td>Activo</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/usr_editar.php');" href="#usr_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <a onclick="$('#cuerpo').load('pages_admin/usr_tar.php');" href="#usr_tar"><span class="glyphicon glyphicon-usd" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Tarifa del usuario (Abogado)"></span></a>	      	
	      <span class="glyphicon glyphicon-remove-circle" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Desactivar"></span></td>
	    </tr>
	    <tr>
	      <td>Karl El</td>     	
	      <td>superman</td>
	      <td>SuperUsuario</td>
	      <td>Activo</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/usr_editar.php');" href="#usr_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <a onclick="$('#cuerpo').load('pages_admin/usr_tar.php');" href="#usr_tar"><span class="glyphicon glyphicon-usd" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Tarifa del usuario (Abogado)"></span></a>	      	
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
