<?php

function hi($name){
    echo "Hola $name";
}

//Al agregar :tipoDeDato despues de los parantesis de la funcion puedo indicar el tipo de dato que debe devolver
//la funcion
function add(int $a, int $b):int{
    return $a + $b;
}

echo hi("Brayan");

echo add(2,2);