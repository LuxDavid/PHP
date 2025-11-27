<?php
/*
En php suele haber problemas con los strings que tiene tildes y  existen funciones especificas
para tratar con esas sitaciones en paticular
*/


//Transformar strings clasicos a Mayusculas
echo strtoupper("díaz");

//Transformar elementos a mayusculas que incluyan acentos
echo mb_strtoupper("díaz");

//function clasica para obtener longitud
echo strlen("Héctor");

//Obtener longigut con acentos
echo mb_strlen("Héctor");

//Obtener valores aleatorios
echo rand(1,10);

//Tiempo unix
echo time();
