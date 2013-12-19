<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Cambio de Clave</h4>
      </div>
      <form role="form">
        <div class="modal-body">

          <div class="row"> <!-- Solo para usuario -->
            <div class="col-md-6">
              <div class="form-group"> 
                <label id="lbl_antclave" for="clave">Clave actual:</label>
                <input id="antclave" class="form-control" type="password" placeholder="Clave actual">
              </div>              
            </div>           
          </div>  <!-- Fin Solo para usuario -->

          <div class="row"> 
            <div class="col-md-6">
              <div class="form-group"> 
                <label id="lbl_nvaclave" for="clave">Nueva clave:</label>
                <input id="clave" class="form-control" type="password" placeholder="Nueva clave">
              </div>              
            </div>  
            <div class="col-md-6">
              <div class="form-group"> 
                <label id="lbl_nuevaclave2" for="clave2">Reingrese clave:</label>
                <input id="clave2" class="form-control" type="password" placeholder="Reingrese clave">
              </div>              
            </div>
          </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->