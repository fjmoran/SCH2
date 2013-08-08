<?php

$user = "root";
$passwd = "root";
$host = "localhost";

import_request_variables("Pg");
$connection = mysql_connect($host,$user,$passwd)
or die ("No me pude conectar con MYSQL --> " . mysql_error($conn));
mysql_select_db("ccdrm",$connection);
?>