<div class="col-md-11">
 <h2>Editar Ítem de Menú</h2>
 <h5>Edición de menu del sistema</h5><br>

<?php

$_GET['table'] = $bd.".Menu";
$_GET['select'] = "nombreMenu as Menu, nivelMenu as Nivel, urlMenu as URL, targetMenu as Destino, activoMenu as Estado";
$_GET['where'] = "idMenu='".$_GET['idMenu']."'";
$_GET['edit'] = 1;
$_GET['jquery'] = "$('#cuerpo').load('pages_admin/menu_mod.php');";

require("../recursos/zhi/insert_table_generic.php");
?>

</div><!-- col-md-11 -->