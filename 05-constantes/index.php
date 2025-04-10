<?php

//Constantes es un contenedor de informacion que no puede variar

define('nombre', 'Brayan');
define('apellido', 'Diaz');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.apellido.'</h1>';

//variable
$web= "facebook.com";
$web="youtube.com";

echo '<h1>'.$web.'</h1>';

//Variables predefinidas

echo '<br/>'.PHP_VERSION;
echo '<br/>'.PHP_EXTENSION_DIR;
echo '<br/>'.__LINE__;
echo '<br/>'.__FILE__;
echo '<br/>'.__FUNCTION__;
echo '<br/>'.PHP_OS;
?>