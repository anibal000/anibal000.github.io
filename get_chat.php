<?php
	require_once "conexion.php";
	$sql = "SELECT * FROM chat ORDER BY id DESC LIMIT 10";
	$resultado = $conexion->query($sql);
	while ($fila = $resultado->fetch_assoc()) {
		echo "<p><strong>" . $fila["usuario"] . ":</strong> " . $fila["mensaje"] . "</p>";
	}
?>