<?php
function entero($entero){
	if (!intval($entero)) {#Si la variable entero, no es un numero entero
		throw new Exception("No se trata de un numero entero");	
	}
	return $entero;
}

try {
	print entero("Hola");
}catch (Exception $e){
	print "Excepcion capturada ".$e->getMessage();
}
?>