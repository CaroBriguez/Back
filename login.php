<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $usuario = "admin";
        $contrasena = 1234;

        if ($usuario == "admin" & $contrasena == 1234) {
            echo "Iniciando Sesion";
        }
        else {
            echo "Su usuario o Contraseña es incorrecto";
        }
    ?>
</body>
</html>