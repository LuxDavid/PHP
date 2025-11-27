<?php

$beers= [
    "Carolus",
    "London Porter",
    "Delirium Red"
];

$beers2= [
    "Carolus 2",
    "London Porter 2",
    "Delirium Red 2"
];

//Contar el numero de elementos en un array
echo count($beers);

//Imprimir el contenido de un array
print_r($beers);

//Agregar elemento a un array
array_push($beers, "Karmeliten");

//Eliminar el ultimo elemento del array
$beer= array_pop($beers);

echo $beer;


if(in_array("Corona", $beers)){
    echo "Existe";
}else{
    echo "No existe";
}

$beerMixed= array_merge($beers, $beers2);
print_r($beerMixed);