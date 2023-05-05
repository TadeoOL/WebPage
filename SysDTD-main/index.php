<?php
    session_start();
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
    <title>SysDTD - Inicio</title>
    
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
            <a class="navbar-brand logo-image" href="#header"><img src="images/logo.png" alt="alternative"></a> 
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
                        <a class="nav-link page-scroll" href="#header">INICIO <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">TEST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#beneficios">BENEFICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#colegio">NOSOTROS</a>
                    </li>
                    <?php if(isset($_SESSION['usuario']) && $_SESSION['id'] > 100): ?>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="test.php">REALIZAR TEST</a>
                        </li>
                    <?php elseif(isset($_SESSION['usuario']) && $_SESSION['id'] <= 100): ?>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="test.php">REALIZAR TEST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="resultados.php">RESULTADOS</a>
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1>Test de trastorno depresivo</h1>
                            <p class="p-large"></p> 
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="images/header.png" alt="alternative">
                            </div> <!-- end of img-wrapper -->
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310"><defs><style>.cls-1{fill:#275940;}</style></defs><title>header-frame</title><path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/></svg>
    <!-- end of header -->

    <!-- Details -->
    <div id="about" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Acerca de SysDTD</h2>
                        <p>Nuestro sistema de detección de trastorno depresivo utiliza las últimas tecnologías de ciencia de datos para ayudar a diagnosticar correctamente si un alumno tiene este trastorno. El sistema recopila información de los cuestionarios completados por los estudiantes, incluyendo sus respuestas a preguntas específicas y sus patrones de respuesta.</p>
                        <p>Nuestro algoritmo de ciencia de datos procesa esta información y utiliza modelos estadísticos avanzados para identificar patrones y tendencias en las respuestas de los estudiantes. El sistema también tiene en cuenta otros factores, como la edad del estudiante, su género y cualquier otro síntoma relacionado con la depresión.</p>
                        <a class="btn-solid-reg page-scroll" href="log-in.php">REALIZAR TEST</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/data_science.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details -->

    <!-- Description -->
    <div id="beneficios" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">
                    <h2 class="h2-heading">Beneficios de utilizar SysDTD</h2>
                    </div>  
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/clock.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">DETECCIÓN TEMPRANA DE TRASTORNOS DEPRESIVOS</h4>
                            <p></p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/check.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">DETECCIÓN TEMPRANA Y CONFIABLE</h4>
                            <p></p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/lock.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">PRIVACIDAD Y CONFIDENCIALIDAD ASEGURADAS</h4>
                            <p></p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/test.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">AHORRO DE TIEMPO Y RECURSOS EN COMPARACION A DIAGNOSTICOS TRADICIONALES</h4>
                            <p></p>
                        </div>
                    </div>
                    <!-- end of card -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/access.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">ACCESO FACIL Y CONVENIENTE</h4>
                            <p></p>
                        </div>
                    </div>
                    <!-- end of card -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/results.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">FACILITA LA DETECCIÓN TEMPRANA DE POSIBLES CASOS DE DEPRESIÓN</h4>
                            <p></p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->

    <!-- Details -->
    <div id="colegio" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Colegio Alerce y DT Innovations</h2>
                        <p>En nuestra empresa, estamos comprometidos con mejorar la salud mental de las personas, y creemos que la educación es uno de los pilares fundamentales para lograrlo. Por eso, cuando conocimos al Colegio Alerce y su misión de formar a sus alumnos en un ambiente inclusivo y respetuoso, supimos que teníamos que colaborar. 
                            Juntos, hemos creado un sistema innovador que permite detectar de manera temprana signos de depresión en los estudiantes, 
                            y así brindarles el apoyo que necesitan para superar cualquier obstáculo. Nos enorgullece trabajar con el Colegio Alerce en esta misión en común, 
                            y estamos seguros de que juntos podemos hacer una gran diferencia en la vida de nuestros jóvenes.</p>
                        <a class="btn-solid-reg page-scroll" href="https://alerce.edu.mx">VISITA COLEGIO ALERCE</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/campus.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details -->
    
    <!-- Footer -->
    <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#275940;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>Sobre nosotros</h4>
                        <p class="p-small">Colegio Alerce fue fundado hace casi 30 años con la visión de ofrecer una educación de calidad asequible. Es una comunidad escolar que diferencia a sus graduados del resto debido a sus altos estándares morales y su capacidad para innovar, construir y aplicar su conocimiento y carisma, así como su facilidad con las palabras.</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Horarios de Oficina</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Lunes a Viernes: 7:00 a.m. a 3:00 p.m. <br>
                                    Citas: 9:00 a.m. a 11:30 a.m. <br>
                                    Dias festivos: 8:00 a.m. a 2:00 p.m.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Contacto</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">Blvd Navarrete 631 <br> Col. Obispos Residencial, Hermosillo Sonora. <br> México C.P. 83210</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="white" href="https://wa.me/526623615855?text=Hello%20ALERCE">662-428-1020</a> <i class="fas fa-globe"></i><a class="white" href="https://alerce.edu.mx">Colegio Alerce</a></div>
                            </li>
                        </ul>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Design by DT Innovations</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
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