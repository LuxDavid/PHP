
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--Cabecera-->
<div class="cabecera">

    <h1>Includes en PHP</h1>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="sobremi.php">Sobre mi</a></li>
        <li><a href="contacto.php">Contacto</a></li>
    </ul>
    <hr/>
</div>

<!--Contenido-->
<div>
    <h2>Esta es la pagina de inicio</h2>
    <p>Texto de prueba de la pagina de inicio</p>
</div>

<!--Pie de pagina-->
<footer>
    <hr/>
    Todos los derechos reservados &copy; Brayan Diaz <?= date('Y')?>
</footer>
    
</body>
</html>