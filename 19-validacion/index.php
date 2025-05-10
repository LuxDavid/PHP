<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios</title>
</head>
<body>
    
<h1>Validar formularios en PHP</h1>

<?php

    if(isset($_GET['error'])){
        $error=$_GET['error'];
        if($error= 'faltan_valores'){
            echo '<strong style="color:red">Ingroduce todos los datos en todos los campos </strong>'; 
        }
    }


?>

<form method="POST" action="procesar_formulario.php">

<label for="nombre">Nombre</label>
<input type="text" name="nombre" required="required" pattern="[A-Za-z]+">

<label for="apellidos">Apellidos</label>
<input type="text" name="apellidos" required="required" pattern="[A-Za-z]+">

<label for="edad" required="required" pattern="[0-9]+">Edad</label>
<input type="number" name="edad">

<label for="email">Email</label>
<input type="email" name="email" required="required">

<label for="password">Pasword</label>
<input type="password" name="password">

<input type="submit" value="Enviar">

</form>
</body>
</html>