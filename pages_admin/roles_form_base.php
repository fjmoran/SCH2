	<form role="form">
    <div class="row"> <!-- fila para sub titulo opcional -->
      <div class="col-md-12">
        <h4></h4>
      </div>
    </div> 
    <div class="row"> <!-- fila con 2 columnas -->
      <div class="col-md-6"> <!-- columna izquierda -->
        <div class="form-group"> 
          <label for="nombre_rol">Nombre:</label>
          <input id="nombre_rol" class="form-control" type="text" placeholder="Nombre del rol">           
        </div> 
        <div class="form-group">
          <label for="nombre_rol">Estado:</label>           
          <div class="checkbox">
            <label>
              <input type="checkbox" value="option1" checked>
              Habilitado
            </label>
          </div>

        </div>                                                             
      </div>
      <div class="col-md-6"> <!-- columna derecha -->
        <div class="form-group">
          <label for="desc_rol">Descripción:</label>
          <input id="desc_rol" class="form-control" type="text" placeholder="Descripción del rol"> 
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