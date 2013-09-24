<div class="col-md-11">
 <h2>Crear Usuario</h2>
 <h5>Creación de nuevos usuarios en el sistema</h5><br>

<?php 
$_GET[table] = "SCH2.Usuario";
$_GET[select] = "nombreUsuario as Nombre, userUsuario as Usuario, claveUsuario as Clave, correoUsuario as Correo, telefonoUsuario as Telefono, celularUsuario as Movil, activoUsuario as Estado, Perfil_idPerfil as Rol";
$_GET[jquery] = "$('#cuerpo').load('pages_admin/usr_mod.php');";

require("../recursos/zhi/insert_table_generic.php");

?>

</div><!-- col-md-11 -->