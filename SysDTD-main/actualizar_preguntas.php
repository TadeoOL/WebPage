<?php
	// Conexión a la base de datos
	$servername = "localhost";
	$username = "root";
	$password = "Xjco8RjNMV9l";
	$dbname = "sysdtd";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Verificar la conexión
	if (!$conn) {
	    die("Conexión fallida: " . mysqli_connect_error());
	}

	// Actualizar las preguntas en la base de datos
	foreach($_POST as $key => $value) {
	    // Solo se actualizarán los campos que comiencen con "pregunta_"
	    if (substr($key, 0, 9) === "pregunta_") {
	        $idPregunta = substr($key, 9);
	        $pregunta = mysqli_real_escape_string($conn, $value);
	        $sql = "UPDATE preguntas SET pregunta='$pregunta' WHERE idPregunta='$idPregunta'";
	        mysqli_query($conn, $sql);
	    }
	}

	mysqli_close($conn);

	// Redirigir a la página que muestra las preguntas actualizadas
	header("Location: test.php");
	exit();
?>

