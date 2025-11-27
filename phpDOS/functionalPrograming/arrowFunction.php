<?php

$const = 5;

$some= function(float $a, float $b) : float{
    return $a + $b;
};

$sum = fn(float $a, float $b) => $a +$b;

//callable es la validacion de datos para funciones
function show(callable $fn, float $a, float $b){
    echo $fn($a, + $b);
}

// show($sum, 3, 5);
// show(fn($a, $b) =>$a - $b, 3, 5);

//Utilizar parametros externos

$sum2= function(float $a, float $b) use($const) : float{
    return $a + $b + $const;
};

show($sum2, 4, 5);