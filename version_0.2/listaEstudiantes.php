<!DOCTYOE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8">
        <title>Lista Estudiantes</title>
        <link rel="stylesheet" type="text/css" href="css/style_lista.css">
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
        <br>
        <center>
            <form action="" method="POST">
                <div class="bar-titulo">
                    <p class="ptil">Listado de estudiantes</p>
                    <select name="opciones">
                        <option value="0">- - Elija - -</option>
                        <option value="activo">Activos</option>
                        <option value="suspendido">Suspendidos</option>
                        <option value="archivado">Graduados</option>
                        <option value="todos">Todos</option>
                    </select>
                    <input class="btn-ver" type="submit" name="btn" value="ver">
<a class="link-agregar" href="http://localhost/version_0.2/registratEstudiante.html"><span><i class="fas fa-user-plus"></i></span>Agregar Estudiante</a>
                </div>
            </form>
                
            <?php
            include('main/conexion.php');
            if (isset($_POST['btn'])) {
                # code...
                $condicon = $_POST['opciones'];
                
                switch ($condicon) {
                    case 'activo':
                    $sql = "SELECT alumno.id_alumno, usuario_alumno.usuario, usuario_alumno.clave, usuario_alumno.estado, alumno.nombre, alumno.apellido, alumno.edad, alumno.genero, alumno.tipo_sangre, detalle_alumno.encargado, detalle_alumno.parentesco, detalle_alumno.nom_madre, detalle_alumno.nom_padre, detalle_alumno.telefono, detalle_alumno.direccion FROM alumno INNER JOIN detalle_alumno on alumno.id_alumno=detalle_alumno.id_alumno INNER JOIN usuario_alumno on alumno.id_alumno=usuario_alumno.id_alumno WHERE usuario_alumno.estado = '". $condicon ."'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table>
                        <tr class=\"encabesado\">
                        <th><p>Estado</p></th>
                        <th><p>Nombre</p></th>
                        <th><p>Apellido</p></th>
                        <th><p>Edad</p></th>
                        <th><p>Genero</p></th>
                        <th><p>Tipo de sangre</p></th>
                        <th><p>Encargado</p></th>
                        <th><p>Parentesco</p></th>
                        <td><p>Madre</p></th>
                        <th><p>Padre</p></th>
                        <th><p>Telefono</p></th>
                        <th><p>Direccion</p></th>
                        <th><p>Opcines</p></th>
                        </tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "
                <tr>
                    <td>".$row["estado"]."</td>
                    <td>".$row["nombre"]."</td>
                    <td>".$row["apellido"]."</td>
                    <td> ".$row["edad"]."</td>
                    <td> ".$row["genero"]."</td>
                    <td> ".$row["tipo_sangre"]."</td>
                    <td> ".$row["encargado"]."</td>
                    <td> ".$row["parentesco"]."</td>
                    <td> ".$row["nom_madre"]."</td>
                    <td> ".$row["nom_padre"]."</td>
                    <td> ".$row["telefono"]."</td>
                    <td> ".$row["direccion"]."</td>
                    <td><a class=\"link\" href=\"http://localhost/version_0.2/modificarEstudiante.php?_id=<?php echo $row['id_alumno'];?>\" class=\"a\"><span><i class=\"fas fa-user-edit\"></i></span></a></td>
                    <td><a class=\"link\" href=\"#\" class=\"a\"><span><i class=\"fas fa-user-minus\"></i></span></a></td>
                </tr>";
                }
            }else {
                    echo "<P>La pagina experimenta fallas</p>";
            }
            $conn->close();
                        break;
                    case 'suspendido':
                        # code...

                    $sql = "SELECT alumno.id_alumno, usuario_alumno.usuario, usuario_alumno.clave, usuario_alumno.estado, alumno.nombre, alumno.apellido, alumno.edad, alumno.genero, alumno.tipo_sangre, detalle_alumno.encargado, detalle_alumno.parentesco, detalle_alumno.nom_madre, detalle_alumno.nom_padre, detalle_alumno.telefono, detalle_alumno.direccion FROM alumno INNER JOIN detalle_alumno on alumno.id_alumno=detalle_alumno.id_alumno INNER JOIN usuario_alumno on alumno.id_alumno=usuario_alumno.id_alumno WHERE usuario_alumno.estado = '". $condicon ."'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table>
                        <tr class=\"encabesado\">
                        <th><p>Estado</p></th>
                        <th><p>Nombre</p></th>
                        <th><p>Apellido</p></th>
                        <th><p>Edad</p></th>
                        <th><p>Genero</p></th>
                        <th><p>Tipo de sangre</p></th>
                        <th><p>Encargado</p></th>
                        <th><p>Parentesco</p></th>
                        <td><p>Madre</p></th>
                        <th><p>Padre</p></th>
                        <th><p>Telefono</p></th>
                        <th><p>Direccion</p></th>
                        <th><p>Opcines</p></th>
                        </tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "
                <tr>
                    <td>".$row["estado"]."</td>
                    <td>".$row["nombre"]."</td>
                    <td>".$row["apellido"]."</td>
                    <td> ".$row["edad"]."</td>
                    <td> ".$row["genero"]."</td>
                    <td> ".$row["tipo_sangre"]."</td>
                    <td> ".$row["encargado"]."</td>
                    <td> ".$row["parentesco"]."</td>
                    <td> ".$row["nom_madre"]."</td>
                    <td> ".$row["nom_padre"]."</td>
                    <td> ".$row["telefono"]."</td>
                    <td> ".$row["direccion"]."</td>
                    <td><a class=\"link\" href=\"http://localhost/version_0.2/modificarEstudiante.php?_id=<?php echo $row['id_alumno'];?>\" class=\"a\"><span><i class=\"fas fa-user-edit\"></i></span></a></td>
                    <td><a class=\"link\" href=\"#\" class=\"a\"><span><i class=\"fas fa-user-minus\"></i></span></a></td>
                </tr>";
                }
            }else {
                    echo "<P>La pagina experimenta fallas</p>";
            }
            $conn->close();
                        break;
                    case 'archivado':
                        # code...

                    $sql = "SELECT alumno.id_alumno, usuario_alumno.usuario, usuario_alumno.clave, usuario_alumno.estado, alumno.nombre, alumno.apellido, alumno.edad, alumno.genero, alumno.tipo_sangre, detalle_alumno.encargado, detalle_alumno.parentesco, detalle_alumno.nom_madre, detalle_alumno.nom_padre, detalle_alumno.telefono, detalle_alumno.direccion FROM alumno INNER JOIN detalle_alumno on alumno.id_alumno=detalle_alumno.id_alumno INNER JOIN usuario_alumno on alumno.id_alumno=usuario_alumno.id_alumno WHERE usuario_alumno.estado = '". $condicon ."'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table>
                        <tr class=\"encabesado\">
                        <th><p>Estado</p></th>
                        <th><p>Nombre</p></th>
                        <th><p>Apellido</p></th>
                        <th><p>Edad</p></th>
                        <th><p>Genero</p></th>
                        <th><p>Tipo de sangre</p></th>
                        <th><p>Encargado</p></th>
                        <th><p>Parentesco</p></th>
                        <td><p>Madre</p></th>
                        <th><p>Padre</p></th>
                        <th><p>Telefono</p></th>
                        <th><p>Direccion</p></th>
                        <th><p>Opcines</p></th>
                        </tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "
                <tr>
                    <td>".$row["estado"]."</td>
                    <td>".$row["nombre"]."</td>
                    <td>".$row["apellido"]."</td>
                    <td> ".$row["edad"]."</td>
                    <td> ".$row["genero"]."</td>
                    <td> ".$row["tipo_sangre"]."</td>
                    <td> ".$row["encargado"]."</td>
                    <td> ".$row["parentesco"]."</td>
                    <td> ".$row["nom_madre"]."</td>
                    <td> ".$row["nom_padre"]."</td>
                    <td> ".$row["telefono"]."</td>
                    <td> ".$row["direccion"]."</td>
                    <td><a class=\"link\" href=\"http://localhost/version_0.2/modificarEstudiante.php?_id=<?php echo $row['id_alumno'];?>\" class=\"a\"><span><i class=\"fas fa-user-edit\"></i></span></a></td>
                    <td><a class=\"link\" href=\"#\" class=\"a\"><span><i class=\"fas fa-user-minus\"></i></span></a></td>
                </tr>";
                }
            }else {
                    echo "<P>La pagina experimenta fallas</p>";
            }
            $conn->close();
                        break;
                    case 'todos':
                        # code...

                    $sql = "SELECT alumno.id_alumno, usuario_alumno.usuario, usuario_alumno.clave, usuario_alumno.estado, alumno.nombre, alumno.apellido, alumno.edad, alumno.genero, alumno.tipo_sangre, detalle_alumno.encargado, detalle_alumno.parentesco, detalle_alumno.nom_madre, detalle_alumno.nom_padre, detalle_alumno.telefono, detalle_alumno.direccion FROM alumno INNER JOIN detalle_alumno on alumno.id_alumno=detalle_alumno.id_alumno INNER JOIN usuario_alumno on alumno.id_alumno=usuario_alumno.id_alumno";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table>
                        <tr class=\"encabesado\">
                        <th><p>Estado</p></th>
                        <th><p>Nombre</p></th>
                        <th><p>Apellido</p></th>
                        <th><p>Edad</p></th>
                        <th><p>Genero</p></th>
                        <th><p>Tipo de sangre</p></th>
                        <th><p>Encargado</p></th>
                        <th><p>Parentesco</p></th>
                        <td><p>Madre</p></th>
                        <th><p>Padre</p></th>
                        <th><p>Telefono</p></th>
                        <th><p>Direccion</p></th>
                        <th><p>Opcines</p></th>
                        </tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "
                <tr>
                    <td>".$row["estado"]."</td>
                    <td>".$row["nombre"]."</td>
                    <td>".$row["apellido"]."</td>
                    <td> ".$row["edad"]."</td>
                    <td> ".$row["genero"]."</td>
                    <td> ".$row["tipo_sangre"]."</td>
                    <td> ".$row["encargado"]."</td>
                    <td> ".$row["parentesco"]."</td>
                    <td> ".$row["nom_madre"]."</td>
                    <td> ".$row["nom_padre"]."</td>
                    <td> ".$row["telefono"]."</td>
                    <td> ".$row["direccion"]."</td>
                    <td><a class=\"link\" href=\"http://localhost/version_0.2/modificarEstudiante.php?_id=<?php echo $row['id_alumno'];?>\" class=\"a\"><span><i class=\"fas fa-user-edit\"></i></span></a></td>
                    <td><a class=\"link\" href=\"#\" class=\"a\"><span><i class=\"fas fa-user-minus\"></i></span></a></td>
                </tr>";
                }
            }else {
                    echo "<P>La pagina experimenta fallas</p>";
            }
            $conn->close();
                        break;
                    
                    default:
                        $sql = "SELECT alumno.id_alumno, usuario_alumno.usuario, usuario_alumno.clave, usuario_alumno.estado, alumno.nombre, alumno.apellido, alumno.edad, alumno.genero, alumno.tipo_sangre, detalle_alumno.encargado, detalle_alumno.parentesco, detalle_alumno.nom_madre, detalle_alumno.nom_padre, detalle_alumno.telefono, detalle_alumno.direccion FROM alumno INNER JOIN detalle_alumno on alumno.id_alumno=detalle_alumno.id_alumno INNER JOIN usuario_alumno on alumno.id_alumno=usuario_alumno.id_alumno WHERE usuario_alumno.estado = 'activo'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table>
                        <tr class=\"encabesado\">
                        <th><p>Estado</p></th>
                        <th><p>Nombre</p></th>
                        <th><p>Apellido</p></th>
                        <th><p>Edad</p></th>
                        <th><p>Genero</p></th>
                        <th><p>Tipo de sangre</p></th>
                        <th><p>Encargado</p></th>
                        <th><p>Parentesco</p></th>
                        <td><p>Madre</p></th>
                        <th><p>Padre</p></th>
                        <th><p>Telefono</p></th>
                        <th><p>Direccion</p></th>
                        <th><p>Opcines</p></th>
                        </tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "
                <tr>
                    <td>".$row["estado"]."</td>
                    <td>".$row["nombre"]."</td>
                    <td>".$row["apellido"]."</td>
                    <td> ".$row["edad"]."</td>
                    <td> ".$row["genero"]."</td>
                    <td> ".$row["tipo_sangre"]."</td>
                    <td> ".$row["encargado"]."</td>
                    <td> ".$row["parentesco"]."</td>
                    <td> ".$row["nom_madre"]."</td>
                    <td> ".$row["nom_padre"]."</td>
                    <td> ".$row["telefono"]."</td>
                    <td> ".$row["direccion"]."</td>
                    <td><a class=\"link\" href=\"http://localhost/version_0.2/modificarEstudiante.php?_id=<?php echo $id;?>\" class=\"a\"><span><i class=\"fas fa-user-edit\"></i></span></a></td>
                    <td><a class=\"link\" href=\"#\" class=\"a\"><span><i class=\"fas fa-user-minus\"></i></span></a></td>
                </tr>";
                }
            }else {
                    echo "<P>La pagina experimenta fallas</p>";
            }
            $conn->close();
                        break;
                }
            }
            ?>
        </center>
    </body>
</html>