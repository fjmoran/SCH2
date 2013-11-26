<div class="col-md-11">
 	<h2>Usuarios</h2>
	<h5>Administración de usuarios</h5>

	<br>
		<a onclick="$('#cuerpo').load('pages_admin/usr_crear.php');" href="#usr_crear" role="button" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

	<h4>Usuarios del sistema</h4>

	<?php 
	$_GET['table'] = $db.".Usuario";
	$_GET['select'] = "nombreUsuario as Nombre, userUsuario as Usuario, Perfil_idPerfil as Rol, activoUsuario as Estado";
	$_GET['orderby'] = "activoUsuario DESC, nombreUsuario";
	$_GET['tabla']['width'] = "25%, 25%, 25%, 15%";
	$_GET['tabla']['title'] = "Nombre, Usuario, Rol, Estado";
	$_GET['acciones'] = "true";
	$_GET['accion']['editar']['URL'] = "pages_admin/usr_editar.php";
	$_GET['accion']['editar']['title'] = "Editar";
	$_GET['accion']['editar']['class'] = "glyphicon glyphicon-pencil";	
	$_GET['accion']['tar']['URL'] = "pages_admin/usr_tar_mod.php";
	$_GET['accion']['tar']['title'] = "Tarifa del Usuario";
	$_GET['accion']['tar']['class'] = "glyphicon glyphicon-usd";	
	$_GET['accion']['clave']['URL'] = "#usr_clave_mod";
	$_GET['accion']['clave']['title'] = "Cambiar clave";
	$_GET['accion']['clave']['class'] = "glyphicon glyphicon-user";
	$_GET['accion']['activar']['URL'] = "pages_admin/usr_estado.php";

	#$_GET['debug']=1;	

	require("../recursos/zhi/table_generator.php");
	?>

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


<div id="usr_clave_mod" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="agregarLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Ingreso de Trabajo TEST</h4>
      </div>
      <form role="form">
        <div class="modal-body">
          <div class="row"> 
            <div class="col-md-6">
              <div class="form-group"> 
                <label for="nombre">Cliente:</label>
                <input id="nombre" class="form-control" type="text" placeholder="Nombre del cliente">
              </div> 
              <div class="form-group">
                <label for="horas">Horas:</label>
                  <select id="horas" class="form-control">            
                    <option>1</option>              
                    <option>2</option>
                    <option>3</option>  
                    <option>4</option>  
                    <option>5</option>  
                    <option>6</option>
                    <option>7</option>  
                    <option>8</option>  
                    <option>9</option>                                                                                              
                  </select>          
              </div>              
            </div>  
            <div class="col-md-6">
              <div class="form-group"> 
                <label id="lbl_materia" for="materia">Materia:</label>
                <input id="materia" class="form-control" type="text" placeholder="Materia">
              </div>
              <div class="form-group">
                <label for="minutos">Minutos:</label>
                  <select id="minutos" class="form-control"> 
                    <option>0</option>                              
                    <option>15</option>              
                    <option>30</option>
                    <option>45</option>                                                                                              
                  </select>          
              </div>               
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group"> 
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" class="form-control" rows="3"></textarea>
              </div>
            </div>             
          </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">guardar</button>
        </div>
      </form>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->  











    <script type="text/javascript"> 
      
      $(document).ready(function(){       
        /* Tooltip */
        $('.table').tooltip({
          selector: "[rel=tooltip]"
         })
      })    
    </script>
