<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8">
	<title>Mi Perfil</title>
    <link href="css/style_perfil.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="menu-bar">
            <a href="#" class="btn-menu"><span><i class="fas fa-bars"></i></span></a>
        </div>
        <nav>
            <ul>
                <li><a class="nav" href="http://localhost/version_0.2/menu.php"><span><i class="fas fa-home"></i></span>Inicio</a></li>
                <li><a class="nav" href="http://localhost/version_0.2/perfilDocente.php"><span><i class="fas fa-user"></i></span>Mi Perfil</a></li>
                <li><a class="nav" href="http://localhost/version_0.2/listaEstudiantes.php"><span><i class="fas fa-users"></i></span>Lista Alumnos</a></li>
                <li><a class="nav" href="#"><span><i class="fas fa-book"></i></span>Curso</a></li>
                <li><a class="nav" href="#"><span><i class="fas fa-poll-h"></i></span>Notas</a></li>
            </ul>
        </nav>
    </header>
    <?php
    include('main/conexion.php');

    $sql = mysqli_query($conn,"SELECT docente.id_docente, usuario_docente.tipo, docente.foto, docente.nombre, docente.apellido, docente.genero, docente.telefono, usuario_docente.correo FROM docente INNER JOIN usuario_docente on docente.id_docente=usuario_docente.id_docente WHERE usuario_docente.tipo = 'Admin'");

    $result = mysqli_num_rows($sql);

    if ($result> 0) {
        $data = mysqli_fetch_array($sql);
        $id = $data['id_docente'];
        $tipo = $data['tipo'];
        $foto = $data['foto'];
        $nombre = $data ['nombre'];
        $apellido = $data ['apellido'];
        $genero = $data ['genero'];
        $telefono = $data ['telefono'];
        $correo = $data ['correo'];
    }else{
            echo "<h1 class\"error\">Pag. experimenta fallos</h1>";
    }
    ?>
        
    <center>
        <form action="" method="POST">
            <div class="titulo">
                <p class="lbtitulo">Mi Perfil</p>
                <a class="link" href="http://localhost/version_0.2/modificarDocente.php?id=<?php echo $id;?>"><span><i class="fas fa-user-edit"></i></span>Modificar</a>
            </div>
            <div class="body">
                <div class="div-img"><img class="photo" src="photo/<?php echo $foto; ?>"></div>
                <table>
                    <tr>
                        <td><p class="lb">Tipo docente:</p></td>
                        <td><p class="lb"><?php echo $tipo; ?></p></td>
                    </tr>
                    <tr>
                        <td><p class="lb">Nombre:</p></td>
                        <td><p class="lb"><?php echo $nombre; ?></p></td>
                    </tr>
                    <tr>
                        <td><p class="lb">Apellido:</p></td>
                        <td><p class="lb"><?php echo $apellido; ?></p></td>
                    </tr>
                    <tr>
                        <td><p class="lb">Genero:</p></td>
                    <td><p class="lb"><?php echo $genero; ?></p></td>
                    </tr>
                    <tr>
                        <td><p class="lb">Telefono:</p></td>
                        <td><p class="lb"><?php echo $telefono; ?></p></td>
                    </tr>
                    <tr>
                        <td><p class="lb">Correo:</p></td>
                        <td><p class="lb"><?php echo $correo; ?></p></td>
                    </tr>
                </table>
            </div>
        </form>
    </center>
</body>
</html>