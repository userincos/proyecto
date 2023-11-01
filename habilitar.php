<?php 
    include("config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>habilitar</title>
</head>
<body>
    <!--Para redireccionar páginas a leer.php: -->
    <?php
        $idProducto=$_POST['idProducto'];
       
        $sql="UPDATE productos SET habilitado='1' WHERE idProducto='$idProducto'";
        if($mysqli->query($sql)) 
        {
            echo "PRODUCTO HABILITADO"; 
        }
        else 
        {
            echo "FALLO AL HABILITAR";
        }
    ?>

    <form action="leer.php" method="POST">
        <button type="submit">VOLVER</button>
    </form> 
    <?php header("Location: listadeshabilitados.php"); #Redirección a leer.php ?>
    
    <!--En algunos servidores el comando header está deshabilitado, 
    y no va a ejecutarse la dirección, pero si queremos que si o si
    se redirija: es aplicar JAVASCRIPT en la redirección-->
</body>
</html>
