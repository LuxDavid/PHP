<?php

/*
TIPOS DE DATOS:
Entero (int / integer) = 99
coma flotante / decimales (float / double) = 3.45
Cadenas (string) = "Hola yo soy un string"
Boleano (bool) = true false
null
Array (Coleccion de datos [])
Objetos {}
*/

$numero = 100;
$decimal = 27.9;
//Con comillas dobles "" puedo llamar variables sin la necesidad de concatenar .
$texto = "Soy un texto $numero";
$falso = false;
$nulo = null;
$arrayy= [];

echo $texto;

//Obtener el tipo de dato de una variable
echo '<br/>'.gettype($numero);
echo '<br/>'.gettype($decimal);
echo '<br/>'.gettype($falso);
echo '<br/>'.gettype($nulo);
echo '<br/>'.gettype($arrayy);

//Debuguear una variable
$mi_nombre= "Brayan David";
$nombre[] = "BRAYAN DAVID LUX";

'<br/>'.var_dump($mi_nombre);
'<br/>'.var_dump($nombre);
