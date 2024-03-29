<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8">
        <title>Crear cuenta</title>
        <link href="css/style_registrate.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <script src="js/valProfesor.js"></script>
    </head>
    <body>
        <header>
            <a class="txtAtras" href="http://localhost/version_0.2/listaEstudiantes.php"><span><i class="fas fa-arrow-alt-circle-left"></i></span></a>
            <p class="txtTitulo">Crear Cuenta Docente</p>
        </header>
        <center>
            <form class="padre" action="" onsubmit="return validar()" enctype="multipart/form-data" method="POST">
                <div class="bar-h1">
                    <p>Datos de usuario</p>
                </div>
                <div class="caja-user">
                    <div class="photo">
                        <label for="foto">Foto</label>
                        <div class="prevPhoto">
                            <span class="delPhoto notBlock">X</span>
                            <label for="foto"></label>
                        </div>
                        <div class="upimg">
                            <input type="file" name="foto" id="foto">
                        </div>
                        <div id="form_alert"></div>
                    </div>
                    <table>
                        <tr>
                            <td>
                                <p class="parrafo">Usuario:</p>
                            </td>
                            <td>
                                <input class="txt" id="txtUsuario" type="text" name="usuario" placeholder="Usuario"  autocomplete="off" onblur="revisar(this); revisaLongitud(this, 10)" onkeyup="revisar(this); revisaLongitud(this, 10)">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="parrafo">Contraseña:</p>
                            </td>
                            <td>
                                <input class="txt" id="txtClave" type="password" name="clave" placeholder="ejem00000"  autocomplete="off" onblur="revisar(this); revisaLongitud(this, 8)" onkeyup="revisar(this); revisaLongitud(this, 8)">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="parrafo">Tipo Docente:</p>
                            </td>
                            <td>
                                <select id="op" name="op">
                                    <option value="0">-- Opcines -- </option>
                                    <option value="admin">Administrador</option>
                                    <option value="colaborador">Colavorador</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="bar-h1">
                    <p>Datos del docente</p>
                </div>
                <div class="caja-data">
                    <table>
                        <tr>
                            <td>
                                <p class="parrafo">Nombre:</p>
                            </td>
                            <td>
                                <input class="txt" id="txtNombre" type="text" name="nombre"  autocomplete="off" onblur="revisar(this); revisaLongitud(this)" onkeyup="revisar(this); revisaLongitud(this)">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="parrafo">Apellido:</p>
                            </td>
                            <td>
                                <input class="txt" id="txtApellido" type="text" name="apellido"  autocomplete="off" onblur="revisar(this); revisaLongitud(this)" onkeyup="revisar(this); revisaLongitud(this)">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="parrafo">Genero:</p>
                            </td>
                            <td>
                                <select id="genero" name="genero">
                                    <option value="0">Tipo</option>
                                    <option value="1">Femenino</option>
                                    <option value="2">Masculino</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td>
                                <p class="parrafo">Telefono:</p>
                            </td>
                            <td>
                                <input class="txt" id="txtTelefono" type="text" name="telefono"  autocomplete="off" onblur="revisar(this); revisaLongitud(this, 8)" onkeyup="revisar(this); revisaLongitud(this, 8)">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="parrafo">Correo:</p>
                            </td>
                            <td>
                                <input  class="txt" id="txtEmail" type="email" name="correo"  placeholder="Ejemplo@gmail.com"  autocomplete="off" onblur="revisar(this); revisarEmail(this)" onkeyup="revisar(this); revisarEmail(this)">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" aling="center">
                                 <input class="btn" name="agregar" type="submit" value="Crear Cuneta">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </center>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/funcion.js" type="text/javascript"></script>
    </body>
</html>
<?php
if (isset($_POST['agregar'])) {
    include('main/conexion.php');

    # datos personales...
    $nombre_img=$_FILES['foto']['name'];
    $tipo_img=$_FILES['foto']['type'];
    $tamano=$_FILES['foto']['size'];
    //echo "nombre: ".$nombre_img." tipo: ".$tipo_img." tamaño: ".$tamano;

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $opcion = $_POST['genero'];
    $telefono = $_POST['telefono'];

    # datos user...
    $user = $_POST['usuario'];
    $clave = $_POST['clave'];
    $correo = $_POST['correo'];
    $tipoUser = $_POST['op'];

    #incriptacion...
    $pass = strip_tags($clave);
    $pass_encriptada0 = md5 ($pass); //Encriptacion nivel 1
    $pass_encriptada1 = crc32($pass_encriptada0); //Encriptacion nivel 1
    $pass_encriptada2 = crypt($pass_encriptada1, "xtemp"); //Encriptacion nivel 2
    $pass_encriptada = sha1("xtemp".$pass_encriptada2); //Encriptacion nivel 3
    
    $data = "SELECT usuario_docente.correo, usuario_docente.tipo FROM usuario_docente WHERE usuario_docente.correo = '$correo' OR usuario_docente.tipo = '$tipoUser'";

    $resultado = $conn->query($data);
    if ($resultado->num_rows > 0){
        # code...
        print '<script language="JavaScript">'; 
        print 'alert("Sus datos ingresados ya existen...");'; 
        print '</script>';
    }else {
        if ($opcion == 1) {
            $g = "Femenino";
            //echo $opcion. $nombre_img;
            if ($tamano <= 5000000) {//validando el tamaño
                if ($tipo_img == "image/jpeg" || $tipo_img == "image/jpg" || $tipo_img == "image/png") {
                    $perfil=$_SERVER['DOCUMENT_ROOT'] . '/version_0.2/photo/';
                    move_uploaded_file($_FILES['foto']['tmp_name'], $perfil . $nombre_img);

                    $sql = "INSERT INTO `docente`(`foto`,`nombre`, `apellido`, `genero`, `telefono`) VALUES ('$nombre_img','$nombre','$apellido','$g','$telefono')";

                    if ($conn->query($sql) === TRUE) {
                        $last_id = $conn->insert_id;
                        $sqli = "INSERT INTO `usuario_docente`(`id_docente`, `usuario`, `clave`, `correo`) VALUES ('$last_id','$user','$pass_encriptada','$correo')";

                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();
                }else{
                    $error = 'El tipo de imagen no es valido';
                }

            }else{
                $error = 'El imagen demaciado pesada...';
            }
        } else if ($opcion == 2) {
            $g = "Masculino";
            if ($tamano <= 5000000) {//validando el tamaño

                if ($tipo_img == "image/jpeg" || $tipo_img == "image/jpg" || $tipo_img == "image/png") {
                    $perfil=$_SERVER['DOCUMENT_ROOT'] . '/version_0.2/photo/';
                    move_uploaded_file($_FILES['foto']['tmp_name'], $perfil . $nombre_img);

                    $sql = "INSERT INTO `docente`(`foto`,`nombre`, `apellido`, `genero`, `telefono`) VALUES ('$nombre_img','$nombre','$apellido','$g','$telefono')";

                    if ($conn->query($sql) === TRUE) {
                        $last_id = $conn->insert_id;
                        $sqli = "INSERT INTO `usuario_docente`(`id_docente`, `usuario`, `clave`, `correo`) VALUES ('$last_id','$user','$pass_encriptada','$correo')";

                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                }else{
                    $error = 'El tipo de imagen no es valido';
                }

            }else{
                $error = 'El imagen demaciado pesada...';
            }
        }
    }

    if ($conn->query($sqli) === TRUE) {

        $sql = "SELECT docente.id_docente, docente.nombre, usuario_docente.usuario, usuario_docente.clave FROM docente INNER JOIN usuario_docente ON docente.id_docente=usuario_docente.id_docente WHERE usuario_docente.usuario= '$user' AND usuario_docente.clave='$pass_encriptada'";

        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            print '<script language="JavaScript">'; 
            print 'alert("Cuenta Creada Con Exito...");'; 
            print '</script>';

            $id = $row['id_docente'];
            $nom = $row["nombre"];
            $usis = $row['usuario'];

            session_start();
            $_SESSION['active'] = true;
            $_SESSION['id_docente'] = $id;
            $_SESSION['nombre'] = $nom;
            $_SESSION['usuario'] = $usis;
            header("Location: menu.php");
        }else{
            print '<script language="JavaScript">'; 
            print 'alert("Ha ocurriod un error al registrarse...");'; 
            print '</script>';
        }
         
    }
    $conn->close();

}
?>
