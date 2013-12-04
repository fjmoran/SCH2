<?php
$pos = 0;
$tabla = "";
$id = "";

if (isset($_GET['debug'])) { echo "Activación y Desactivación </br>";}

$pos = strpos($_GET['table'],".") + 1;
$tabla = substr($_GET['table'],$pos);
$id = "id".$tabla;
?>
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
       <!--  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
        <h4 class="modal-title" id="myModalLabel">
        <?php
        	if ($_GET['activar'] == 0) {
	        	echo "Activaci&oacute;n";
        	}else {
	        	echo "Desactivaci&oacute;n";
        	}
        ?>
        </h4>
      </div>
      <form role="form">
        <div class="modal-body">
          <div class="row"> 
            <div class="col-md-12">

              Esta seguro que desea <?php if ($_GET['activar'] == 0) { echo "activar"; } else { echo "desactivar";} ?> al item Id <?php echo $id.",".$_GET[$id];
              ?>
             
            </div>  
          </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancelar</button>
          <button type="submit" class="btn 
          <?php 
          if ($_GET['activar'] == 0) {
          	echo "btn-success";
          }else{
	          echo "btn-danger"; 
          }
          ?>
          ">
          <?php
          if ($_GET['activar']==0){
	          echo "Activar";
          }else{
	          echo "Desactivar";
          }
          ?>
          </button> <!-- class="btn btn-success" -->
        </div>
      </form>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->