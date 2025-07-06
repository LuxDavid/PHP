<?php

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}

class Cochee{
    public $nombre;
    public $marca;
    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;
    use Utilidades;
}

class Videojuego{
    public $nombre;
    public $year;
    use Utilidades;
}

$persona= new Persona();
$persona->nombre="Antonio";
$persona->mostrarNombre();

$juego= new Videojuego();
$juego->nombre="GTA V";
$juego->mostrarNombre();

$coche= new Cochee();
$coche->nombre="Ferrari";
$coche->mostrarNombre();
