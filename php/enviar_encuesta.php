<!DOCTYPE html>
<html lang="es">
    
	<head>
		<title>Encuesta enviada - InmoAzteca</title>
		<meta name="author" content="Raul Ortega (InmoAzteca)">
		<meta name="description" content="Pagina de que la encuesta ha sido enviado a InmoAzteca">
		<meta name="keywords" content="inmoazteca, inmuebles, inmuebles valdepeñas, valdepenas, casas, pisos">
		<meta charset="utf-8">
        <link rel="icon" href="../img/favicon-azteca.png">
		<link rel="stylesheet" type="text/css" href="../css/azteca.css">
		<link rel="stylesheet" type="text/css" href="../css/scrollbars.css">
        <link rel="stylesheet" type="text/css" href="../css/encuestaphp.css">
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 900px)" href="../css/m-azteca.css">
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 900px)" href="../css/m-encuestaphp.css">
        <link rel="stylesheet" type="text/css" media="print" href="../css/print.css">
        <?php
            $pregunta1 = $_GET['pregunta1'];
            $pregunta2 = $_GET['pregunta2'];
            $pregunta3 = $_GET['pregunta3'];
        ?>
	</head>
    
	<body>
		<header>
            <img id="img-menu" src="../img/menu.png">
			<a href="../index.html"><img src="../img/logo-azteca.png" alt="Logo InmoAzteca" /></a>
		</header>
        <div class="sticky">
            <div class="contenedor-progreso">
                <div class="barra-progreso" id="barra"></div>
            </div>
            <nav class="menu">
                <ul class="nav">
                    <li><a href="../index.html">Inico</a></li>
                    <li><a href="#">Inmuebles</a>
                        <ul>
                            <li><a href="../casas.html">Casas</a></li>
                            <li><a href="../pisos.html">Pisos</a></li>
                        </ul>
                    </li>
                    <li><a href="../index.html#quienes-somos">Quienes somos</a></li>
                    <li><a href="../index.html#contacto">Contacto</a></li>
                    <li><a href="../merch.html">Merchadising</a></li>
                </ul>
            </nav>
        </div>
        <div id="menu-movil">
            <p><span>X</span></p>
            <nav>
                <ul class="nav-movil">
                    <li><a href="../index.html">Inico</a></li>
                    <li><a href="../casas.html">Casas</a></li>
                    <li><a href="../pisos.html">Pisos</a></li>
                    <li><a href="../index.html#quienes-somos">Quienes somos</a></li>
                    <li><a href="../index.html#contacto">Contacto</a></li>
                    <li><a href="../merch.html">Merchadising</a></li>
                </ul>
            </nav>
        </div>
        <div id="azte-cuerpo">
            <article>
                <h1>La encuesta se ha enviado correctamente</h1>
                <br/>
                <img src="../img/apartamento.jpg" alt="Apartamento">
                <br/>
                <h3><a href="../index.html">Volver a Inicio</a></h3>
            </article>
        </div>
		<footer>
            <address>
                <p><img src="../img/icon/localizacion.png" alt="Localiad">&nbsp;Localidad: Valdepe&ntilde;as - Ciudad Real Domicilio: Calle Juanillo nº48</p>
                <p><img src="../img/icon/web.png" alt="Web">&nbsp;Web: inmoazteca.laacademiaval.es</p>
                <p><img src="../img/icon/usuario.png" alt="Persona responsable">&nbsp;Persona responsable: Ra&uacute;l Ortega Gallego</p>
                <p><img src="../img/icon/email.png" alt="Correo electrónico">&nbsp;Correo electrónico: raul_admin@laacademia.net</p>
            </address>
            <p><a href="../encuesta.html">Val&oacute;ranos</a></p>
            <p><img src="../img/icon/facebook.png" alt="Facebook">&nbsp;<img src="../img/icon/instagram.png" alt="Instagram">&nbsp;<img src="../img/icon/twitter.png" alt="Twitter">&nbsp;<img src="../img/icon/youtube.png" alt="Youtube"></p>
            <p><span><a href="../politicas/aviso-legal.html">Aviso legal</a></span>&nbsp;<span><a href="../politicas/politica-privacidad.html">Pol&iacute;tica de privacidad</a></span>&nbsp;<span><a href="../politicas/politica-cookies.html">Política de cookies</a></span>&nbsp;<span><a href="../politicas/rpgd.html">RPGD</a></span></p>
			<p class="copyright">&copy; InmoAzteca 2019</p>
		</footer>
        <script type="text/javascript" src="../js/jquery-3.4.0.min.js"></script>
        <script type="text/javascript" src="../js/menu-movil.js"></script>
        <script type="text/javascript" src="../js/barra-progreso.js"></script>
	</body>
    
</html>