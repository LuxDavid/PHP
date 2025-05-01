<?php

/*
Ejericicio 3. Escribir un programa que imprima por pantalla los cuadrados
(un numero multiplicado por si mismo) de los 40 primeros numeros naturales.
PD: Utilizar bucle while.
*/

$numero= 1;

while($numero < 40) {

    echo "$numero al cuadro es: ".($numero*$numero).'<br/>';
    $numero++;
}

/*
for($contador = 0; $contador <= 40; $contador++){
    $cuadrado= $contador*contador;
    echo "<h3>El cuadrado de $contador es $cuadrado";
}
*/