<?php

$error = 'faltan_valores';

if (
    !empty($_POST['nombre']) && !empty($_POST['apellidos']) &&
    !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['password'])
) {
    $error = 'ok';

    $nombre = isset($_POST['nombre']);
    $apellidos = isset($_POST['apellidos']);
    $edad = isset($_POST['edad']);
    $email = isset($_POST['email']);
    $pass = isset($_POST['password']);

    //Validar el nombre
    if (!is_string($nombre)  || preg_match("/[0-9]+/", $nombre)) {
        $error = 'nombre';
    }

    //Validar apellidos
    if (!is_string($apellidos)  || preg_match("/[0-9]+/", $apellidos)) {
        $error = 'nombre';
    }

    //Validar edad
    if (!is_numeric($edad)  || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';
    }

    //Validar email
    if (!is_string($email)  || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'edad';
    }

    //Validar password
    if (empty($pass)  || strlen($pass)<5) {
        $error = 'password';
    }

} else {
    $error = 'faltan_valores';
}

if ($error != 'ok') {
    header("Location:index.php?error=$error");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar formularios en PHP</title>
</head>

<body>

    <?php if ($error = 'ok') : ?>



    <?php endif; ?>

</body>

</html>