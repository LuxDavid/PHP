<?php
/*
Ejercicio 2. Escribir un programa con PHP que añada valores a un array mientras que su
longitud sea menor a 120 y luego mostrarlo por pantalla
*/

$numeros=[];

for($i=1; count($numeros) < 120; $i++){

    array_push($numeros, $i);
}

var_dump($numeros);
echo count($numeros);