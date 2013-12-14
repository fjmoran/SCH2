<div class="col-md-11">
 <h2>Crear item de Menú</h2>
 <h5>Creación de items de menú</h5><br>

<?php 
$_GET['table'] = $bd.".Menu";
	$_GET['select'] = "nombreMenu as Menu, nivelMenu as Nivel, Pagina_idPagina as Pagina, Menu_idMenu as MenuPadre, Menu_Pagina_idPagina as MenuPagina, activoMenu as Estado";
$_GET['jquery'] = "$('#cuerpo').load('pages_admin/menu_mod.php');";

require("../recursos/zhi/insert_table_generic.php");

?>

</div><!-- col-md-11 -->