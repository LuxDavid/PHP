<?php

class DataBase{
    public static function connect(){
        $db= new mysqli("localhost:3308", "administrador", "dragon86", "tienda_master");
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}