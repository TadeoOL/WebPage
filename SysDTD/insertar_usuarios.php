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

// Función para insertar o actualizar los datos del CSV en la tabla usuarios
function insertOrUpdateData($conn, $data) {
    // Verificar si el idUser ya existe en la tabla usuarios
    $idUser = $data[0];
    $sql = "SELECT idUser FROM usuarios WHERE idUser = '$idUser'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Actualizar datos en la tabla usuarios
        $grado = $data[1];
        $grupo = $data[2];
        $emailuser = $data[3];
        $username = $data[4];
        $pass = $data[5];

        $sql = "UPDATE usuarios SET grado = '$grado', grupo = '$grupo', emailuser = '$emailuser', username = '$username', pass = '$pass' WHERE idUser = '$idUser'";

        if ($conn->query($sql) === TRUE) {
            return true; // Devolver true si el registro se actualizó correctamente
        } else {
            echo "Error al actualizar registro: " . $conn->error . "<br>";
            return false; // Devolver false si hubo un error al actualizar el registro
        }                  
      
    } else {
        // Insertar datos en la tabla usuarios
        $sql = "INSERT INTO usuarios (idUser, grado, grupo, emailuser, username, pass) VALUES ('$idUser', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]')";

        if ($conn->query($sql) === TRUE) {
            return true; // Devolver true si el registro se insertó correctamente
        } else {
            echo "Error al insertar registro: " . $conn->error . "<br>";
            return false; // Devolver false si hubo un error al insertar el registro
        }               
    }
}

// Verificar si se ha enviado un archivo CSV
if(isset($_FILES["csvFile"])) {
    // Obtener información del archivo CSV
    $fileName = $_FILES["csvFile"]["tmp_name"];
    $delimiter = ",";
    
    // Verificar si el archivo existe
    if (file_exists($fileName) && is_readable($fileName)) {
        $file = fopen($fileName, "r");
        $firstLine = true;
        $updated = false; // Variable para verificar si al menos un registro se actualizó correctamente

        // Leer datos del archivo CSV y pasarlos a la tabla usuarios
        while (($data = fgetcsv($file, 1000, $delimiter)) !== FALSE) {
            if ($firstLine) {
                $firstLine = false;
                continue;
            }

            if (insertOrUpdateData($conn, $data)) {
                $updated = true; // Actualizar variable si al menos un registro se actualizó correctamente
            }
        }

        fclose($file);
        if ($updated) {
            echo "Registros actualizados correctamente.";
        } else {
            echo "No se actualizaron registros.";
        }
    } else {
        echo "El archivo seleccionado no existe o no es legible.";
    }

}


// Cerrar conexión a la base de datos
$conn->close();


?>


