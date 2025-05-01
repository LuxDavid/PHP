<?php
/*
Ejercicio 6. Mostrar un atabla de HTML con las tablas de multiplicar del 1 al 10.
*/

echo "<table border='1'> <tr>"; //INICIO DE LA TABLA

echo "<tr>"; // INICIO FILA 1 DE CELDAS

for ($cabecera = 1; $cabecera <= 10; $cabecera++) {
    echo "<td>Tabla del $cabecera</td>";
}

echo "</tr>"; //CIERRE FILA 1 DE CELDAS

echo "<tr>"; // INICIO FILA 2 DE CELDAS
for ($i = 1; $i <= 10; $i++) {
    echo "<td>";

    for ($x = 1; $x <= 10; $x++) {
        echo "$i x $x = " . ($i * $x) . '<br/>';
    }

    echo "</td>";
}
echo "</tr>";

echo "</table>";
