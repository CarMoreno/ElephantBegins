<?php
$numero1  = 3;
$numero2  = 3; 

#=====================Sentencia if-elseif-else=====================
if ($numero1 != $numero2) {
	print "$numero1 es distinto de $numero2<br>";
}elseif ($numero1 == $numero2) {
	print "$numero1 es igual a $numero2";	
}
else{
	print "Ninguna de las condiciones es cierta";
}
##=====================Forma resumida de la sentencia if else#=====================
$numero1 = 1;
$numero2 = 2;

$numero1 != $numero2 ? $resultado = "$numero1 es distinto a $numero2" : $resultado = "$numero1 es igual a $numero2";
print "<br>$resultado";
#=====================Sentencia Switch=======================
#Usar comillas simples en la sentencia switch
$nombre = 'Manuel';
switch ($nombre) {
	case 'Raul':
		print "Tu nombre es Raul";
		break;#<<<<<<<<Acordarse de poner el break

	case 'Pepe':
		print "<br>Tu nombre es Pepe";
		break;

	case 'Carlos':
		print "<br>Tu nombre es Carlos";
		break;

	default:
		print "<br>Tu nombre no fue encontrado";
		break;
}
?>