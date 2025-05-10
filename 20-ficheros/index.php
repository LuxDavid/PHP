<?php

//Abri un archivo
$abrir= fopen("fichero.txt", "a+");

//Leer contenido
while(!feof($archivo)){
    $contenido= fgets($archivo);
    echo $contenido."<br/>";
}

//Escribir 
fwrite($archivo, "Soy un texto metido desde php");

//Cerrar archvio
fclose($archivo);

//Copiar 
copy('fichero.txt', 'copia.txt') or die("Error al copiar");

//Renombrar
rename('copia.txt', 'archivo_copia.txt');

//Eliminar
unlink('archivo_copia.txt') or die("Error al eliminar");

//Comprobar si un archivo exite
if(file_exists("fichero.txt")){
    echo "El archivo existe";
}else{
    echo "El archivo no existe";
}