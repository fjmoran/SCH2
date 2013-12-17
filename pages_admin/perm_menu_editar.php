<div class="col-md-11">
 <h2>Editar Permisos por Menú</h2>
 <h5>Edición de permisos para un menú</h5><br>

<?php

$_GET['table'] = $bd.".PermisoMenu";
$_GET['select'] = "Menu_idMenu as Menu, Perfil_idPerfil as Rol";
$_GET['where'] = "Menu_idMenu='".$_GET['Menu_idMenu']."' and Perfil_idPerfil='".$_GET['Perfil_idPerfil']."'";
$_GET['edit'] = 1;
$_GET['jquery'] = "$('#cuerpo').load('pages_admin/perm_menu_mod.php');";

require("../recursos/zhi/insert_table_generic.php");
?>

</div><!-- col-md-11 -->