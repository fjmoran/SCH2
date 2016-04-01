<?php
require_once "../zhi/CreaConnv2.php";

$query = "insert into Cliente ";
$query_col = array();
$query_set = array();
$tipo = $_POST['optionsRadios'];
unset($_POST['optionsRadios']);

switch ($tipo) {
  case 1: $_POST['nombres'] = $_POST['razon_social'];
          $_POST['nombre'] = $_POST['fantasia'];
          $_POST['tipo'] = "EMPRESA";
          unset($_POST['razon_social']);
          unset($_POST['fantasia']);
          break;
  case 2: $_POST['nombre'] = $_POST['nombres'] . " " . $_POST['apellido1']." ".$_POST['apellido2'];
          $_POST['tipoCliente'] = "PERSONA";
          break;
}

foreach ($_POST as $llave => $valor) {
  $pos = stripos($llave,"_id");
  if ($pos === false){
    $col_name = $llave."Cliente";
  }else{
    $col_name = $llave;
  }
  if (!empty($valor)){
    array_push($query_col, $col_name);
    array_push($query_set, $valor);
  }
}
$query .= "(". implode(",",$query_col) . ") VALUES (" . implode(",",$query_set) .")";
echo "<html>";
echo implode(",",$query_col);
echo "<br>=====<br>";
echo implode(",",$query_set);
echo "<br>=====<br>";
echo $query;
echo "</html>";

 ?>
