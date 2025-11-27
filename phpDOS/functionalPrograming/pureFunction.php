<?php

class Counter{
    public int $count=0;
}

$counter= new Counter();

function show(Counter $counter): string {
    $counter->count++;
    return $counter->count."<br/>";
}

// echo show($counter);
// echo show($counter);
// echo show($counter);
// echo show($counter);

/*
Funcion pura es aquella que no modifica parametros o variables externas
a lo que se trabaja dentro de la misma funcion
*/
function add(float $a, float $b): float{
    return $a+ $b;
}

echo add(1,3);