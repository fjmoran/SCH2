<?php

$pos = 0;
$tabla = "";
$id = "";

if (isset($_GET['debug'])) { echo "Borrado de Registro </br>";}

$pos = strpos($_GET['table'],".") + 1;
$tabla = substr($_GET['table'],$pos);
$id = "id".$tabla;
?>

<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
       <!--  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
        <h4 class="modal-title" id="myModalLabel">
          Borrado de Registro
        </h4>
      </div>
      <form role="form" method="post" target="IframeOutput" action="recursos/zhi/delete.php">
        <div class="modal-body">
          <div class="row"> 
            <div class="col-md-12">

              Esta seguro que desea borrar al item con <?php echo $id." ".$_GET[$id];
              //echo $_GET['callerURL'];
              ?>
             
            </div>  
          </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancelar</button>
          <button type="submit" class="btn btn-danger"> Borrar </button>
        </div>
        <input type="hidden" name="<?php echo $id; ?>" value="<?php echo $_GET[$id]; ?>">
        <input type="hidden" name="table" value="<?php echo $_GET['table']; ?>">
        <input type="hidden" name="callerURL" value="<?php echo $_GET['callerURL']; ?>">
        <input type="hidden" name="debug" value="1"> <!-- Borrar antes de paso a producción -->
      </form>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->