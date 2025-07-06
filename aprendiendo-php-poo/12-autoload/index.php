<?php
require_once 'autoload.php';

// $usuario= new Usuario();
// echo $usuario->nombre;
// echo "<br/>";
// echo $usuario->email;
// use  MisClases\Categoria;
// use  MisClases\Entrada;

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->usuario=new Usuario();
        $this->categoria=new Categoria();
        $this->entrada=new Entrada();
    }
} 


$principal= new Principal(); 
var_dump($principal->usuario);

$metodos=(get_class_methods($principal));
var_dump($metodos);

$busqueda= array_search('setApellidos', $metodos);
var_dump($busqueda);

//Comprobar si existe la clase usuario
$clase= @class_exists('MisClases\Usuario');
if($clase){
    echo "<h1>La clase Si existe</h1>";
}else{
    echo "<h1>La clase NO existe</h1>";
}