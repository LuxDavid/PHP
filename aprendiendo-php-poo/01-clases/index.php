<?php
//Programación orientada a objetos en PHP (POO) 

// Definir una clase (molde para crear mas objetos de tipo coche con caractaristicas parecidas)
class Coche{

    //Atritubos o propiedades 
    public $color= "Coor";
    public $marca= "Ferrari";
    public $modelo= "Aventador";
    public $velocidad=300;
    public $caballaje=500;
    public $plazas=2;

    //Metodos, son acciones que hace el objeto (antes funciones)
    public function getColor(){
        //Busca en esta clase la propiedad X
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setModelo($modelo){
        $this->modelo=$modelo;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
       return $this->velocidad;
    }
}

//Fin definicion de la clase

//Crear un objeto / instanciar la clase

$coche= new Coche();

//Usar los metodos
$coche->setColor("Amarillo");
echo "El color del coche es ".$coche->getColor().'<br/>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();

echo "Velocidad de coche ".$coche->getVelocidad();

$coche2= new Coche();
$coche2->setColor("Verde");
$coche2->setModelo("Gallardo");

var_dump($coche);
var_dump($coche2);