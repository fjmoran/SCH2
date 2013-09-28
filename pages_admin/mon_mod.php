<div class="col-md-11">
 	<h2>Monedas</h2>
	<h5>Administración de monedas</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/mon_crear.php');" href="#mon_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Tipos de moneda disponibles</h4>
	<table class="table table-striped table-bordered table-condensed">
	  <thead>
	    <tr>
	      <th width=45%>Simbolo</th>
	      <th width=45%>Descripción</th>
	      <th width=10%>Acciones</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>USD</td>    	
	      <td>Dolar Americano</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/mon_editar.php');" href="#mon_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>$</td>      	
	      <td>Peso Chileno</td>     
	      <td><a onclick="$('#cuerpo').load('pages_admin/mon_editar.php');" href="#mon_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>UF</td>      	
	      <td>Unidad de fomento</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/mon_editar.php');" href="#mon_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
	      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
	    </tr>
	    <tr>
	      <td>€</td>      	
	      <td>Euro</td>
	      <td><a onclick="$('#cuerpo').load('pages_admin/mon_editar.php');" href="#mon_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar"></span></a>
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
