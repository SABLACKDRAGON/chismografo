<?php
/*P37Array17.php
Programa que almacena datos een un arreglo 
multidimensional y posterior mente inprime en 
diferentes posisiones 
Luis Abisai Aguilar Gracia
Programacion 3A TM*/

$datos = array(
    array(10, 20, 30),
    array(40, 50, 60),
    array(70, 80, 90)
);

// Mostrar la matriz normal
echo "<h2>Matriz Normal</h2>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}

// Mostrar filas como columnas
echo "<h2>Filas a Columnas</h2>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $datos[$j][$i] . " ";
    }
    echo "<br>";
}

// Mostrar columnas invertidas
echo "<h2>Columnas Invertidas</h2>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 2; $j >= 0; $j--) {
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}

// Mostrar filas invertidas
echo "<h2>Filas Invertidas</h2>";
for ($i = 2; $i >= 0; $i--) {
    for ($j = 0; $j < 3; $j++) {
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}

// Mostrar espejo
echo "<h2>Espejo</h2>";
for ($i = 2; $i >= 0; $i--) {
    for ($j = 2; $j >= 0; $j--) {
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}
?>
