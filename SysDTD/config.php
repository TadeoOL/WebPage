<?php

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sysdtd";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si se ha realizado la conexión correctamente
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>