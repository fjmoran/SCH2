<div class="col-md-11">
 <h2>Crear Permiso para un concepto</h2>
 <h5>Creación de permisos para conceptos</h5><br>

<?php 
$_GET['table'] = $bd.".PermisoConcepto";
$_GET['select'] = "Perfil_idPerfil as Rol, Concepto_idConcepto as Concepto, readPermisoConcepto as Lectura, writePermisoConcepto as Escritura, deletePermisoConcepto as Eliminacion";
$_GET['jquery'] = "$('#cuerpo').load('pages_admin/perm_con_mod.php');";

require("../recursos/zhi/insert_table_generic.php");

?>

</div><!-- col-md-11 -->