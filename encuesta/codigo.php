<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css"/>
    <title>GRACIAS</title>
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
    <p style="font-family: arial; text-align: center; margin: 2% auto 0; width: 40%; border: 2px solid red;">
         <b>GRACIAS POR APOYAR A AMCRED.ES</b></p>
         <img src="../logo.png" width="20%" style="margin: 0 auto; display: block;"/>

    <?php
            
            if (isset ($_POST["codigo"])){$codigo = $_POST["codigo"];}
            

            $archivo = fopen ("../../formularios/encuestas.txt", "a");
            fputs($archivo, "Codigo: ".substr($codigo, 0, 8)."\n"."\n"."\n");
            fclose ($archivo);
        ?>
</body>
</html>

