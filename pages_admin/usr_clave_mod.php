<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Cambio de Clave</h4>
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