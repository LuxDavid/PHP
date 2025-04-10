<?php

//Operadores aritmeticos
$numero1= 65;
$numero2= 33;

echo 'SUMA:'.($numero1+$numero2).'<br/>';
echo 'RESTA:'.($numero1-$numero2).'<br/>';
echo 'MULTIPLICACION:'.($numero1*$numero2).'<br/>';
echo 'DIVISION:'.($numero1/$numero2).'<br/>';
echo 'RESTO:'.($numero1%$numero2).'<br/>';


//Operadores de incremto y decremento
$year= 2019;

//Incremento $year = $year + 1
$year++;

//Decremento $year = $year - 1
$year++;

//Pre-incrmento $year = 1 + $year
++$year;

//Pre-decremento $year = 1 - $year
--$year;

echo $year.'<br/>';

//Operadores de asignacion
$edad = 55;

echo $edad.'<br/>';

echo ($edad+=5).'<br/>';
echo ($edad-=5).'<br/>';
echo ($edad*=5).'<br/>';
echo ($edad/=5);

?>