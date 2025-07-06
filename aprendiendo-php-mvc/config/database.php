<?php

class database{
    public static function conectar(){
        $conexion= new mysqli("localhost:3308", "administrador", "dragon86", "notas_master");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}