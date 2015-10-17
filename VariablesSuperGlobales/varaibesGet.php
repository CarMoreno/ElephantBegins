<!doctype>
<html>
<head>
	<title>Variables Globales-GET</title>
</head>
<body>
	<form action="varaibesGet.php" method="GET">
		<table>
			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td>Apellidos:</td>
				<td><input type="text" name="apellidos"></td>
			</tr>
		</table>
		<input type="submit" value="enviar">
	</form>
	<!-- tener en cuenta los names de los objetos html -->
	<a href="varaibesGet.php?nombre=Carlos&apellidos=Moreno Velez">Obtener Nombre</a>	
</body>
</html>

<?php
/*Get nos va a permitir capturar parametros vía URL, estos parametros los vamos a poder capturar
ya sea por fromularios o por links
*/
#================Capturando parametros en Formularios===========================
$nombre = null;
$apellidos = null;
if (isset($_GET["nombre"]) && isset($_GET["apellidos"])){#la clave será el name del objeto html de la caja de texto...Si la variable
	#$_GET["nombre"] está definida (si se inscribio algo en la caja de texto), entonces:
	$nombre = $_GET["nombre"];
	$apellidos =  $_GET["apellidos"];
	print("Tu nombre completo es $nombre $apellidos<br>");
}
else{
	print("Todos los campos son requeridos, intente nuevamente");
}

#==============Capturando parametros con links=====================================

// if (isset($_GET["apellidos"])) {
// 	$apellidos = $_GET["apellidos"];
// 	print("Su apellido es $apellidos");
// }
?>