<?php 
    include("config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eliminar</title>
</head>
    <body>

      <!--Hard delete: eliminar desde la base de datos-->
      <?php
        $idProducto=$_POST['idProducto']; 
       

        $sql="DELETE FROM productos WHERE idProducto='$idProducto'";
        if($mysqli->query($sql)) 
          {
            echo "PRODUCTO ELIMINADO"; 
          }
          else 
          {
            echo "FALLO AL ELIMINAR"; 
          }
      ?>

      <form action="leer.php" method="POST">
          <button type="submit">VOLVER</button>
      </form>  
    </body>
</html>