<div class="col-md-11">
 <h2>Editar Permisos por Concepto</h2>
 <h5>Edición de permisos para un concepto</h5><br>

<?php

$_GET['table'] = $bd.".PermisoConcepto";
$_GET['select'] = "Perfil_idPerfil as Rol, Concepto_idConcepto as Concepto, readPermisoConcepto as Lectura, writePermisoConcepto as Escritura, deletePermisoConcepto as Eliminacion";
$_GET['where'] = "Concepto_idConcepto='".$_GET['Concepto_idConcepto']."' and Perfil_idPerfil='".$_GET['Perfil_idPerfil']."'";
$_GET['edit'] = 1;
$_GET['jquery'] = "$('#cuerpo').load('pages_admin/perm_con_mod.php');";

require("../recursos/zhi/insert_table_generic.php");
?>

</div><!-- col-md-11 -->