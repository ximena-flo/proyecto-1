<!DOCTYPE html>
<!--MI PAGINA HTML-->
<!--CEPH 27/3/23-->

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="../Estilo de la TB.css" type="text/css" />
<head>
    <link rel="stylesheet" type="text/css" href="general.css" />
    <link rel="stylesheet" type="text/css" href="formulario.css" />
    <title>Registro</title>
</head>
<body>
    <script type="text/JavaScript">
        // Método prompt
        // 03/04/2023

        var nombre; //Variable
        nombre = prompt("¿Hola, Deceas realizar un pedido?*(SI) para ingresar y (NO) para salir del formulario", "");//Pregunta y Variable


        if (nombre == "SI") { //Condesion Si

            alert("Bienvenido Al Formulario");  //Funcion de java
        } else { //Entonces

            alert("No deceas entrar y adios"); // //Funcion de java
        }
    </script>

    <div id="cabecera">
        <h1>Registro de Pedido</h1>
        
<html>
<head>
    <meta charset="utf-8">
    <title> Insertar mensajes a la Base de datos</title>
    <link rel="icon" href="fav.png" width="35" height="35" type="image/png" />
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>
            <div class="seccion">
            <h4>Datos Personales</h4>
    <form action="pedido.php" method="POST">

         <p>Nombre Completo:</p> <input type="text" name="txtnombre" id="nombres" placeholder="Ingrese su nombre">
       <p>Correo electronico:</p> <input type="text" name="txtcorreo" id="nombres" placeholder="Ingrese su correo">
        <p>Descripcion:</p> <input type="text" name="txtdece" id="nombres" placeholder="Ingrese la descripcion">
        <p>Piezas de Artículos:</p> <input type="text" name="txtart" id="nombres" placeholder="Ingrese el numero de artículos">
       
         <p></p> <input type="submit" value="Enviar Datos" name="btnRegistrar">
        
    </form>
   
</body>
</html>