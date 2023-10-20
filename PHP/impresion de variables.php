<html>
<head>
<title>variable e impresiones de ellas</title>
</head>
<body>
<?php
$a = "hola";
$$a = "mundo";
echo"esto separa \n multiples lineas. los saltos de linea tambien \n se mostraran 
: <p>";
echo "$a \n";
echo "$$a \n";
print ("<h1>hola mundo </h1>");
print ("bienvenido al curso de php");
echo '<h1> tambien imprime de esta forma concantenando </h1>';
$nombre='pepe';
$apellido='garcia';
echo $nombre.$apellido;
echo '<h1> salto de linea </h1>';
echo ("<p> primer parrafo</p>");
print ("<p> segundo parrafo</p>");
//despliegue de imagenes
print ("img src= 'tabla.png'>");
?>
</body>
</html>