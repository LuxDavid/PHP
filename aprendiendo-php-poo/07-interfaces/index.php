<?php

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desgragmentar();
    public function detectarUSB();
}

class Imac implements Ordenador{
    public $modelo;

    public function gerModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo= $modelo;
    }

    public function encender(){}

    public function apagar(){}

    public function reiniciar(){}

    public function desgragmentar(){}
    
    public function detectarUSB(){}
}

$mak= new Imac();
$mak->setModelo("Macbook PRO 2019");
echo $mak->gerModelo();