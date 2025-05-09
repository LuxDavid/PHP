<?php
/*
Ejercicio 4. Crear un script en php que tenga 4 variables, una de tipo array,
*otra de tipo string, otra int y otra booleana y que imprima un mensaje
segun el tipo de variable que sea.
*/

$matriz= ["hola",1];
$numero=10;
$texto= 'Hola';
$boolena= true;

if(is_array($matriz)){
    echo "<h2>Esta variable es un array</h2>";
}

if(is_int($numero)){
    echo "<h2>Esta variable es un Int </h2>";
}

if(is_string($texto)){
    echo "<h2>Esta variable es un string</h2>";
}

if(is_bool($boolena)){
    echo "<h2>Esta variable es un array</h2>";
}