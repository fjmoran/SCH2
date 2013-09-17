<?php

require_once "CreaConnv2.php";
require "auth.php";

$select = "select ";

if (isset($_GET[select])) { 
	$select = $select . $_GET[select];
}
else { 
	$select = $select . "*";
}

$select = $select ." from ". $_GET[table]; 

if (isset($_GET[where])) { 
	$select = $select." where ".$_GET[where];
}

if (isset($_GET[debug])) {echo $select ."</br>";}

$rs = $mysqli->query($select);
if (!$rs) {
	echo "Falló al ejecutar la consulta: (". $mysqli->errno .") ". $mysqli->error;
}

if (isset($_GET[debug])) {
	echo "Numero de Filas ". $rs->num_rows."</br>";
	echo "====================</br>";
}

$info_campo = $rs->fetch_fields();
if (isset($_GET[debug])){ print_r($info_campo);}
$info_fila = $rs->fetch_assoc();
if (isset($_GET[debug])){ print_r($info_fila);}

?>
	<form role="form">
    <div class="row"> 
      <div class="col-md-6">
        <?php
        foreach ($info_campo as $valor) {
     			if (isset($_GET[debug])) {
            printf("Nombre:        %s</br>", $valor->name);
            printf("Tabla:         %s</br>", $valor->table);
            printf("Longitud max.: %d</br>", $valor->max_length);
            printf("Banderas:      %d</br>", $valor->flags);
            printf("Tipo:          %d</br>", $valor->type);
            echo "====================</br>";
          }
        ?>
        <div class="form-group">
          <?php 
          switch ($valor->type) {
          	case 252:
          	case 253:	echo "<label for=\"".$valor->orgname."\">".$valor->name.":</label>
          	<input id=\"".$valor->orgname."\" class=\"form-control\" type=\"text\" name=\"".$valor->orgname."\"";
          						if ((isset($_GET[where])) and ($rs->num_rows)){
          							echo "value=\"".$info_fila[$valor->name]."\"";
          						}
          						echo " >";
          						break;
          	case 1:	echo "<label for=\"".$valor->orgname."\">".$valor->name.":</label>
          	<div class=\"checkbox\">
          	<label>
          	<input type=\"checkbox\" value=\"".$valor->name."\" name=\"".$valor->orgname ."\"";
              			if ((isset($_GET[where])) and ($rs->num_rows)){
              				if ($info_fila[$valor->name]){
              					echo "checked";
              				}
              			}else{
              				echo " checked";
              			}
               			echo " > Habilitado</label></div>";
            				break;
          }
          ?>
          </div> 
      <?php
      }
      ?>
    </div>
    <div class="col-md-6"> <!-- columna vacia -->
    </div>
  </div>

  <div class="row pull-right"> <!-- fila para botones -->
    <div class="col-md-12">
      <p>
        <button class="btn btn-default">Cancelar</button>
        <button class="btn btn-primary">Guardar</button>
      </p>
    </div>
  </div> 
</form>	