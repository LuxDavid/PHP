<?php
/*
FUNCIONES:
Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto
y que pueden reutilizarse solamente invocando a la funcion tantas veces como
queramos.

function nombreDeMiFuncion($parametro);
function nombreDeMiFuncion($parametro);
*/

function muestraNombres(){
    echo "Brayan David Diaz";
}

//Invocar funcion
// muestraNombres();

//EJEMPLO 2
function tabla($numero)
{
    echo "<h3>Tabla de multiplicar del número: $numero </h3>";

    for ($i = 1; $i <= 10; $i++) {
        $operacion = $numero * $i;
        echo "$numero x $i = $operacion </br>";
    }
}

for($i = 0; $i <=10; $i++){
    tabla($i);
}

//EJEMPLO 3

function calculadora($numero1, $numero2, $black = false){

    //CONJUNTO DE INSTRUCCIONES A EJECUTAR 
    $suma = $numero1 + $numero2;
    $resta= $numero1 - $numero2;
    $multi= $numero1 * $numero2;
    $division= $numero1 / $numero2;

    $cadenaTexto="";

    if($black){
        $cadenaTexto.="<h1>";
    }

    $cadenaTexto.= "Suma: $suma </br>";
    $cadenaTexto.= "Resta: $resta </br>";
    $cadenaTexto.= "Multiplicacion: $multi <br/>";
    $cadenaTexto.= "División: $division <br/>";
    $cadenaTexto.= "</hr>";

    if($black){
        $cadenaTexto.="</h1>";
    }

    $cadenaTexto.="<hr/>";

    return $cadenaTexto;
}

echo calculadora(10,30, true);

//EJEMPLO 4

function getNombre($nombre){
    $texto= "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto= "Los apellidos son: $apellidos";
    return $texto;
}

function devuelveNombre($nombre, $apellidos){

    $texto= getNombre($nombre)
            ."<br/>".
            getApellidos($apellidos);

            return $texto;
}

echo devuelveNombre("Brayan", "Diaz");
