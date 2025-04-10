<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla - <?php echo "Brayan David" ?></title>
</head>

<body>

    <!--Echo atajado  --->
    <?= "Bienvenido al curso mas grande de PHP" ?>

    <?php
    //Titulas de la seccion
    echo "<h3>Listado de videojuegos:</h3>";
    /*
    Esta es una lista
    de videojuegos 
    moderno
    */
    echo "<ul>"
        . "<li>GTA</li>"
        . "<li>FIFA</li>"
        . "<li>LOL</li>"
        . "</ul>";

       // echo "<br> HOLA HOLA HOLA<br/>";

       //Parrafo explicativo
    echo '<p>Esta es toda ' . ' - ' . 'la lista de juegos</p>';

    ?>

</body>

</html>