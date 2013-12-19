<link rel="stylesheet" href="http://jquery.bassistance.de/validate/demo/site-demos.css">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Cambio de Clave</h4>
      </div>
      <form role="form" method="POST" target="IframeOutput" action="recursos/zhi/cambio_clave.php" name="frm_passwd_change" id="frm_passwd_change">
        <div class="modal-body">
          <?php if (!isset($_GET['idUsuario'])) { ?> 
            <div class="row"> <!-- Solo para usuario -->
              <div class="col-md-6">
                <div class="form-group"> 
                  <label id="lbl_antclave" for="clave">Clave actual:</label>
                  <input id="antclave" class="form-control required" type="password" placeholder="Clave actual" name="antclave">
                </div>              
              </div>           
            </div>  <!-- Fin Solo para usuario -->
          <?php } ?>
          <div class="row"> 
            <div class="col-md-6">
              <div class="form-group"> 
                <label id="lbl_nvaclave" for="clave">Nueva clave:</label>
                <input id="pass" class="form-control required" type="password" placeholder="Nueva clave" name="pass_confirmation" data-validation="strength" 
     data-validation-strength="2">
              </div>              
            </div>  
            <div class="col-md-6">
              <div class="form-group"> 
                <label id="lbl_nuevaclave2" for="clave2">Reingrese clave:</label>
                <input id="pass_confirmation" class="form-control required" type="password" placeholder="Reingrese clave" name="pass" data-validation="confirmation">
              </div>              
            </div>
          </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </form>
<script src="recursos/jquery/jquery-1.10.2.js"></script>      
<script src="recursos/form-validator/jquery.form-validator.js"></script>

<script>
 
  $.validate({
    modules : 'security.dev',
  });
 
</script>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->

