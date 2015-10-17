<?php
/*
Los principales tipos de datos que tiene PHP son:
1) Enteros
2) String
3) Reales (Double o Float)
4) Arrays
5) Boolean
*/
#echo "string<br>";
print "<strong><h3>Tipos de variables</h3></strong>";
$variable = "Hola mundo"; #Tipo String
$entero = -30;
$real = 3.14;
$boolean = true;
print "Soy una variable Stirng: ".$variable;
print "<br>Soy una variable entera: ".$entero;
print "<br>Soy una variable real: ".$real;
print "<br>Soy una variable boolean(true): ".$boolean;
#print "<br>".$entero;
$variable =  "estoy cambiando de valor";
print "<br>La variable String ha cambiado de valor: ".$variable; #Una variable puede ir cambiando de valor
#===============Diferencia entre print y echo=========================================

$otraVariable = "Soy otra variable";
print "<br>"."$otraVariable";#Aca me retorará el contendio de la variable, es decir "Soy otra variable"
print "<br>".'$otraVariable';#aca me retornará el nombre de la variable, es decir $otraVariable

define("gravedad", 9.80);#Definimos una variable llamada gravedad y le asignaremos el valor de 9.80
print "<br>Imprimiendo una constante: ".gravedad #no se usa el simbolo de dolar
?>