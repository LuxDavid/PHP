<?php

/*
ARRAYS
Un array es una coleccion o un conjunto de datos/valores, bajo un unico nombre.
Para acceder a esos valores podemos usar un indice numero o lafanumerico.
*/

$pelicula= 'Batman';
$peliculas= array('Batman', 'Spiderman', 'Hulk');

var_dump($peliculas);
echo '<br/>';
echo $peliculas[1];

//rECORRER CON for
echo "<h1>Listado de peliculas</h1>";

echo "<ul>";

for($i=0; $i < count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";
}

echo "</ul>";

echo "<ul>";

foreach($peliculas as $pelicula){
    echo "<li>".$pelicula."</li>";
}

echo "</ul>";

//Array asociativo
$personas= array(
    'nombre' => 'Brayan',
    'apellidos' => 'Diaz'
);

var_dump($_GET);
echo $personas['apellidos'];

$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@gmail.com'
    ),
    array(
        'nombre' => 'Brayan',
        'email' => 'Brayan@gmail.com'
    ),
    array(
        'nombre' => 'Salvador',
        'email' => 'Salva@gmail.com'
    )
    );

    //Recorrer un array asociativo
    foreach($contactos as $key => $contacto){
        var_dump($contacto['nombre']);
    }