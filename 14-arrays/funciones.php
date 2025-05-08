<?php

$videojuegos= ['GTA V', 'Spyro', 'Marvel rivals', 'Halo'];
$numeros = [1,5,6,9,8,4,1];

//Ordenar elementos 
sort($videojuegos);
var_dump($numeros);

//Añadir elementos array
$videojuegos[]="Dragon ball legends";
array_push($videojuegos, 'Pokemon');

//Eliminar elementos de un array
array_pop($videojuegos);
unset($videojuegos[2]);

//Obtener un elemento aleatorio
$indice = array_rand($videojuegos);
echo $videojuegos;

//Dar la vuelta
var_dump(array_reverse($numeros));

//Buscar dentro de un array
$resultado=array_search('Pokemon', $videojuegos);
var_dump($resultado);

echo count($videojuegos);
