<div class="col-md-11">
 <h2>Crear Usuario</h2>
 <h5>Creación de nuevos usuarios en el sistema</h5><br>

	<form role="form">

    <ul class="nav nav-tabs" id="tabs_cliente">
      <li class="active"><a href="#general" data-toggle="tab">Datos generales</a></li>
      <li><a href="#tarifa" data-toggle="tab">Tarifa por defecto</a></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane active" id="general">
        <div class="row"> <!-- fila para sub titulo opcional -->
          <div class="col-md-12">
            <h4></h4>
          </div>
        </div> 
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
              <label for="correo">Correo electrónico:</label>
              <input id="correo" class="form-control" type="email" placeholder="email">           
            </div>  
            <div class="form-group"> 
              <label for="movil">Teléfono móvil:</label>
              <input id="movil" class="form-control" type="text" placeholder="Teléfono móvil">           
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
              <label for="rol">Rol del ususario:</label>
                <select id="rol" class="form-control">
                  <option>Rol 1</option>                          
                  <option>Rol 2</option>
                  <option>Rol 3</option>  
                  <option>Rol 4</option>  
                  <option>Rol 5</option>                                                                          
                </select>          
            </div>
            <div class="form-group"> 
              <label for="fono">Teléfono:</label>
              <input id="fono" class="form-control" type="text" placeholder="Teléfono">           
            </div>                                      
          </div>  
        </div>      
      </div>
      <div class="tab-pane" id="tarifa">
        <div class="row"> <!-- fila para sub titulo opcional -->
          <div class="col-md-12">
            <h4></h4>
            <div class="well"><b>Este monto coresponde a la tarifa base del usuario, y será la que se utilice en caso de no estar definida otra tarifa para el trabajo.</b></div>          
          </div>
        </div>

        <div class="row"> <!-- fila con 2 columnas -->
          <div class="col-md-6"> <!-- columna izquierda -->
            <div class="form-group">
              <label for="moneda">Moneda:</label>
                <select id="moneda" class="form-control">
                  <option>$</option>                          
                  <option>U$</option>
                  <option>UF</option>                                                                          
                </select>          
            </div>                                                               
          </div>
          <div class="col-md-6"> <!-- columna derecha -->        
            <div class="form-group"> 
              <label for="tarifa">Tarifa:</label>
              <input id="tarifa" class="form-control" type="text" placeholder="Tarifa">           
            </div>                         
          </div>  
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