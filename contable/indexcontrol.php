<?php
$usuario=$_GET["usuario"];
$contrasenia=$_GET["contrasenia"];
if ($usuario=='Efra' and $contrasenia=='123456')
{
	session_start();
	$_SESSION["usuario"]=$usuario;
	$_SESSION["rol"]='Usuario';
	header("Location: bentrada.php");
	exit;
}
if ($usuario=='Alejandra' and $contrasenia=='123456')
{
	session_start();
	$_SESSION["usuario"]=$usuario;
	$_SESSION["rol"]= 'Cajas';
	header("Location: bentrada.php");
	exit;
}
header("Location: index.php");
?>