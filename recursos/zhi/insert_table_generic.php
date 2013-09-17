<?php

require_once "CreaConnv2.php";

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
#echo "Numero de Filas ". $rs->num_rows."</br>";
#echo "====================</br>";

$info_campo = $rs->fetch_fields();

?>
	<form role="form">
    <div class="row"> <!-- fila para sub titulo opcional -->
      <div class="col-md-12">
<?php
    foreach ($info_campo as $valor) {
 /*       printf("Nombre:        %s</br>", $valor->name);
        printf("Tabla:         %s</br>", $valor->table);
        printf("Longitud max.: %d</br>", $valor->max_length);
        printf("Banderas:      %d</br>", $valor->flags);
        printf("Tipo:          %d</br>", $valor->type);
        echo "====================</br>"; */
?>
<div class=\"form-group\">    
          <?php 
          switch ($valor->type) {
          	case 252:
          	case 253:	echo "<label for=\"".$valor->orgname."\">".$valor->name.":</label>
          <input id=\"".$valor->orgname."\" class=\"form-control\" type=\"text\" >";
          						break;
          	case 1:	echo "<label for=\"".$valor->orgname."\">".$valor->name.":</label>           
          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" value=\"".$value->name."\" checked>
              Habilitado
            </label>";
            				break;
          }
          ?>
</div> 
<?php
}

?>
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