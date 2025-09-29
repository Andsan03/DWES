<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios unidad 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <?php
    $aleatorios = array();
    for ($i=0; $i < 20 ; $i++) { 
        array_push($aleatorios,random_int(10,50));
    };
    echo implode(", ", $aleatorios);
    ?>

    <h2>Ejercicio 2</h2>
    <?php
    $suma = 0;
    $aleatorios = array();
    for ($i=0; $i < 20 ; $i++) { 
        array_push($aleatorios,random_int(10,50));
    };
    echo implode(", ", $aleatorios);
    for ($i=0; $i < 20 ; $i++) { 
        $suma += $aleatorios[$i];
    }
    $media = $suma / count($aleatorios);
    $max = max($aleatorios);
    $min = min($aleatorios);
    echo "<p>La suma de todos  los valores es de $suma</p>";
    echo "<p>La media es $media</p>";
    echo "<p>El maximo es $max</p>";
    echo "<p>El minimo es $min</p>";
    ?>

    <h2>Ejercicio 3</h2>
    <?php
    $alturas = [
        "Bob" => 1.54,
        "Pepe"=> 1.67,
        "Juan"=> 1.85,
        "Jhon"=> 1.77,
        "Mateo"=> 1.90
    ];

    echo "<table border = 1>";
        for ($i=0; $i < count($alturas); $i++) {
            echo "<tr>";
            for ($j=0; $j < count($alturas); $i++) { 
                foreach ($alturas as $person => $value) {
                    echo "<td>$person</td>";
                }
            };
        };  
            echo "</tr>";
    echo "</table>";
    ?>

    <h2>Ejercicio 4</h2>
    <?php

    ?>

    <h2>Ejercicio 5</h2>
    <?php

    ?>

    <h2>Ejercicio 6</h2>
    <?php

    ?>

    <h2>Ejercicio 7</h2>
    <?php

    ?>

    <h2>Ejercicio 8</h2>
    <?php

    ?>

    <h2>Ejercicio 9</h2>
    <?php

    ?>

    <h2>Ejercicio 10</h2>
    <?php

    ?>

    <h2>Ejercicio 11</h2>
    <?php

    ?>

    <h2>Ejercicio 12</h2>
    <?php

    ?>
</body>
</html>