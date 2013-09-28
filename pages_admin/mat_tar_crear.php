<div class="col-md-11">
 <h2>Crear Tarifa por Materia</h2>
 <h5>Creación de nuevas tarifas por materia</h5><br>


<?php 
$_GET[table] = $bd.".TarifaMateria";
$_GET[select] = "Materia_idMateria as Materia, Moneda_idMoneda as Moneda, valorTarifaMateria as Valor";
$_GET[jquery] = "$('#cuerpo').load('pages_admin/mat_tar_mod.php');";

require("../recursos/zhi/insert_table_generic.php");

?>
</div><!-- col-md-11 -->