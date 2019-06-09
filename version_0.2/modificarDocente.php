<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8">
        <title>Crear cuenta</title>
        <link href="css/style_modificar.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <script src="js/valProfesor.js"></script>
    </head>
    <body>
        <header>
            <a class="txtAtras" href="http://localhost/version_0.2/perfilDocente.php"><span><i class="fas fa-arrow-alt-circle-left"></i></span></a>
            <p class="txtTitulo">Modificar Cuenta Docente</p>
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
                                 <input class="btn" name="agregar" type="submit" value="Modificar Cuneta">
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