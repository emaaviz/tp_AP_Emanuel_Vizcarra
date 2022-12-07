<?php
	$server = "localhost";
	$user = "aldo";
	$password = "admin";//poner tu propia contraseña, si tienes una.
	$bd = "siatBlt";

	$conexion = mysqli_connect($server, $user, $password, $bd);
	if (!$conexion){
		die('Error de Conexión: ' . mysqli_connect_errno());

	}
?>
