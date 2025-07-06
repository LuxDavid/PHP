<?php
require_once 'coche.php';

$coche= new Coche("Amarillo", "Renault", "Clio", 150, 200, 5);
$coche2= new Coche("Verde", "Seat", "Panda", 150, 200, 5);
$coche3= new Coche("Azul", "Citroen", "Xara", 150, 200, 4);
$coche4= new Coche("Rojo", "Mercedes", "Clase A", 150, 200, 3);

$coche->color="ROSA";
$coche->setMarca("Audi");

// var_dump($coche->getModelo());
// var_dump($coche);

echo $coche->mostrarInformacion($coche2);