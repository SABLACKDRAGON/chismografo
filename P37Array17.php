<?PHP

/*P37Array17.php
programa que separa negativos y positivos en un array y los suma 
Aguilar Gracia luis Abisai 3A TM */







$arraynumeros = array(-4, 8, 17, -11, -3, 1, 20, -30, 21, 50, -73, -7, -10, -8);
$arraypositivo = array();
$arraynegativo = array();
$sumaPositivos = 0; 
$sumaNegativos = 0; 


for ($i = 0; $i < count($arraynumeros); $i++) {
    if ($arraynumeros[$i] >= 0) {
        $arraypositivo[] = $arraynumeros[$i];
        $sumaPositivos += $arraynumeros[$i]; 
    } else {
        $arraynegativo[] = $arraynumeros[$i];
        $sumaNegativos += $arraynumeros[$i]; 
    }
}


    echo " <h2>numeros positivos </P>";

for ($i=0; $i <count($arraypositivo) ; $i++) { 
    echo $arraypositivo[$i];
    echo "<br>"; 
}
echo "<br>Suma de positivos: $sumaPositivos<br>";
    echo " <br> numeros Negativos </P> ";

for ($i=0; $i <count($arraynegativo) ; $i++) { 
    echo $arraynegativo[$i];
    
    echo "<br>"; 
}
echo "<br>Suma de negativos: $sumaNegativos<br> </h2>";

?>