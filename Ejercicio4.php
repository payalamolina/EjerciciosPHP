<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 4</h1>

<?php

    header ("Content-type: text/html;charset=\"utf-8\"");
    $usuario = "payala20";

    if ($usuario == "payala2" || $usuario == "payala20") //utilizando el moperador 
    {
        //si la instruccion es verdadera
        echo "<h1>Usuario es valido</h1>";
    }
    else
    {
        //si la instruccion resulta falsa
        echo "<h1>Lo siento $usuario, no tiene acceso a las opciones</h1>";
    }

    $edad = 31
    if($edad >= 18)
    {
        echo "<h1>Tiene la edad requerida</h1>";
    }
    else
    {
        echo "<h1>Lo siento debe de tener al menos 18 años </h1>";
    }
?>

</body>
</html>