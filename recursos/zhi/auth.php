<?php
session_start();

if (!isset($_SESSION["auth"]) || $_SESSION["auth"]!=1)
{
$host  = $_SERVER['HTTP_HOST'];
$dir_uri   = explode('/',$_SERVER['PHP_SELF']);
$uri = $dir_uri[1];
$extra = 'login.php?error=2';
header("Location: http://$host/$uri/$extra");
exit ();
}
?>