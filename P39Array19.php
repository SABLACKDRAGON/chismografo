<?php
/* program que separa a las personas por gurpos a corde de sus edades utilizando arreglos donde si tienen menos de 18 pertenecen el el grupo uno si tiene mas de 18 y es menor a 49 es de grupo 2
y si tiene 50 para arriba es del grpo 3 se tendra que postras en pantalla el nombre del individuo y su correspondiente grupo donde si no pertenerce a los otro dos grupos se marcara con valor de 0 y si perteneca a un grupo se marcara 1 

Programa por luis Abisai Aguilar Gracia 

3Aprogramacion TM 
*/
$nombres = array("Lili", "Neft", "Zhaid", "paco", "lalo", "paty", "beto", "vero");
$edad = array(16, 16, 37, 67, 34, 25, 16, 51);

$grupo1 = array();
$grupo2 = array();
$grupo3 = array();

for ($i = 0; $i < count($nombres); $i++) {

    if ($edad[$i] < 19) {
        $grupo1[] = 1;
        $grupo2[] = 0;
        $grupo3[] = 0;
    } elseif ($edad[$i] < 50) {
        $grupo1[] = 0;
        $grupo2[] = 1;
        $grupo3[] = 0;
    } else { 
        $grupo1[] = 0;
        $grupo2[] = 0;
        $grupo3[] = 1;
    }
}

echo "<h2>nombres_____edad_____grupo1_____grupo2_____grupo3  <br>";

for ($i = 0; $i < count($nombres); $i++) { 
    echo "<p>___$nombres[$i]_______$edad[$i]________$grupo1[$i]_________$grupo2[$i]_________$grupo3[$i]  </p>";
}

?>





