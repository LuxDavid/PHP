<?php
/*
Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 numeros enteros
y que haga lo siguiente
-Recorrerlo y mostrarlo
-Ordenarlo y mostrarlo
-Mostrar su longitud
-Buscar algun elemento
*/

$numeros=[1,5,8,9,4,7,6,3];

echo "<h2>Numeros sin ordenar</h2>";
foreach($numeros as $numero){

    echo "<p>$numero</p>";
}

echo "<h2>Numeros ordenados </h2>";

sort($numeros);

foreach( $numeros as $numero){

    echo "<p>$numero</p>";
}

echo "La longitud de numeros es ". count($numeros);

$resultado=array_search(3, $numeros);

if(!empty($resultado)){
    echo "<h4>El numero buscado existe en el array, en el indice: $resultado</h4>";
}else{
    echo "No existe el numero buscado";
}