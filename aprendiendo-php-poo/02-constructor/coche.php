<?php
//Programación orientada a objetos en PHP (POO) 

// Definir una clase (molde para crear mas objetos de tipo coche con caractaristicas parecidas)
class Coche
{

    //Atritubos o propiedades 

    /*Public: Podemos acceder desde cualquier lugar, dentro de la clase actual
    dentro de clases que hereden esta clase o fuera de la clase
    */
    public $color;

    /*PROTECTED: Podemos acceder desde la clase que los define y desde clases
    que hereden esta clase
    */
    protected $marca;

    //PRIVATE: Unicamente se puede acceder desde esta clase
    private $modelo;

    public $velocidad;
    public $caballaje;
    public $plazas;

    //Crear un constructor
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

    //Metodos, son acciones que hace el objeto (antes funciones)
    public function getColor()
    {
        //Busca en esta clase la propiedad X
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getModelo()
    {
        //Busca en esta clase la propiedad X
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function acelerar()
    {
        $this->velocidad++;
    }

    public function frenar()
    {
        $this->velocidad--;
    }

    public function getVelocidad()
    {
        return $this->velocidad;
    }

    public function mostrarInformacion(Coche $miObjeto)
    {

        if (is_object($miObjeto)) {
            $informacion = "<h1>Informacion del coche</h1>";
            $informacion .= "Color: " . $miObjeto->color;
            $informacion .= "<br/> Modelo: " . $miObjeto->modelo;
            $informacion .= " <br/> Velocidad: " . $miObjeto->velocidad;

            return $informacion;
        }else{
            $informacion="Tu dato es este: $miObjeto";
        }
    }
}

//Fin definicion de la clase