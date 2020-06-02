<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 3</h1>

<?php

    echo "<h2>Arreglos</h2>";

    $miArreglo = array (10,20,30,40,50);

    echo "<p>Contenido del elemento 2 del arreglo: $miArreglo[2]</p>";

    echo "<p>Despliega el contenido del arreglo : </p>";
    print_r ($miArreglo); //se utiliza esta funcion para ver en forma entendible el contenido

    echo "<p>El tamaño del arreglo es: " .sizeof($miArreglo)."</p>";
    
    $miFechaArr["dia"]="Lunes";
    $miFechaArr["mes"]="Junio";
    $miFechaArr["año"]="2020";

    echo "<br><br>";

    var_dump ($miFechaArr); //muestra informacion de la variable indicada

    unset ($miFechaArr["año"]); //elimina el elemento indicado del arreglo
    echo "<br><br>";
    print_r ($miFechaArr);
    $MiArregloReves = array_reverse($miArreglo);

    echo "<br><br>";
    print_r ($MiArregloReves); //este nuevo arreglo contiene los elementos en forma inversa
?>
</body>
</html>