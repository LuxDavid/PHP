<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fORMULARIO php</title>
</head>

<body>

    <h1>Formulario en PHP</h1>

    <form method="POST" action="recibir.php">

        <P>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </P>

        <P>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </P>

        <input type="submit" value="Enviar Datos">

    </form>
</body>

</html>