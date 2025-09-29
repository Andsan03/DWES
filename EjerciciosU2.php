<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
    <h1>Ejercicio1</h1>
    <?php

    $integer = 5;
    $string = "Hola mundo";
    $double = 5.5;
    $boolean = TRUE;

    echo"<p>La variable es de tipo ". gettype($integer) ." y tiene valor $integer</p>";
    echo"<p>La variable es de tipo ". gettype($string) ." y tiene valor $string</p>";
    echo"<p>La variable es de tipo ". gettype($double) ." y tiene valor $double</p>";
    echo"<p>La variable es de tipo ". gettype($boolean) ." y tiene valor $boolean</p>";
    ?>

    <h1>Ejercicio 2</h1>
    <?php
    $int1 = 9;
    $int2 = 5;
    $mod = $int1 % $int2;

    echo"<p>$int1 mod $int2 = $mod</p>";
    echo "$int1<sup>$int2</sup>";

    ?>

    <h1>Ejercicio 3</h1>
    <?php
    $nombre = "Andrew";
    $apellido = "Sanchez";
    $año = 2003;

    echo"<table border = 1> 
    <tr>
        <td>Nombre</td>
        <td>$nombre</td>
    </tr>
    <tr>
        <td>Apellidos</td>
        <td>$apellido</td>
    </tr>
    <tr>
        <td>Año de nacimiento</td>
        <td>$año</td>
    </tr>  
    </table>";
    ?>

    <h1>Ejercicio 4</h1>
    <?php
    $edad = 22;
    $edad10años = $edad + 10;
    echo "<p>Actualmente tienes $edad, dentro de 10 años tendras $edad10años</p>"
    ?>
    <h1>Bucles anidados</h1>
    <?php
    /*Ahora esto
    0 1 2 3 4 5
    0 1 2 3 4 5
    */
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo "$i";
        }
        echo "<br>";
    }

    /*Ahora esto
    0 1 2 3 4
    5 6 7 8 9
    10 11 12 13 14
    15 16 17 18 19
    20 21 22 23 24 
    */
    echo"<br>";

    $n =0;

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j <= 4; $j++) {
            echo "$n";
            $n++;
        }
        echo "<br>";
    }

    echo "<br>";

    /*Ahora esto
    0 1 2 3 
    3 4 5 6
    6 7 8 9
    9 10 11 12
    12 13 14 15
    */

    echo"<table border= 1>";
    $n = 0;
    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 4; $j++) {
            echo "<td>$n</td>";
            $n++;
        }
        echo "</tr>";
        $n --;        
    }
    echo"</table>";
    ?>

    <h1>Ejercicio 5</h1>
    <?php
    $precio = 3000;
    if ($precio >= 1000) {
        echo "<p>Caro</p>";
    }elseif ($precio >=100 and $precio <= 1000) {
        echo "<p>Barato</p>";
    }else {
        echo "<p>Precio negativo</p>";
    }
    ?>

    <h1>Ejercicio 6</h1>
    <?php
    $hora=20;
    $minuto=59;
    $segundo=59;
    
    $segundo++;
    if ($segundo >= 60) {
        $segundo = 0;
        $minuto++;
        if ($minuto >= 60) {
        $hora++;
        $minuto= 0;
        if ($hora >= 24) {
            $hora = 0;
        }
        }
    }
    echo "<p>$hora:$minuto:$segundo</p>";



    ?>

    <h1>Ejercicio 7</h1>
    <?php
    $maximo= 14;
    for ($i = 1; $i <= $maximo; $i++) {
        echo "$i  ";
    }
    ?>
    <h1>Ejercicio 8</h1>
    <?php
    echo "<ul>";
        for ($i = 9; $i <= 15;$i++) {
            echo "<li>$i</li>";
        };
    echo "</ul>";
    ?>
    <h1>Ejercicio 9</h1>
    <?php
    for ($i = 0; $i <= 10; $i++) {
        if ($i % 2== 0) {
            echo "$i, ";
        }
    }
    
    ?>
    <h1>Ejercicio 10</h1>
    <?php
    echo "<ol>";
        for ($i = 50; $i >= 20; $i--) {
            if ($i % 3 != 0 && $i % 7 != 0) {
                echo "<li>$i</li>";
            }     
        }

    echo "</ol>";
    ?>
    <h1>Ejercicio 11</h1>
    <?php
    $suma = 0;
    for ($i = 1; $i <= 10; $i++) {
        $suma += $i;
    }
    echo "<p>$suma</p>";
    
    ?>
    <h1>Ejercicio 12</h1>
    <?php
    $numero = 5;
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }
    echo "<p>$numero</p>";
    
    ?>
    <h1>Ejercicio 13</h1>
    <?php
        $base = 3;
        $exponente = 3;
        for ($i = 0; $i <= $exponente; $i++) {
            $result = $base * $base;
        }
        echo "<p>$result</p>";
    ?>
    <h1>Ejercicio 14</h1>
    <?php
    
    ?>
    <h1>Ejercicio 15</h1>
    <?php
    
    ?>
    <h1>Ejercicio 16</h1>
    <?php
    
    ?>
    <h1>Ejercicio 17</h1>
    <?php
        $rows = 5;
        $columns = 5;
        for ($i = 0; $i <= $rows; $i++) {
            for ($j = 0; $j <= $columns; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    
    ?>
    <h1>Ejercicio 18</h1>
    <?php
        echo "<p>";
        $rows = 5;
        $columns = 1;
        for ($i=0; $i < $rows ; $i++) { 
            for ($j = 0; $j < $columns ; $j++) {
                echo "*";
            }
            $columns++;
            echo "<br>";
        }
    ?>
    <h1>Ejercicio 19</h1>
    <?php
        echo "<p>";
        $columns = 5;
        for ($i=0; $i < $rows ; $i++) { 
            for ($j = 0; $j < $columns ; $j++) {
                echo "*";
            }
            $columns++;
            echo "<br>";
        }
    ?>
    <h1>Ejercicio 20</h1>
    <?php
        echo "<table>";
            
            for ($i = 0; $i < 10; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 10; $j++) {
                    if ($i == 0) { 
                        if ($j == 0) {
                             echo "<td class=thx>X</td>";
                        } else {
                            echo "<th>$j</th>";
                        }
                    }else {
                        echo "<td>$i</td>";
                    }
                }
                echo "</tr>";
            }    
        echo "</table>";
    ?>
    <h1>Ejercicio 21</h1>
    <?php
        $cadena = "php";
        $cadena++;
        
    ?>


</body>
</html>