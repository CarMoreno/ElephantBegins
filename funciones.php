<?php
function mensaje(){
	
	return "Soy una funcion que retorna un mensaje<br>";
}
#funcion que recibe dos parametros
function sumar($n1, $n2){
	return $n1 + $n2;
}

#funcion con parametr opcional, este parametro opcional es la variable n2
function multiplicar($n1, $n2=1){
	return $n1 * $n2;
}

#funcion que reciba un array como parametro
#NOTA: la clave : valor de un array al que no le definimos una clave personalizada, es igual al indice comun
#y corriente de un array
function nombres(array $nombres){
	$resultado = "";
	foreach ($nombres as $clave => $valor){
		$resultado .= "$clave : $valor<br>";
	}
	return $resultado;
}
#se llama a las funciones
print mensaje();
print "soy la funcion sumar ".sumar(10, 5)."<br>";
print "soy la funcion multiplicar ".multiplicar(10, 5)."<br>";
print "soy la funcion multiplicar, con parametro opcional ".multiplicar(5)."<br>";
print "Soy la funcion nombres, y recibo un array como argumento ".nombres(array("Carlos", "Ana", "Isabella", "Juan", "Andrés"));
?>