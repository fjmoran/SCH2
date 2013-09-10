<?php
session_start();

if (!isset($_SESSION["auth"]) || $_SESSION["auth"]!=1)
{
	header("location:./login.php?error=2");
	exit ();
}
?>