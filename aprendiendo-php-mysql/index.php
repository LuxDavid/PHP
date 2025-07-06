<?php
//Conectar a la base de datos
$conexion = mysqli_connect("localhost:3308", "administrador", "dragon86", "phpmysql");

//Comparar si la conexexion es correcta
if (mysqli_connect_errno()) {
    echo "La conexion a la base de datos MYSQL ha fallado: " . mysqli_connect_error();
} else {
    echo "Conectado a la base de datos correctamente";
}

//Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta
$query = mysqli_query($conexion, " SELECT * FROM notas");

while ($nota = mysqli_fetch_assoc($query)) {
    //var_dump($nota);
    echo "<h2>" . $nota['titulo'] . '</h2>';
    echo "<h2>" . $nota['descripcion'] . '</h2>';
}

//Insertar en la base de datos desde PHP
$sql = "INSERT INTO notas VALUES(NULL, 'Nota desde PHP', 'Esto es una nota en PHP', 'green')";
$insert= mysqli_query($conexion, $sql);

echo "<hr/>";

if ($insert) {
    echo "DATOS INSERTADOS CORRECTAMENTE";
} else {
    echo "ERROR: " .mysqli_error($conexion);
}
