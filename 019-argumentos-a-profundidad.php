<?php

function sumar_edades($edades = array(13, 17, 35))
{
    return array_sum($edades);
}

echo sumar_edades();
echo "<br>";

echo sumar_edades(array(12, 18, 21));
echo "<br>";
# trailing commas en PHP 8
// function multiplicar(
//     $n1 = 1,
//     $n2 = 2,
//     $n3 = 3,
// ) {
//     return $n1 * $n2 * $n3;
// }

// echo multiplicar();

#tambien para PHP8
// class UnaClaseRandom {

// }

// function receive_a_class($class = new UnaClaseRandom()) {
//     echo $class::class;
// }

// receive_a_class();


function suma($n1, $n2 = 8){
    return $n1 + $n2;
}

echo suma(8);