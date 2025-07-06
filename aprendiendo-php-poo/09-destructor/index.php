<?php

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre="Brayan David";
        $this->email="Brayan@gmail.com";

        echo "Creando el objeto <br/>";
    }

    public function __toString(){
        return "Hola, {$this->nombre}, estas registrado con {$this->email}";
    }

    public function __destruct(){
        echo "Destruyendo el objeto";
    }
}

$usuario = new Usuario();
echo $usuario;
echo $usuario->email;

for($i=0; $i <= 200; $i++){
    echo $i."<br/>";
}