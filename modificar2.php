<?php 
    include("config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar2</title>
</head>
<body>
    <!--Para redireccionar páginas a leer.php: -->
    <?php
        $idProducto=$_POST['idProducto'];
        $nombre=strtoupper($_POST['nombre']);
        $descripcion=$_POST['descripcion']; 
        $stockMinimo=$_POST['stockMinimo']; 
        $stockMaximo=$_POST['stockMaximo']; 
        $precio=$_POST['precio']; 

        $sql="UPDATE productos SET nombre='$nombre', descripcion='$descripcion', stockMinimo='$stockMinimo', stockMaximo='$stockMaximo', precio='$precio' WHERE idProducto='$idProducto'";
        if($mysqli->query($sql)) 
        {
            echo "PRODUCTO ACTUALIZADO"; 
        }
        else 
        {
            echo "FALLO AL ACTUALIZAR";
        }
    ?>

    <form action="leer.php" method="POST">
        <button type="submit">VOLVER</button>
    </form> 
    <?php header("Location: leer.php"); #Redirección a leer.php ?>
    
    <!--En algunos servidores el comando header está deshabilitado, 
    y no va a ejecutarse la dirección, pero si queremos que si o si
    se redirija: es aplicar JAVASCRIPT en la redirección-->
</body>
</html>
