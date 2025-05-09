<?php
/*
Crear un array con el contenido de la tabla
ACCION  AVENTURA   DEPORTES
GTA     ASSASINS   FIFA
COD     CRASH      NBA
PUBG    SPYRO      CARS
*/

$tabla = array(
    "ACCION" => array("GTA", "COD", "PUBG"),
    "AVENTURA" => array("ASSAINS", "CRASH", "SPYRO"),
    "DEPORTES" => array("FIFA", "NBA", "CARS")
);

$categorias = array_keys($tabla);
$cantidadElementos = count($tabla[$categorias[0]]);

// Crear todos los elementos iterando con un bucle
//for ($i = 0; $i < $cantidadElementos; $i++) {
//     echo "<tr>";
//     for ($j = 0; $j < count($categorias); $j++) {
//         $categoriaActual = $categorias[$j];
//         echo "<td>" . $tabla[$categoriaActual][$i] . "</td>";
//     }
//     echo "</tr>";
// }



?>

<table border="1">

    <tr>
        <?php foreach ($categorias as $categoria) : ?>

            <th><?= $categoria ?></th>
        <?php endforeach; ?>

    </tr>

    <?php require_once 'primera.php'; ?>
    <?php require_once 'segunda.php'; ?>
    <?php require_once 'tercera.php'; ?>


</table>