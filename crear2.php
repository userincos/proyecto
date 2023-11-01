<?php 
    include("config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear2</title>
</head>
    <body>
      <!--Para redireccionar páginas a leer.php: -->
      <?php
        $idContacto=strtoupper($_POST['nombre']);
        $contacto=$_POST['contacto']; 
        $telefono=$_POST['telefono']; 
        $email=$_POST['email']; 
        
        //<!-- $habilitado=1; -->

        $sql="INSERT INTO contactos VALUES (NULL, '$contacto', '$telefono', '$email')";
        if($mysqli->query($sql)) 
          {
            echo "Contacto GUARDADO"; 
          }
          else 
          {
            echo "FALLO AL GUARDAR"; 
          }
      ?>

      <form action="leer.php" method="POST">
          <button type="submit">VOLVER</button>
      </form> 
      
      <?php 
      #header("Location: leer.php"); #Redirección a leer.php 

      #Redireccionamiento absoluto a otro dominio o página:

      #header("Location: http://www.google.com");
      ?>

      <!--En algunos servidores el comando header está deshabilitado, 
      y no va a ejecutarse la dirección, pero si queremos que si o si
      se redirija: es aplicar JAVASCRIPT en la redirección: -->

      <script type ="text/javascript">window.location.replace('leer.php')</script>

      <!--Redireccionamiento absoluto a otro dominio o página-->
      
      <!--<script type ="text/javascript">window.location.replace('http://www.google.com')</script>-->
    </body>
</html>