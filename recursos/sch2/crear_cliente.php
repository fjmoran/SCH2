<?php
require_once "../zhi/CreaConnv2.php";

$query = "insert into Cliente ";
$query_cliente_col = array("nombresCliente","nombreCliente","apellido1Cliente","apellido2Cliente","rutCliente","giroCliente","telefonoCliente","emailCliente","faxCliente","webCliente","Usuario_idUsuario","tipoCliente");
$query_cliente_set = array();
$query_dir_col = array("Pais_idPais","Comuna_idComuna","Region_idRegion","calleDireccion");
$query_dir_set = array();
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

foreach($query_cliente_col as $ValorCliente){
  $pos = stripos($ValorCliente,"Cliente");
  if($pos != false){
    $llave = substr($ValorCliente,0,-7);
    $query_cliente_set[$ValorCliente] = $_POST[$llave];
  }else{
    $query_cliente_set[$ValorCliente] = $_POST[$ValorCliente];
  }
}

foreach ($query_cliente_set as $llave => $valor) {
  $col_name = $llave;
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
