<div class="col-md-11">
 <h2>Crear Concepto</h2>
 <h5>Creación de nuevos conceptos</h5><br>

<?php 
$_GET['table'] = $bd.".Concepto";
$_GET['select'] = "nombreConcepto as Concepto, descripcionConcepto as Descripcion";
$_GET['jquery'] = "$('#cuerpo').load('pages_admin/concep_mod.php');";

require("../recursos/zhi/insert_table_generic.php");

?>

</div><!-- col-md-11 -->