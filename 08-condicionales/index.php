<?php

/* 
1. CONDICIONAL if

if(condicion){

instrucciones

}else{

otras condiciones

}

2. OPERADORES DE COMPARACION
== igual
=== identico
!= diferente
<>diferente
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que
*/

//EJEMPLO 1
$color = "verde";

if ($color == "rojo") {
    echo "El color es rojo";
} else {
    echo "El color no es rojo";
}

echo "<br/>";

//EJEMPLO 2
$year = 2026;

if ($year != 2025) {
    echo "Es un año diferente a 2025";
} else {
    echo "Estamos en 2025";
}

//EJEMPLO 3
$nombre = "David Diaz";
$ciudad = 'Barcelona';
$continente = "Asia";
$edad = 49;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {
    echo "<h1>$nombre es mayor de edad</h1>";

    if ($continente == "Europa") {
        echo "<h2>Y es de $ciudad</h2>";
    } else {
        echo "No es Europeo";
    }
} else {
    echo "<h2>$nombre No es mayor de edad</h2>";
}

echo "<hr/>";

//EJEMPLO 3
$dia = 3;

if ($dia == 1) {
    echo "Es Lunes";
} else {
    if ($dia == 2) {
        echo "Es Martes";
    } else {
        if ($dia == 3) {
            echo "Es Miercoles";
        }
    }
}

echo "<hr/>";

if ($dia == 1) {
    echo "LUNES";
} elseif ($dia == 2) {
    echo "MARTES";
} elseif ($dia == 3) {
    echo "MIERCOLES";
}

echo "<hr/>";

//EJEMPLO 4 switch
$day = 4;

switch ($day) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Es fin de semana";
}

echo "<hr/>";

//EJEMPLO 5 GOTO
goto marca;
echo "<h3>Instrucccion 1</h3>";
echo "<h3>Instrucccion 2</h3>";
echo "<h3>Instrucccion 3</h3>";
echo "<h3>Instrucccion 4</h3>";

marca:
echo "<h1>Me he saltado 4 echos</h1>";