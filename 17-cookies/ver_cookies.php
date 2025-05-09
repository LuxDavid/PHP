<?php

/*
Para mostrar el valor de la cookies, tengo que usar $_COOKIE, una vatiable superglobal
es un array asociativo
*/

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo "No existe la cookie";
}

if(isset($_COOKIE['unyear'])){
    echo "<h1>".$_COOKIE['unyear']."</h1>";
}else{
    echo "No existe la cookie";
}

?>

<a href="crear-cookies.php">Crear mis  galletas</a>
<a href="borrar-cookies.php">Borrar mis galletas</a>