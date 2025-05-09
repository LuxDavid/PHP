<?php
/*
Cookie: Es un fiche que se almacena en el ordenador del usuario que visita
la web, con el fin de recordar datos o rastrear el comportamiento del mismo
en la web
*/

//CREAR COOKIE
//setcookie("nombre", "Valor que solo pueder texto", caducidad, ruta, dominoo);

//Cookie basica
setcookie("micookie", "valor de mi galleta");

//Cookie con expiracion
setcookie("unyear", "valor mi cookie de 365 dias", time()+(60*60624*365));

?>

<a href="ver_cookies.php">Ver las galletas</a>