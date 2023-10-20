
<html>
<head>
	<meta charset="utf-8">
	<title> Insertar mensajes a la Base de datos</title>
	<link rel="icon" href="fav.png" width="35" height="35" type="image/png" />
	<link rel="stylesheet" href="style1.css" type="text/css" >
</head>
<body>
	<h3> Mensaje a la base de datos</h3>

	<form class="forms" action="Registro.php" method="POST">
		<input class="regis" type="text" name="txtnombre" id="nombre" placeholder="Ingrese su nombre">
		<input class="regis" type="text" name="txtcorreo" id="nombres" placeholder="Ingrese su correo">
		<input class="regis" type="textarea" name="txtmen" id="nombress" placeholder="Ingrese su mensaje">

		<input class="boton" type="submit" value="Insertar datos" name="btnRegistrar">
	</form>

<form class="frs" action=Registros.php method="POST">
	<input class="boton" type="submit" value="Mostrar Registros Insertados" name="btnRegistros">
	
</form>
</body>
</html>
