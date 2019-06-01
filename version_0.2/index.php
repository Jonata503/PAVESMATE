<?php
$alert='';
if (!empty($_POST)) {
    if (empty($_POST['user']) && empty($_POST['pass'])) {
        # code...
        $alert ='<div class="error"><h3>Por favor ingrese los datos requeridos...</h3></div>';
    }else{
        $usuario = $_POST['user'];
        $contrasena = $_POST['pass'];
        
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8">
        <title>Iniciar sesion</title>
        <link href="css/style_index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <?php echo isset($alert)? $alert : ''; ?>
        </header>
        <br>
        <center>
            <form action="" method="POST">
                <div>
                    <div class="encabesado">
                        <img class="imag" src="img/logStar.png">
                    </div>
                    <br>
                    <div class="cuerpo">
                        <input class="txt" type="text" name="user" autocomplete="off" pattern="[A-Za-z0-9_-]{1,15}" placeholder="&#128272; Ingrese su usuario" >
                        <br>
                        <input class="txt" type="password" name="pass" pattern="[A-Za-z0-9_-]{1,15}" placeholder="&#128273; Ingrese su contraseña" >
                    </div>
                    <div class="pie">
                        <a class="link" href="#">?Olvido su Contraseña</a>
                        <input i type="submit" name="submit" class="btn" value="Ingresar">
                    </div>
                </div>
            </form>
        </center>
    </body>
</html>