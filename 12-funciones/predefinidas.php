<?php

//Debuguear
$nombre= "Brayn Diaz";
var_dump($nombre);

//Fechas
echo date('d-m-y');
echo "<br/>";
echo time();

//Matematicas
echo "<br/>";
echo "Raiz cuadrada de 10: ".sqrt(10);

//Numero aleatorio
echo "<br/>";
echo "Número aleatorio entre 10  y 40 ".rand(10,40);

echo "<br/>";
echo "Redondear: ".round(7.891234, 1);

//Funcion para obtener tipo de dato
echo "<br/>";
echo gettype($nombre);

//Funcion para verificar que una variable sea un string
echo "<br/>";
if(is_string($nombre)){
    echo "Esa variable es un string";
}

//Funcion para verificar que una variable sea un float
echo "<br/>";
if(is_float(!$nombre)){
    echo "Esa variable nombre no es un numero con decimales";
}

//Funcion para verificar que un dato existe
if(isset($nombre)){
    echo "La variable existe";
}else{
    echo "La variable no sexiste";
}

echo "<br/>";

//Limpiar espacios
$frase= "    mi contenido    ";
var_dump(trim($frase));

//Eliminar variables vacias
echo "<br/>";
$year=2020;
unset($year);

//Comprobar variable vacia
$texto = false;

if(empty($texto)){
    echo "La variable texto esta vacia";
}else{
    echo "La variable texto TIENE CONTENIDO";
}

echo "<br/>";
//Contar caracteres de una cadena
$cadena="12345";
echo strlen($cadena);

echo "<br/>";

//Encontrar caracter
$frase= "La vida es bella";
echo strpos($frase,"i32313");
echo "<br/>";

//Remplazar palabras de un string
$frase= str_replace("vida", "moto", $frase);
echo $frase;

//CONVERTIR TEXTO A minusculas
echo "<br/>";
echo strtolower($frase);

//CONVERTIR TEXTO A MINUSCULAS
echo "<br/>";
echo strtoupper($frase);


