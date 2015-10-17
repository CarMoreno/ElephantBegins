<?php
#=================El bucle for===============
$nombres = array("Carlos", "Juan", "Pedro", "Javier", "Ana");
print "El tamanno del arreglo es :".count($nombres)."<br>"; #<---------OJO Me retorna 5

// for ($i=0; $i < count($nombres) ; $i++) { #count me dice cuantos elementos tiene un array
// 	print "Soy el elemento $i del arreglo: $nombres[$i]<br>";
// }

// #===========El bucle while====================
// $i = 0; #Contador
// while ($i < count($nombres)){
	
// 	print "Usando while: soy el elemento $i del arreglo: $nombres[$i]<br>";
// 	#vamos a detener un bucle en un instante determinado
// 	if ($nombres[$i] == "Javier") {
// 		print "Adios !!<br>";
// 		break;
// 	}
// 	$i++;
// }

// #===============El bucle foreach===============
// $asociativo = array("nombre" => "Carlos",
// 					"apellido" => "Moreno",
// 					"edad" => 19,
// 					"pais" => "Colombia");

// #primero ponemos el nombre del array que queremos iterar
// foreach ($asociativo as $key => $value) {
// 	print "Bucle foreach = $key : $value<br>";
// }
for ($i=0; $i < count($nombres); $i++) { 
	$nombres[$i] = "James";
}

// foreach ($nombres as $itemNombre) {#asi es bucle foreach queda igual al bucle for in de Python
// 	array_push($nombres, "James");
// }
foreach ($nombres as $key) {
	echo $key;
}
?>