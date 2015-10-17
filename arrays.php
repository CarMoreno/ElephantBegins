<?php
#Asi se define un array, el primer elemento tiee indice 0
$lista = array('hola', true, 1.5, 4, "mundo");
print "soy el primer elemento del array: $lista[0] <br>";
print "soy el segundo elemento del array: $lista[1] <br>";
print "soy el tercer elemento del array: $lista[2] <br>";
print "soy el cuarto elemento del array: $lista[3] <br>";
print "soy el quinto elemento del array: $lista[4] <br>";
#==========================Arrays multidimencionales================================
#Un array multidimencional es el que contiene otros arrays entre sus elementos

$multi = array(array("Carlos", "Colombia", 12), array("Luis", "Inglaterra", 2015)); 
print "Soy el primer elemento del primer elemento del array multi: ".$multi[0][0];
print "<br>Soy el segundo elemento del primer elemento del array multi: ".$multi[0][1];
print "<br>Soy el tercer elemento del primer elemento del array multi: ".$multi[0][2];
print "<br>Soy el primer elemento del segundo elemento del array multi: ".$multi[1][0];
print "<br>Soy el segundo elemento del segundo elemento del array multi: ".$multi[1][1];
print "<br>Soy el tercer elemento del segundo elemento del array multi: ".$multi[1][2];

#============================Arrays asociativos=====================================
#A diferencia de los arryas normales, un array asociativo tiene en lugar de un index, una clave que nosotros
#mismos le ponemos. El par será conocido como clave => valor.
$asociativo = array("nombre" => "Carlos",
					"apellido" => "Moreno",
					"edad" => 19,
					"pais" => "Colombia");

print "<br>Mi nombre: ".$asociativo["nombre"];
print "<br>Mi apellido: ".$asociativo['apellido'];
print "<br>Mi pais: ".$asociativo['pais'];
print "<br>Mi edad: ".$asociativo['edad'];
?>