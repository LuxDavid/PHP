<?php
//Herencia: L aposibilidad de compartir atributos y metodos entre clases

class Persona{

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function hablar(){
        return "Estoy hablando";
    }

    public function caminar(){
        return "Estoy caminando";
    }
}

class Informatico extends Persona{

    public $lenguajes;
    public $experiencia;

    public function __construct(){
        $this->lenguajes="HTML, CSS Y JS";
        $this->experiencia=10;
    }

    public function sabeLenguajes($lenguajes){
        $this->lenguajes= $lenguajes;

        return $this->lenguajes;
    }

    public function programar(){
        return "Sou programador";
    }

    public function repararOrdenador(){
        return "Reparar ordenadores";
    }

    public function hacerInformatica(){
        return "Estoy escribiendo en word";
    }
}

class TecnicoRedes extends Informatico{
    public $auditarRedes;
    public $experiencia;

    public function __construct(){
        parent::__construct();
    $this->auditarRedes = 'experto';
    $this->experiencia = 5;   
}

    public function auditoria(){
        return "Estoy auditando una red";
    }
}
