<?php
// Datos de conexión a MySQL
$host = "localhost";
$user = "root";
$password = "Xjco8RjNMV9l";
$database = "sysdtd";

// Conexión a MySQL
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Obtener el alumnoID a eliminar
$alumnoID = $_GET["alumnoID"];

// Eliminar el registro correspondiente en la base de datos
$sql = "DELETE FROM respuestas WHERE alumnoID = '$alumnoID'";
if ($conn->query($sql) === TRUE) {
  echo '<script>
        alert("Usuario eliminado correctamente");
        location.href="resultados.php";
        </script>';
} else {
  echo "Error al eliminar usuario: " . $conn->error;
}

// Cerrar conexión a MySQL
$conn->close();
?>
