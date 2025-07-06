<?php

Class Persona{
    public $nombre;
    public $edad;
    public $ciudad;

    public function __construct($nombre, $edad, $ciudad){
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->ciudad=$ciudad;
    }

    public function __call($name, $arguments){
        $prefix_metodo=substr($name,0,3);
        $nombre_metodo= substr(strtolower($name), 3);

        if($prefix_metodo == 'get'){

            if(!isset($this->$nombre_metodo)){
                return "El metodo que estas invocando no existe!!";
            }
            
            return $this->$nombre_metodo;
        }else{
            return "El metodo no existe";
        }

    }
}

$persona= new Persona("Brayan", 24, "Guadalajara");
echo $persona->getNombre();