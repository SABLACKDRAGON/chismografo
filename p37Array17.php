<?php

/*trabajo donde vamos a 

Trabajo por Luis abisai Aguilar Gracia
Maestra veronica Martinez Anaya
cbtis 89 3A TM Matutino 

*/



$arraynumeros = array(-4, 8, 17, -11, -3, 1, 20, -30, 21, 50, -73, -7, -10, -8);
$arraypositivo = array();
$arraynegativo = array();


/* ciclo para determinar los pares guardandolo en un array*/
for ($i=0; $i <count($arraynumeros); $i++) {

	if ( $arraynumeros[$i] >= 0) {
	
		$arraypositivo[] = $arraynumeros[$i] ;
	}
	else {
			$arraynegativo[] = $arraynumeros[$i] ;
	}
}


	echo " numeros positivos </P>";
 /*ciclo que va a mostra el valor de array positivo*/
for ($i=0; $i <count($arraypositivo) ; $i++) { 
	echo $arraypositivo[$i];
	echo "<br>"; 
}
	echo " numeros Negativos </P> ";
/*ciclo que va a mostra el valor de array negativo*/
for ($i=0; $i <count($arraynegativo) ; $i++) { 
	echo $arraynegativo[$i] ;
	echo "<br>"; 
}


echo "valores guardados en los array";
echo "<br>";
echo "array positivos";echo "<br>";

var_dump($arraypositivo); 
echo "<br>";
echo "array Negativos";echo "<br>";

var_dump($arraynegativo);
?>