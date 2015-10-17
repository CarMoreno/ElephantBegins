<?php
/*
Una cookie (o galleta informática) es una pequeña información enviada por un sitio web y ALMACENADA EN EL NAVEGADOR
DEL USUARIO, de manera que el sitio web puede consultar la actividad previa del usuario
*/
$resultado = null; #almacenaremos el valor de la cokkie que vamos a crear
if (!empty($_COOKIE["galleta"])) {# si la cokkie existe (si no esta vacia)
	$resultado = $_COOKIE["galleta"];#resultado es igual a la cookie
}
#Luego vamos a capturar el paramtero crear
if (isset($_GET["crear"]) && $_GET["crear"] == true) {#si existe la variable crear y ademas, esta es igual a true
	setcookie("galleta", "He creado una cookie", time()+(60*60*24)); #creamos una cookie y le pasamos: El nombre de la cookie, un mnesaje y el tiempo de vida de la cookie, que para este caso será de 24 horas, si queremos que la cookie expire apenas el usuario cierre el navegador le pasamos un valor de cero	
	header("location: variablesCookies.php");#redireccionamos a nuestra misma pagina para actualizar las cookies
}
#Luego vamos a capturar el paramtero eliminar, para eliminar la cookie
if (isset($_GET["eliminar"]) && $_GET["eliminar"] == true) {#si existe la variable crear y ademas, esta es igual a true
	setcookie("galleta",null, -1); #eliminamos una cookie y le pasamos: El nombre de la cookie, un mnesaje y el tiempo de vida de la cookie, que para este caso será negativo	
	header("location: variablesCookies.php");#redireccionamos a nuestra misma pagina para actualizar las cookies
}
?>
<!DOCTYPE>
<html>
<head></head>
<body>
	<a href="?crear=true">Crear Cookie</a>
	<a href="?eliminar=false">Eliminar Cookie</a>
	<strong><?php print("Cookie: $resultado");?></strong>
</body>
</html>