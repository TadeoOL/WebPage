<?php
// Datos de conexión a MySQL
$host = "localhost";
$user = "root";
$password = "";
$database = "sysdtd";

// Conexión a MySQL
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Obtener el alumnoID a eliminar
$alumnoID = $_GET["alumnoID"];

// Eliminar el registro correspondiente en la tabla respuestas
$sql = "DELETE FROM respuestas WHERE alumnoID = '$alumnoID'";
if ($conn->query($sql) === TRUE) {
  // Eliminar el registro correspondiente en la tabla usuarios
  $sql = "DELETE FROM usuarios WHERE idUser = '$alumnoID'";
  if ($conn->query($sql) === TRUE) {
    echo '<script>
          alert("Usuario eliminado correctamente");
          location.href="resultados.php";
          </script>';
  } else {
    echo "Error al eliminar usuario: " . $conn->error;
  }
} else {
  echo "Error al eliminar usuario: " . $conn->error;
}

// Cerrar conexión a MySQL
$conn->close();
?>