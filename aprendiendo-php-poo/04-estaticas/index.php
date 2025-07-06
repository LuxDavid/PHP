<?php
require_once 'configuracion.php';

Configuracion::setColor("Blue");
Configuracion::setEntorno("localhost");
Configuracion::setLetter(true);

echo Configuracion::$color.'<br/>';
echo Configuracion::$entorno.'<br/>';
echo Configuracion::$letter.'<br/>';

$configuracion= new Configuracion();
$configuracion::$color='rojo';
echo $configuracion::$color;
var_dump($configuracion);