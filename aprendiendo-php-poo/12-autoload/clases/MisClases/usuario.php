<?php 
namespace MisClases;

class Usuario{

    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre= "Brayan Diaz";
        $this->email="Brayan@gmail.com";
    }
}