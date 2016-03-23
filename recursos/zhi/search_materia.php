<?php
require_once ("CreaConnv2.php");

$query = "select idMateria, nombreMateria from Materia where Cliente_idCliente={$_GET['idCliente']}";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    $rows = array();
    while ($row = $result->fetch_assoc()) {
    	$rows[] = $row;
    }
    /* free result set */
    $result->free();

    print json_encode($rows);
}
?>
