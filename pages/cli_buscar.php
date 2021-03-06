<?php
require_once "../recursos/zhi/CreaConnv2.php";
$query = "select * from Cliente";	
?>
<div class="col-md-11">
<h2>Busqueda de clientes</h2>
<h5>Realice una busqueda por el nombre o razón social del cliente, RUT o Correo electrónico</h5>

    <form class="form-inline" role="form">
      <div class="form-group">
        <input id="busqueda" type="text" class="form-control" size="45">
      </div>  
        <button class="btn btn-primary" type="button">Buscar</button>
    </form>

    <br>
<h4>Clientes</h4>

<table class="table table-striped table-condensed">
  <thead style="text-align: center; color:#428BCA;">
    <tr>
      <th width=10%>RUT</th>
      <th width=35%>Nombre</th>
      <th width=25%>Correo electrónico</th>
      <th width=20%>Abogado a cargo</th>
      <th width=10%>Acciones</th>
    </tr>
  </thead>
  <tbody>
<?php
if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
    	echo "<tr>
      <td>{$row['rutCliente']}</td>    	
      <td>{$row['nombreCliente']}</td>
      <td>{$row['emailCliente']}</td>
      <td>{$row['Usuario_idUsuario']} hrs.</td>
      <td><td><a href=\"#cli_ver\"><span class=\"glyphicon glyphicon-eye-open\" style=\"color: black;\" rel=\"tooltip\" data-toggle=\"tooltip\" title=\"Ver detalles\" onclick=\"$('#cuerpo').load('pages/cli_ver.php');\"></span></a>
          <a href=\"#cli_editar\"><span class=\"glyphicon glyphicon-pencil\" style=\"color: black;\" rel=\"tooltip\" data-toggle=\"tooltip\" title=\"Editar\" onclick=\"$('#cuerpo').load('pages/cli_editar.php');\"></span></a> 
      <span class=\"glyphicon glyphicon-remove\" style=\"color: black;\" rel=\"tooltip\" data-toggle=\"tooltip\" title=\"Eliminar\"></span></td>
</td>
    </tr>";
    }

    /* free result set */
    $result->free();
}
?> <!--
   <tr>
      <td>60.455.345-3</td>    	
      <td>Cemento Polpaico S.A.</td>
      <td>cemento.polpaico@mail.com</td>
      <td>Nombre Apellido</td>
      <td><a href="#cli_ver"><span class="glyphicon glyphicon-eye-open" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Ver detalles" onclick="$('#cuerpo').load('pages/cli_ver.php');"></span></a>
          <a href="#cli_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar" onclick="$('#cuerpo').load('pages/cli_editar.php');"></span></a> 
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>99.665.432-k</td>      	
      <td>Pesquera Pacific Star S.A.</td>
      <td>pesquera@mail.com</td>
      <td>Nombre Apellido</td>
      <td><a href="#cli_ver"><span class="glyphicon glyphicon-eye-open" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Ver detalles" onclick="$('#cuerpo').load('pages/cli_ver.php');"></span></a>
          <a href="#cli_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar" onclick="$('#cuerpo').load('pages/cli_editar.php');"></span></a> 
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>99.324.554-3</td>    	
      <td>Direct TV Chile Ltda.</td>
      <td>dtv@mail.com</td>
      <td>Nombre Apellido</td>
      <td><a href="#cli_ver"><span class="glyphicon glyphicon-eye-open" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Ver detalles" onclick="$('#cuerpo').load('pages/cli_ver.php');"></span></a>
          <a href="#cli_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar" onclick="$('#cuerpo').load('pages/cli_editar.php');"></span></a> 
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>99.434.531-1</td>     	
      <td>Telefónica Móviles Chile S.A.</td>
      <td>tefonica@mail.com</td>
      <td>Nombre Apellido</td>
      <td><a href="#cli_ver"><span class="glyphicon glyphicon-eye-open" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Ver detalles" onclick="$('#cuerpo').load('pages/cli_ver.php');"></span></a>
          <a href="#cli_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar" onclick="$('#cuerpo').load('pages/cli_editar.php');"></span></a> 
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>99.432.455-2</td>     	
      <td>Consorcio Maderero S.A.</td>
      <td>madera@mail.com</td>
      <td>Nombre Apellido</td>
      <td><a href="#cli_ver"><span class="glyphicon glyphicon-eye-open" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Ver detalles" onclick="$('#cuerpo').load('pages/cli_ver.php');"></span></a>
          <a href="#cli_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar" onclick="$('#cuerpo').load('pages/cli_editar.php');"></span></a> 
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>99.434.532-4</td>     	
      <td>Agrícola Los Ciruelos Ltda.</td>
      <td>agricola@mail.com</td>
      <td>Nombre Apellido</td>
      <td><a href="#cli_ver"><span class="glyphicon glyphicon-eye-open" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Ver detalles" onclick="$('#cuerpo').load('pages/cli_ver.php');"></span></a>
          <a href="#cli_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar" onclick="$('#cuerpo').load('pages/cli_editar.php');"></span></a> 
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>12.345.322-2</td>     	
      <td>Jaime Acevedo E.</td>
      <td>jaime.acevedo@mail.com</td>
      <td>Nombre Apellido</td>
      <td><a href="#cli_ver"><span class="glyphicon glyphicon-eye-open" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Ver detalles" onclick="$('#cuerpo').load('pages/cli_ver.php');"></span></a>
          <a href="#cli_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar" onclick="$('#cuerpo').load('pages/cli_editar.php');"></span></a> 
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>99.999.543-3</td>     	
      <td>VTR Ltda.</td>
      <td>vtr@mail.com</td>
      <td>Nombre Apellido</td>
      <td><a href="#cli_ver"><span class="glyphicon glyphicon-eye-open" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Ver detalles" onclick="$('#cuerpo').load('pages/cli_ver.php');"></span></a>
          <a href="#cli_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar" onclick="$('#cuerpo').load('pages/cli_editar.php');"></span></a> 
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>99.678.776-3</td>     	
      <td>Fanaloza S.A.</td>
      <td>fanaloza@mail.com</td>
      <td>Nombre Apellido</td>
      <td><a href="#cli_ver"><span class="glyphicon glyphicon-eye-open" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Ver detalles" onclick="$('#cuerpo').load('pages/cli_ver.php');"></span></a>
          <a href="#cli_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar" onclick="$('#cuerpo').load('pages/cli_editar.php');"></span></a> 
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>
    <tr>
      <td>99.545.111-2</td>     	
      <td>Jardines Botánicos Ltda.</td>
      <td>jardin@gmail.com</td>
      <td>Nombre Apellido</td>
      <td><a href="#cli_ver"><span class="glyphicon glyphicon-eye-open" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Ver detalles" onclick="$('#cuerpo').load('pages/cli_ver.php');"></span></a>
          <a href="#cli_editar"><span class="glyphicon glyphicon-pencil" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Editar" onclick="$('#cuerpo').load('pages/cli_editar.php');"></span></a> 
      <span class="glyphicon glyphicon-remove" style="color: black;" rel="tooltip" data-toggle="tooltip" title="Eliminar"></span></td>
    </tr>    -->
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

