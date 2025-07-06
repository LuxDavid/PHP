<?php
require_once '../vendor/autoload.php';

//Conexion db
$conexion= new mysqli("localhost:3308", "administrador", "dragon86", "notas_master");
$conexion->query("SET NAMES 'utf8'");

//Consulta a paginar
$consulta=$conexion->query("SELECT COUNT(id) AS 'total' FROM notas");
$numero_elementos= $consulta->fetch_object()->total;
$numero_elementos_pagina=2;

//Hacer paginacion
$pagination= new Zebra_Pagination();

//Numero total elementos a paginar
$pagination->records($numero_elementos);

//Numero de elementos por pagina
$pagination->records_per_page($numero_elementos_pagina);

$page=$pagination->get_page();

$empieza_aqui=(($page - 1) * $numero_elementos_pagina);
$notas= $conexion->query("SELECT * FROM notas LIMIT $empieza_aqui, $numero_elementos_pagina");

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

while($nota = $notas->fetch_object()){
    
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3>";
}

$pagination->render();