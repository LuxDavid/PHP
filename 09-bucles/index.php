<?php
//BUCLE while
/*Estructura de control que itera o repite la ejecucion de una serie de instrucciones
    tantas vces como sea necesario, en base a una condición

    while(condicion){
    bloque de instrucciones
    otra condicion
    }

*/

$numero = 0;
while($numero <= 100){
    echo $numero;

    if($numero != 100){
        echo ", ";
    }
    $numero++;
}

echo "</hr>";

//EJEMPLO WHILE

if(isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplica del numero $numero</h1>";

$contador = 1;

while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador).'<br/>';
    $contador++;
}

echo "<hr/>";

//EJEMPLO DO WHILE
/*
do{
BLOQUE DE INSTRUCCIONES

}while(condicion);
*/

$edad2= 17;
$contador2=1;

do{
    echo "Tienes acceso al local privado $contador2 <br/>";
    $contador++;
}while($edad2 >= 18 && $contador <= 10);