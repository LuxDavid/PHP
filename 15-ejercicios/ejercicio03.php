<?php

/*
Ejercicio 3 . Programa que compruebe si una variable esta vacio y si está vacia,
rellenarla con texto en minusculas y mostrarlo;
*/

$texto="";

if(empty($texto)){
    $texto= "hola yo soy el relleno de la variable texto";
    $textoMAYUS= strtoupper($texto);

    echo "<strong>$textoMAYUS</strong>";
}else{
    echo "La variable tiene este contenido detrno: ".$texto;
}