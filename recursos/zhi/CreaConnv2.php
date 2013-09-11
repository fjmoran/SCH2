<?php
$user = "root";
$passwd = "root";
$host = "localhost";
$basedatos = "SCH2";

$mysqli = new mysqli($host, $user, $passwd, $basedatos);
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli = new mysqli($host, $user, $passwd, $basedatos, 8889);
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>