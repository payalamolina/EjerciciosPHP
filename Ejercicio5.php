<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 5</h1>

<?php

    header ("Content-type: text/html;charset=\"utf-8\"");

    for ($i=1; $i<=10; $i++)
    {
        echo "<p>$i</p>";
    }
    echo "<p>Finaliza ciclo for</p>";

    for ($i=10; $i>=0; $i--)
    {
        echo "<P>Finaliza ciclo for</p>";
    }

    $familia = array("Pablo", "Malenis", "Jonathan", "Melani");

    for ($i=0; $i<=sizeof($familia);$i++)
    {
        echo "<h2>$familia[$i] numero de elementos $i </h2>";
        echo "<br>"; 
    }

    $x=1;
    while ($x <= 10)
    {
        echo "El elemento es : $x <br>";
        $x++
    }

?>

</body>
</html>