<?php 
    include("config.php");
?>

<!-- sfgdgdg -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear contacto</title>
</head>
    <body>
        <h1>AGREGAR contacto</h1><br>
        <form action="crear2.php" method="POST">               
            <!--//<input type="text" name="idContacto" placeholder=" ">-->
            <input type="text" name="contacto" placeholder="ingres nombre">
            <input type="text" name="telefono" placeholder="INGRESE telefono">
            <input type="text" name="email" placeholder="INGRESE email">
         
            <button type="submit">AGREGAR contacto</button>                          
        </form>

        <form action="leer.php" method="POST">
            <button type="submit">Volver a la lista de contactos</button>
        </form>        
    </body>
</html>
