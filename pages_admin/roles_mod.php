<?php

require_once "../recursos/zhi/CreaConnv2.php";
require "../recursos/zhi/auth.php";

?>
<div class="col-md-11">
 	<h2>Roles</h2>
	<h5>Administración de roles</h5>
	
	<br>
		<a onclick="$('#cuerpo').load('pages_admin/roles_crear.php');" href="#roles_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Roles del sistema</h4>
	<table class="table table-striped table-bordered table-condensed">
	  <thead>
	    <tr>
	      <th width=30%>Nombre del rol</th>
	      <th width=45%>Descripción</th>
	      <th width=15%>Estado</th>
	      <th width=10%>Acciones</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php
		  	$query = "select * from SCH2.Perfil order by activoPerfil DESC, idPerfil";
		  	if ($rs = $mysqli->query($query)){
		  		if ($rs->num_rows > 0){
		  			 // echo "En if num_rows</br>";
		  			while($row = $rs->fetch_assoc()){
		  				echo "<tr>\n";
	  					echo "<td>".$row[nombrePerfil]."</td>\n";
	  					echo "<td>".$row[descripcionPerfil]."</td>\n";
		  				echo "<td><span class=\"label ";
		  				if ($row[activoPerfil]){
		  					echo "label-success";
		  				}else {
		  					echo "label-danger";
		  				}
		  				echo "\">";
		  				if ($row[activoPerfil]){
		  					echo "Activo";
		  				}else {
		  					echo "Inactivo";
		  				}
		  				echo "</span></td>\n";
		  				echo "<td>\n";
		  				echo "<a onclick=\"$('#cuerpo').load('pages_admin/roles_editar.php?idPerfil=".$row[idPerfil]."');\" href=\"#roles_editar\">";
		  				echo "<span class=\"glyphicon glyphicon-pencil\" style=\"color: black;\" rel=\"tooltip\" data-toggle=\"tooltip\" title=\"Editar\"></span></a>";
		  				if ($row[activoPerfil]){
		  					echo "&nbsp;<span class=\"glyphicon glyphicon-remove-circle\" style=\"color: black;\" rel=\"tooltip\" data-toggle=\"tooltip\" title=\"Desactivar\"></span>";
		  				}else {
		  					echo "&nbsp;<span class=\"glyphicon glyphicon-refresh\" rel=\"tooltip\" data-toggle=\"tooltip\" title=\"Reactivar\"></span>";
		  				}
		  				echo "</td>\n";	  					
		  				echo "</tr>\n";
		  			}
		  		}
		  	}else{
		  		echo "Falló al ejecutar la consulta: (". $mysqli->errno .") ". $mysqli->error;
		  	}
	  	?>

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
