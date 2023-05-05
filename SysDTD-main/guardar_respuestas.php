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

// Obtener respuestas del formulario
$idUser = $_POST["idUser"];
$nombreAlumno = $_POST["nombreAlumno"];
$pregunta1 = $_POST["pregunta1"];
$pregunta2 = $_POST["pregunta2"];
$pregunta3 = $_POST["pregunta3"];
$pregunta4 = $_POST["pregunta4"];
$pregunta5 = $_POST["pregunta5"];
$pregunta6 = $_POST["pregunta6"];
$pregunta7 = $_POST["pregunta7"];
$pregunta8 = $_POST["pregunta8"];
$pregunta9 = $_POST["pregunta9"];
$pregunta10 = $_POST["pregunta10"];
$pregunta11 = $_POST["pregunta11"];
$pregunta12 = $_POST["pregunta12"];
$pregunta13 = $_POST["pregunta13"];
$pregunta14 = $_POST["pregunta14"];
$pregunta15 = $_POST["pregunta15"];

// Definir el valor numérico de cada respuesta
$answerValues = array(
  'Muy deacuerdo' => 3,
  'Deacuerdo' => 2,
  'Indiferente' => 1,
  'Desacuerdo' => 0
);

// Inicializar el contador de puntos
$totalPoints = 0;

// Iterar sobre las 15 preguntas y sumar los puntos
for ($i = 1; $i <= 15; $i++) {
  $answer = $_POST["pregunta" . $i];
  $totalPoints += $answerValues[$answer];
}

$resultado = ($totalPoints >= 30) ? 'Si' : 'No';

// Insertar respuestas en la base de datos
try {
  $sql = "INSERT INTO respuestas (alumnoID, nombreAlumno, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, pregunta9, pregunta10, pregunta11, pregunta12, pregunta13, pregunta14, pregunta15, resultado) 
  VALUES ('$idUser','$nombreAlumno','$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4', '$pregunta5', '$pregunta6', '$pregunta7', '$pregunta8', '$pregunta9', '$pregunta10', '$pregunta11', '$pregunta12', '$pregunta13', '$pregunta14', '$pregunta15','$resultado')";
  
  if ($conn->query($sql) === TRUE) {
    echo '<script>
          alert("Datos guardados correctamente");
          location.href="index.php";
          </script>';
  }
} catch (mysqli_sql_exception $exception) {
  echo '<script>
        alert("Este usuario ya respondio el test")
        location.href="index.php";
        </script>'; 
}

// Cerrar conexión a MySQL
$conn->close();
?>
