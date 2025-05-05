<?php

/*
Variables locales: Son las que se definen dentro de una funcion y no pueden ser
* usadas fueras de la función, solo estan disponibles dentro. A no se que hagamos 
* un return

Variables globales: Son las que se declaran fuera de una función y estan disponibles
* dentro y fuera de las funciones
*/

//Variables globales
$frase="Muy lento Macuin";

echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";

    $year= 2019;
    echo "<h1>$year</h1>";

    return $year;
}

echo holaMundo();

//Funciones variables

function buenosDias(){
    return "<h1>Hola ! Buenos dias :)</h1>";
}

function buenasTardes(){
    return "Hola ! Buenos tardes :)";
}

function buenasNoches(){
    return "Hola ! Buenos noches :)";
}

$horario = "Noches";

$miFuncion = "buenas".$horario;

echo $miFuncion();
