<div class="col-md-11">
 <h2>Crear Permiso para un item de Menú</h2>
 <h5>Creación de permisos para items de menú</h5><br>

<?php 
$_GET['table'] = $bd.".PermisoMenu";
$_GET['select'] = "Menu_idMenu as Menu, Perfil_idPerfil as Rol";
$_GET['jquery'] = "$('#cuerpo').load('pages_admin/perm_menu_mod.php');";

require("../recursos/zhi/insert_table_generic.php");

?>

</div><!-- col-md-11 -->