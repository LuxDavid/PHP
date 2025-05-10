<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Formulario</h1>

    <form action="" method="POST" enctype="multipart/form-data">

    <?php 
    
    /*

    autofocus= "autofocus"
    disabled= "disabled"
    maxlenght=maximo numero de caracteres
    minlenght=numero minimo de caracteres
    pattern="[A-z ]+"
    required= "required"
    value= "valor por defecto"
    type="hidden"
    */
    
    ?>

        <label for="nombre">Nombre: </label>
        <p><input type="text" name="nombre"></p>

        <label for="apellido">Apellidos: </label>
        <p><input type="text" name="apellido"></p>

        <label for="boton">Boton: </label>
        <p><input type="button" name="boton" value="boton"></p>

        <label for="sexo">Sexo: </label>
        <p>
            Hombre <input type="checkbox" name="sexo" value="hombre" checked="checked">
            Mujer <input type="checkbox" name="sexo" value="mujer" >
        </p>

        <label for="color">Color: </label>
        <p><input type="color" name="color"></p>

        <label for="fecha">Fecha: </label>
        <p><input type="date" name="fecha"></p>

        <label for="correo">Correo: </label>
        <p><input type="email" name="correo"></p>

        <label for="archivo">Archivo: </label>
        <p><input type="file" name="archivo" multiple="multiple"></p>

        <label for="numero">Numeo: </label>
        <p><input type="number" name="numero"></p>

        <label for="pass">Pasword: </label>
        <p><input type="password" name="pass"></p>

        <label for="continente">Continente: </label>
        <p>
            America del sur <input type="radio" name="continente" value="America del sur"/>
            Europa <input type="radio" name="continente" value="Europa"/>
            Asia <input type="radio" name="continente" value="Asia"/>
        </p>

        Peliculas:
        <select name="peliculas" >
            <option value="Spiderman">Spiderman</option>
            <option value="Venom">Venom</option>
        </select>

        <input type="submit" value="Enviar" />

    </form>

</body>

</html>