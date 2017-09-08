<?php 
	$server = "localhost";
	$usuario = "root";
	$pass = "";
	$database = "tareacrud";

	$db = new mysqli($server, $usuario, $pass, $database);	

	/*if ($db->connect_error) {
		die('Error de conexión: '. $db->connect_error);
	}

	$query = 'SELECT * FROM usuarios';
	$result = $db -> query($query);

	if (!$result) {
		echo "Error al ejecutar consulta a la base de datos: " . $db->error;
	} else {
		echo "<table>\n";
	}

	while ($line = $result->fetch_assoc()) {
		echo "\t<tr>\n";
		echo "\t\t<td>{$line['id']}</td><td>{$line['contenido']}</td>\n";
		echo "\t</tr>\n";
	}

	$db -> close();*/