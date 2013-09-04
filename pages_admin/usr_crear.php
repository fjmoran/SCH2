<div class="col-md-11">
 <h2>Crear Usuario</h2>
 <h5>Creación de nuevos usuarios en el sistema.</h5>

	<form role="form">

    <div class="row"> <!-- fila con 2 columnas -->
      <div class="col-md-6"> <!-- columna izquierda -->
        <div class="form-group"> 
          <label for="nombre_completo">Nombre:</label>
          <input id="nombre_completo" class="form-control" type="text" placeholder="Nombre Apellido">           
        </div>
        <div class="form-group"> 
          <label for="contrasena_1">Contraseña:</label>
          <input id="contrasena_1" class="form-control" type="password" placeholder="Contraseña">           
        </div>
        <div class="form-group">
          <label for="perfil">Perfil del ususario:</label>
            <select id="abogado" class="form-control">
              <option>Perfil 1</option>                          
              <option>Perfil 2</option>
              <option>Perfil 3</option>  
              <option>Perfil 4</option>  
              <option>Perfil 5</option>                                                                          
            </select>          
        </div>                                   
      </div>
      <div class="col-md-6"> <!-- columna derecha -->

        <div class="form-group">
          <label for="usuario">Usuario:</label>
          <input id="usuario" class="form-control" type="text" placeholder="Usuario"> 
        </div>  

        <div class="form-group">
          <label for="contrasena_2">Reingresar contraseña:</label>
          <input id="contrasena_2" class="form-control" type="password" placeholder="Reingrese la contraseña">        
        </div>
        <div class="form-group">
          <label for="valor">Valor Hora:</label>
          <input id="valor" class="form-control" type="text" placeholder="Valor hora en pesos">       
        </div>                        
      </div>  
    </div>
        <div class="row pull-right"> <!-- fila para botones -->
	      <div class="col-md-12">
	        <p>
	          <button class="btn btn-default">Cancelar</button>
	          <button class="btn btn-primary">Guardar</button>
	        </p>
	      </div>
	    </div> 

	</form>	
</div><!-- col-md-11 -->