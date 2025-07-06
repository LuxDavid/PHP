<?php

abstract class Ordenador{
    public $encendido;

    abstract  public function encender();

    public function apagar(){
        $this->encendido= false;
    }
}

class PC extends Ordenador{
    public $software;

    public function arrancar(){
        $this->software= true;
    }

    public function encender(){
        $this->encendido= true;
    }
}

$ordenador= new PC();
$ordenador->arrancar();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);