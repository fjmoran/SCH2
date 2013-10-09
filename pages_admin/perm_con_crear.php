<div class="col-md-11">
 <h2>Crear Permiso para un concepto</h2>
 <h5>Creación de permisos para conceptos</h5><br>

<?php 
$_GET['table'] = $bd.".PermisoConcepto";
$_GET['select'] = "Concepto_idConcepto as Concepto, readPermisoConcepto as Lectura, writePermisoConcepto as Escritura, deletePermisoConcepto as Eliminacion, Perfil_idPerfil as Rol";
$_GET['jquery'] = "$('#cuerpo').load('pages_admin/perm_con_mod.php');";
$_GET['debug'] = 1;

require("../recursos/zhi/insert_table_generic.php");

?>

</div><!-- col-md-11 -->