<div class="col-md-11">
 <h2>Crear Permiso para una página</h2>
 <h5>Creación de permisos para una página</h5><br>

<?php 
$_GET['table'] = $bd.".PermisoPagina";
$_GET['select'] = "Pagina_idPagina as Pagina, Perfil_idPerfil as Rol";
$_GET['jquery'] = "$('#cuerpo').load('pages_admin/perm_pag_mod.php');";

require("../recursos/zhi/insert_table_generic.php");

?>

</div><!-- col-md-11 -->