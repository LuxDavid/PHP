<?php

/*
Funcion de orden superior es una funcion que puede recibir
funciones como parametros o retornar una funcion como resultado
*/

$some= function(float $a, float $b) : float{
    return $a + $b;
};

function mul(float $a, float $b){
    return $a * $b;
}

//callable es la validacion de datos para funciones
function show(callable $fn, float $a, float $b){
    echo $fn($a, + $b);
}

show($some, 3, 5);

//Para ejecturar funciones que no son anomias se debe pasar el
//nombre de la funcion como string
show("mul",3,5);