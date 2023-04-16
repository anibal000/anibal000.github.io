<?php
	require_once "conexion.php";
	$usuario = $_POST["usuario"];
	$mensaje = $_POST["mensaje"];
	$sql = "INSERT INTO chat (usuario, mensaje) VALUES ('$usuario', '$mensaje')";
	$conexion->query($sql);
?>