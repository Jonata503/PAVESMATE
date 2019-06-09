<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Pagina Principal</title>
	<link rel="stylesheet" type="text/css" href="css/style_menu.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<header>
        <img class="log" src="img/log_Start.png">
        <!--<div class="title-menu">
            <nav>
                <ul>
                    <li><a href="http://localhost/version_0.2/perfilDocente.php"><span><i class="fas fa-user"></i></span>Mi Perfil</a></li>
                    <li><a href="http://localhost/version_0.2/listaEstudiantes.php"><span><i class="fas fa-users"></i></span>Alumnos</a></li>
                    <li><a href="#"><span><i class="fas fa-book"></i></span>Curso</a></li>
                    <li><a href="#"><span><i class="fas fa-poll-h"></i></span>Notas</a></li>
                    <li><a href="#"><span><i class="fas fa-sign-out-alt"></i></span>Salir</a></li>

                </ul>
            </nav>
        </div>
        <a href="#" class="btn-menu"><span><i class="fas fa-bars"></i></span></a>-->
	</header>
    <center>
        <div class="sub-titulo">
            <img class="log-escuela" src="img/logCE.png">
        </div>
        <div class="menu-div">
            <a class="a" href="http://localhost/version_0.2/perfilDocente.php"><span><i class="fas fa-user"></i></span>Mi Perfil</a>
            <a class="a" href="http://localhost/version_0.2/listaEstudiantes.php"><span><i class="fas fa-users"></i></span>Alumnos</a>
            <a class="a" href="#"><span><i class="fas fa-book"></i></span>Curso</a>
            <a class="a" href="#"><span><i class="fas fa-poll-h"></i></span>Notas</a>
            <a class="a" href="#" ><span><i class="fas fa-sign-out-alt"></i></span>Salir</a>
        </div>
    <div class="contenido">
        <section>
            <img class="img-contenido" src="img/contenido.png">
            <p class="article">PAVESMATE es una plataforma que servirá como un apoyo en el aprendizaje de los estudiantes de cuarto grado, en la asignatura de matemáticas del C. E Miguel Guevara.</p> <br>
            <p class="article">Implementando las nuevas metodologías de enseñanza (ESMATE) impulsada por el Ministerio de Educación, Ciencias y Tecnología (MINED) con el apoyo de la agencia de cooperación (JICA).</p> <br>
            <p class="article">Usando la tecnología como un apoyo extra en el aprendizaje de los estudiantes.</p>
        </section>
        <aside>
            <a class="h" href="#"><span><i class="fas fa-poll-h"></i></span><b>Actividad</b></a>
            <a class="h" href="#"><span><i class="far fa-calendar-alt"></i></span><b>Asistencia <br>
            <?php echo "Hoy " . date("d") . " del " . date("m") . " de " . date("Y"); ?></b></a>
            <a class="h" href="#"><span><i class="fas fa-calculator"></i></span><b>Refuerzo</b></a>
        </aside>
    </div>
    </center>
    <script src="main/menu.js"></script>
</body>
</html>