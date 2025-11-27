<?php

//Funciones anonimas o functiones de primera clase

$some = function(float $a, float $b){
    return $a+$b;
};

echo $some(2,3);