<?php
    session_start();
    if($_SESSION['id']){

    } else{
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="SysDTD es en sistema de Deteccion de depresion para Colegio Alerce">
    <meta name="author" content="DT Innovations">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>SysDTD - Test</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/logo.png">
</head>


<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.php"><img src="images/logo.png" alt="alternative"></a> 
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text page-scroll" href="index.php">SysDTD</a>
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php">INICIO</a>
                    </li>
                    <?php if(isset($_SESSION['usuario']) && $_SESSION['id'] <= 100): ?>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="resultados.php">RESULTADOS TEST</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <?php
                if(isset($_SESSION['usuario'])){
                    echo '<span class="nav-item"><a class="btn-outline-sm" href="#">' . $_SESSION['usuario'] . '</a></span>';
                    echo '<form action="logout.php" method="POST">';
                    echo '<span class="nav-item"><button type="submit" class="btn-outline-sm" name="cerrar-sesion">CERRAR SESIÓN</button></span>';
                    echo '</form>';
                } else {
                    echo '<span class="nav-item"><a class="btn-outline-sm" href="log-in.php">INICIAR SESION</a></span>';
                }
                ?>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->   
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310"><defs><style>.cls-1{fill:#275940;}</style></defs><title>header-frame</title><path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/></svg> 

    <!-- Details -->
    <div id="about" class="basic-1">
        <div class="container">
            <h1>Test de Trastorno Depresivo</h1>
            <p></p>
            <label>¡Bienvenido al cuestionario de detección de depresión! Para obtener los mejores resultados posibles, es importante que responda cada pregunta con sinceridad y sin distracciones.</label>
            <label>Antes de comenzar el cuestionario, asegúrese de estar en un lugar tranquilo y sin interrupciones. También es importante tomar suficiente tiempo para completar el cuestionario, sin sentirse apurado o distraído.</label>
            <label>El cuestionario consta de varias preguntas que evalúan sus sentimientos y comportamientos en los últimos tiempos. Por favor, lea cada pregunta cuidadosamente y seleccione la respuesta que mejor se aplica a su situación. No hay respuestas correctas o incorrectas, simplemente responda honestamente.</label>
            <label>Recuerde que todas sus respuestas son confidenciales y solo se utilizarán para evaluar su estado de salud mental. Si tiene alguna inquietud o pregunta durante el cuestionario, no dude en comunicarse con su profesional de la salud mental o su médico de cabecera.</label>
            <label>Gracias por tomarse el tiempo de completar este cuestionario. Sabemos que puede ser difícil hablar sobre problemas de salud mental, pero queremos asegurarnos de que tenga acceso a la atención médica que necesita.</label>
            <p></p>
            <div class="row">
                <div class="col-lg-12">
                    <?php if(isset($_SESSION['usuario']) && $_SESSION['id'] <= 100): ?>
                        <form method="post" action="editar_preguntas.php">
                        <button class="btn-solid-reg page-scroll" type="submit">EDITAR PREGUNTAS</button><br><br>
                        <br>
                        </form>
                    <?php endif; ?>

                    <form method="post" action="guardar_respuestas.php">
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

        // Obtener las preguntas de la tabla preguntas ordenadas por el idPregunta
        $sql = "SELECT idPregunta, pregunta FROM preguntas ORDER BY idPregunta";
        $result = mysqli_query($conn, $sql);

        // Mostrar las preguntas en elementos h3 y opciones de radio en elementos p
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<h6>".$row["idPregunta"].". ".$row["pregunta"]."</h6>";
                echo "<p>";
                echo "<input type='radio' name='pregunta".$row["idPregunta"]."' value='Muy deacuerdo' required> Muy deacuerdo<br>";
                echo "<input type='radio' name='pregunta".$row["idPregunta"]."' value='Deacuerdo' required> Deacuerdo<br>";
                echo "<input type='radio' name='pregunta".$row["idPregunta"]."' value='Indiferente' required> Indiferente<br>";
                echo "<input type='radio' name='pregunta".$row["idPregunta"]."' value='Desacuerdo' required> Desacuerdo<br>";
                echo "</p>";
            }
        } else {
            echo "No se encontraron preguntas en la base de datos.";
        }

        mysqli_close($conn);
    ?>
    <input type="hidden" name="idUser" value="<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''; ?>">
    <input type="hidden" name="nombreAlumno" value="<?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : ''; ?>">
    <button class="btn-solid-reg page-scroll" type="submit">Enviar Respuestas</button>
</form>                   
                </div> <!-- end of col -->
            </div> <!-- end of row -->           
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details -->

<!-- Footer -->
<svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#275940;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
<!-- end of footer -->

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>