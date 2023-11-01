<?php 
    include("config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar</title>
</head>
<body>
    <h1>MODIFICAR PRODUCTO</h1><br>

    <?php

    $idProducto=$_POST['idProducto'];
    echo "(ID DE PRODUCTO: ".$idProducto;

    $sql="SELECT * FROM productos WHERE idProducto='$idProducto'";
    $execonsulta=$mysqli->query($sql);

    if(mysqli_num_rows($execonsulta)>0)
        {
            while($row=mysqli_fetch_array($execonsulta))
            {
                $nombre=$row['nombre'];
                $descripcion=$row['descripcion'];
                $stockMinimo=$row['stockMinimo'];
                $stockMaximo=$row['stockMaximo'];
                $precio=$row['precio'];
            }
        }    
    ?>

    <form action="modificar2.php" method="POST">
        <input type="hidden" name="idProducto" value=" <?php echo $idProducto; ?>">
        <input type="text" name="nombre" placeholder="INGRESE NOMBRE" value=" <?php echo $nombre; ?>">
        <input type="text" name="descripcion" placeholder="INGRESE DESCRIPCIÓN" value=" <?php echo $descripcion; ?>">
        <input type="text" name="stockMinimo" placeholder="INGRESE STOCK MÍNIMO" value=" <?php echo $stockMinimo; ?>">
        <input type="text" name="stockMaximo" placeholder="INGRESE STOCK MÁXIMO" value=" <?php echo $stockMaximo; ?>">
        <input type="text" name="precio" placeholder="INGRESE PRECIO" value=" <?php echo $precio; ?>">
        <button type="submit">MODIFICAR PRODUCTO</button>
    </form>

    <form action="leer.php" method="POST">
        <button type="submit">VOLVER</button>
    </form>  
</body>
</html>
