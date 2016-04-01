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
  $col_name = $llave."Cliente";
  if (!empty($valor)){
    array_push($query_col, $col_name);
    array_push($query_set, $valor);
  }
}

echo "<html>";
echo "<verbatim>";
print_r($query_col);
echo "<br>=====<br>";
print_r($query_set);
echo "</verbatim>";
echo "</html>";

 ?>
