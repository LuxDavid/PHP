<?php

/* BUCLE FOR
for(varuacle contador, condicion, actualizando contador){

BLOQUE DE INSTRUCCIONES

}
*/

//EJEMPLO 1
$resultado= 0;

for($i = 0; $i <=100; $i++){
    $resultado += $i;
    echo "<p>$resultado</p>";
}

echo "<h1>El resultado es: $resultado</h1>";

echo "<hr/>";

//EJEMPLO 2

if(isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplica del numero $numero</h1>";

$contador = 1;

for($contador=1; $contador<= 10; $contador++){

    if($contador == 5){
        break;
    }

    echo "$numero x $contador = ".($numero*$contador).'<br/>';
}