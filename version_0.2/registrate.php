<?php
$alert='';
if (isset($_POST['boton'])) {
    if (empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['telefono']) || empty($_POST['correo']) || $_POST['genero']== 0) {
        # code...
        $alert ='<div class="alert"><h3 >Por favor ingrese los datos requeridos...</h3></div>';
    }else{
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $genero = $_POST['genero'];
        include('validaciones.php');
    }

}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8">
        <title>Crear cuenta</title>
        <link href="css/style_registrate.css" rel="stylesheet" type="text/css">
        <script>
        </script>
    </head>
    <body>
        <header>
            <div class="titulo">
                <img class="log" src="img/logStar.png"  >
                <h1 class="P">Registrate</h1>
            </div>
        </header>
        <?php echo isset($alert)? $alert : ''; ?>
        <br>
        <center>
            <form action="#" enctype="multipart/form-data" method="post">
                <br>
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
                <br>
                <div class="user">
                    <p>Usuario:</p>
                    <input class="txt" type="text" name="usuario" placeholder="Usuario" required  autocomplete="off">
                </div>
                <div class="clave">
                    <p>Contraseña:</p>
                    <input class="txt" type="password" name="clave" placeholder="Contraseña" required  autocomplete="off">
                </div>
                <div class="nombre">
                    <p>Nombre:</p>
                    <input class="txt" type="text" name="nombre" placeholder="Nombre" required  autocomplete="off">
                </div>
                <div class="apellido">
                    <p>Apellido:</p>
                    <input class="txt" type="text" name="apellido" placeholder="Apellido" required  autocomplete="off"> 
                </div>
                <div class="genero">
                    <p>Genero:</p>
                    <select name="genero">
                        <option value="0">Tipo</option>
                        <option value="1">Femenino</option>
                        <option value="2">Masculino</option>
                    </select>
                </div>
                <div class="telefono">
                    <p>Telefono:</p>
                    <input class="txt" type="tel" name="telefono" placeholder="0000-0000" required  autocomplete="off">
                </div>
                <div class="correo">
                    <p>Correo:</p>
                    <input  class="txt" type="email" name="correo"  placeholder="Ejemplo@gmail.com" required  autocomplete="off">
                </div>
                <input class="btn" type="submit" name="boton" value="Crear cuenta">
            </form>
        </center>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="funcion.js" type="text/javascript"></script>
    </body>
</html>