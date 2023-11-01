<?php 
    include("config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leer</title>
</head>
<body>
    <?php
    $sql="SELECT * FROM productos WHERE habilitado = 1"; #Consultado en MySQL-Front
    $execonsulta=$mysqli->query($sql);
    ?>   
    <h1>LISTA DE PRODUCTOS</h1>

        <form action="crear.php" method="POST">
            <button type="submit">AGREGAR</button>
        </form>  

        <table border="2">
            <thead>
                <tr>
                    <th>ÍNDICE</th>
                    <th>NOMBRE</th>   
                    <th>DESCRIPCIÓN</th>
                    <th>STOCK MÍNIMO</th>
                    <th>STOCK MÁXIMO</th>
                    <th>PRECIO</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
                    <th>DESHABILITAR</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                if(mysqli_num_rows($execonsulta)>0)
                {
                    $indice=1;
                    while($row=mysqli_fetch_array($execonsulta))
                    {
                        ?>
                        <tr>
                            <td><?php echo $indice; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['descripcion']; ?></td>
                            <td><?php echo $row['stockMinimo']; ?></td>
                            <td><?php echo $row['stockMaximo']; ?></td>
                            <td><?php echo $row['precio']; ?></td>

                            <td>
                                <form action="modificar.php" method="POST">
                                    <input type="hidden" name="idProducto" value="<?php echo $row['idProducto']; ?>">
                                    <button type="submit">MODIFICAR</button>
                                </form>
                            </td>
                            <td> <!--Para eliminar:-->
                                <form action="eliminar.php" method="POST">
                                    <input type="hidden" name="idProducto" value="<?php echo $row['idProducto']; ?>">
                                    <button type="submit">ELIMINAR</button>
                                </form>
                            </td>
                            <td> <!--Para deshabilitar:-->
                                <form action="deshabilitar.php" method="POST">
                                    <input type="hidden" name="idProducto" value="<?php echo $row['idProducto']; ?>">
                                    <button type="submit">DESHABILITAR</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        $indice++; 
                    }
                }
                ?> 
            </tbody>
        </table>
        <hr> <!--para hacer un separador lineal-->
        <form action="listadeshabilitados.php" method="POST">
            <button type="submit">VER LISTA DE DESHABILITADOS</button>
        </form>  
    </body>
</html>