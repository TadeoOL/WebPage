<?php
session_start();
if(isset($_POST['cerrar-sesion'])){
    session_destroy();
}
header("Location: log-in.php");
exit;
?>
