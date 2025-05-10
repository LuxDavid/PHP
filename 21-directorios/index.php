<?php
//Crear carpeta
if(!is_dir('mi_carpeta')){
    mkdir('mi-carpeta', 0777) or die('Carpeta no creada');
}else{
    echo "Ya exsite";
}

//Borrar carpeta
rmdir('mi_carpeta');

echo "<hr/> <h1>Contenido carpeta</h1>";

if($gestor= opendir('./mi_carpeta')){
    while(false !== ($archivo= readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
            echo $archivo."<br/>";
        }
    }
}