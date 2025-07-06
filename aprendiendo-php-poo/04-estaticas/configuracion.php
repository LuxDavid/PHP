<?php

// Con :: accedemos a metodos estaticos

class Configuracion{

    public static $color;
    public static $letter;
    public static $entorno;

    public static function getColor()
    {
        return self::$color;
    }

    public static function setColor($color)
    {
        self::$color = $color;
    }

    public static function getLetter()
    {
        return self::$letter;
    }

    public static function setLetter($letter)
    {
        self::$letter = $letter;
    }

    public static function getEntorno()
    {
        return self::$entorno;
    }

    public static function setEntorno($entorno)
    {
        self::$entorno = $entorno;
    }
}
