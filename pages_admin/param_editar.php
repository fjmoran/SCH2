<div class="col-md-11">
 <h2>Editar Parámetro Global</h2>
 <h5>Edición de las parámetro global del sistema</h5><br>

<?php

$_GET['table'] = $bd.".Parametro";
$_GET['select'] = "nombreParametros, valorParametros as Valor, activoParametros as Estado";
$_GET['where'] = "idParametros='".$_GET['idParametros']."'";
$_GET['edit'] = 1;
$_GET['jquery'] = "$('#cuerpo').load('pages_admin/param_mod.php');";

require("../recursos/zhi/insert_table_generic.php");
?>

</div><!-- col-md-11 -->