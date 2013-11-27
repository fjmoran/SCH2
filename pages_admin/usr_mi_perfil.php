<div class="col-md-11">
 <h2>Mi Perfil</h2>
 <h5>Los siguentes son sus datos en el sistema</h5>

	<form role="form">

    <div class="row"> <!-- fila con 2 columnas -->
      <div class="col-md-6"> <!-- columna izquierda -->
        <div class="form-group"> 
          <label for="nombre_completo">Nombre:</label>
          <input id="nombre_completo" class="form-control" type="text" placeholder="Nombre Apellido"> 
        </div>

        <div class="form-group">
          <label for="rol">Rol del ususario:</label>
            <select id="rol" class="form-control" disabled>
              <option>Rol 1</option>                                   
            </select>          
        </div>

        <div class="form-group"> 
          <label for="fono1">Teléfono:</label>
          <input id="fono1" class="form-control" type="text" placeholder="Teléfono">           
        </div>        

      </div>
      <div class="col-md-6"> <!-- columna derecha -->

        <div class="form-group">
          <label for="usuario">Usuario:</label>
          <input id="usuario" class="form-control" type="text" placeholder="Usuario" disabled> 
        </div>

        <div class="form-group">
          <label for="correo">Correo electrónico:</label>
          <input id="correo" class="form-control" type="email" placeholder="Correo electrónico"> 
        </div> 

        <div class="form-group"> 
          <label for="fono2">Teléfono móvil:</label>
          <input id="fono2" class="form-control" type="text" placeholder="Teléfono móvil">           
        </div>                   
                    
      </div>  
    </div>
        <div class="row pull-right"> <!-- fila para botones -->
	      <div class="col-md-12">
	        <p>
            <button class="btn btn-default">Cancelar</button>
	          <button class="btn btn-default" data-toggle="modal" data-target="#usr_clave_mod">Cambiar clave</button>
	          <button class="btn btn-primary">Guardar</button>
	        </p>
	      </div>
	    </div> 

	</form>	
</div><!-- col-md-11 -->


<div id="usr_clave_mod" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="agregarLabel" aria-hidden="true">

  <?php require("usr_clave_mod.php"); ?>
    
</div><!-- modal -->  
