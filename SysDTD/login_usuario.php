<?php
session_start();

$correo=$_POST['emailuser'];
$pass=$_POST['pass'];

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

// Verificar si ya hay un intento de inicio de sesión fallido en los últimos 3 minutos
if (isset($_SESSION['failed_attempts']) && time() - $_SESSION['failed_attempts'] < 60) {
    $remainingTime = 60 - (time() - $_SESSION['failed_attempts']);
    echo '<script> 
            alert("Demasiados intentos fallidos. Por favor, espere ' . $remainingTime . ' segundos antes de intentar nuevamente."); 
            location.href="log-in.php";
         </script>';

    exit();
}

$consulta="SELECT*FROM usuarios where emailuser='$correo' and pass='$pass'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);
$fila = mysqli_fetch_assoc($resultado);

if($filas){
    session_start();
    $username = $fila['username'];
    $usernameMAY = strtoupper($username);
    $_SESSION['usuario'] = $usernameMAY;
    $_SESSION['id'] = $fila['idUser'];
    if($_SESSION['id'] > 100){
        header("Location:test.php");
    }else{
        header("Location:resultados.php");
    }

}else{
    // Registro del intento de inicio de sesión fallido
    if (isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts']++;
    } else {
        $_SESSION['login_attempts'] = 1;
    }
    // Si se alcanza el límite de 3 intentos fallidos, se bloquea el acceso durante 1 minuto
    if ($_SESSION['login_attempts'] >= 3) {
        $_SESSION['failed_attempts'] = time();
        echo '<script> 
                alert("Demasiados intentos fallidos. Por favor, espere 1 minuto antes de intentar nuevamente."); 
                location.href="log-in.php";
            </script>';
    } else {
        echo '<script> 
                alert("Datos Incorrectos"); 
                location.href="log-in.php";
            </script>';
    }
}

mysqli_free_result($resultado);
mysqli_close($conn);