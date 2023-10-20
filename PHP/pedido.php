<?php
    $server = "localhost";
    $usuario = "id20801803_root";
    $contrasena = "Terepina12-";
    $db = "id20801803_registros";
    $conexion = mysqli_connect ($server, $usuario, $contrasena, $db);
    if (!$conexion){
        die("error".mysqli_connect_error());
    }
    echo "*******Conexion exitosa";

    $nombre= $_POST["txtnombre"];
    $email= $_POST["txtcorreo"];
    $descripcion= $_POST["txtdece"];
    $articulo= $_POST["txtart"];

    $sql= "INSERT INTO pedido (ID,Nombre,Email,Descripcion,articulo) VALUES ('0','$nombre','$email','$descripcion','$articulo')";
    if(mysqli_query($conexion,$sql)){
        echo "********Datos guardados";
        
    }else{
        echo "error".$sql."<br>". mysqli_error($conexion);
    }
    mysqli_close($conexion);
    ?>
    <html>
        <head>
            <title>Registro del pedido realizado</title>
            <link rel="stylesheet" href="..\Estilo de la TB.css" type="text/css"/>
        </head>
        <body>
            <h2>Registro del pedido realizado</h2>
             <form action="boton.php">
        <p></p> <input type="submit" value="Abrir registro" name="btnRegistrar">
        </form>
        </body>
    </html>