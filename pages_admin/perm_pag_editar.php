<div class="col-md-11">
 <h2>Editar Permisos por Página</h2>
 <h5>Edición de permisos para un página</h5><br>

<?php

$_GET['table'] = $bd.".PermisoPagina";
$_GET['select'] = "Pagina_idPagina as Pagina, Perfil_idPerfil as Rol";
$_GET['where'] = "Pagina_idPagina='".$_GET['Pagina_idPagina']."' and Perfil_idPerfil='".$_GET['Perfil_idPerfil']."'";
$_GET['edit'] = 1;
$_GET['jquery'] = "$('#cuerpo').load('pages_admin/perm_pag_mod.php');";

require("../recursos/zhi/insert_table_generic.php");
?>

</div><!-- col-md-11 -->