<div class="col-md-11">
 <h2>Editar Concepto</h2>
 <h5>Edición de concepto</h5><br>

<?php

$_GET['table'] = $bd.".Concepto";
$_GET['select'] = "nombreConcepto as Concepto, descripcionConcepto as Descripcion, activoConcepto as Estado";
$_GET['where'] = "idConcepto='".$_GET['idConcepto']."'";
$_GET['edit'] = 1;
$_GET['jquery'] = "$('#cuerpo').load('pages_admin/concep_mod.php');";

require("../recursos/zhi/insert_table_generic.php");
?>

</div><!-- col-md-11 -->