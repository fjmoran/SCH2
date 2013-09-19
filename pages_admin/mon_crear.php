<div class="col-md-11">
 <h2>Crear Moneda</h2>
 <h5>Creación de nuevas monedas en el sistema</h5><br>


<?php 
$_GET[table] = "SCH2.Moneda";
$_GET[select] = "nombreMoneda as Simbolo, descripcionMoneda as Descripcion";

require("../recursos/zhi/insert_table_generic.php");

?>
</div><!-- col-md-11 -->