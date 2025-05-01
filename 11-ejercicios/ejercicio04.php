<?php

/*
Ejercicio 4. Recoger dos numeros por la url (Parametros GET) y hacer todas las
operaciones basicas de una calculadores (suama, resta, multiplicacion y division)
de esos dos numeros.
*/

if(isset($_GET['numero1']) && isset($_GET['numero2'])){

    $numero1= $_GET['numero1'];
    $numero2= $_GET['numero2'];

    echo '<h1>CALCULADORA</h1>';
    echo 'Suma: '.($numero1+$numero2).'<br/>';
    echo 'Resta: '.($numero1-$numero2).'<br/>';
    echo 'Multiplicacion: '.($numero1*$numero2).'<br/>';
    echo 'Division: '.($numero1/$numero2).'<br/>';
}else{
    echo '<h1>Introduce correctamente los valores por la URL</h1>';
}