<?php
	$conexion = new mysqli("localhost", "root", "azteka123", "db_chat");
	if ($conexion->connect_error) {
		die("Error de conexión: " . $conexion->connect_error);
	}
?>