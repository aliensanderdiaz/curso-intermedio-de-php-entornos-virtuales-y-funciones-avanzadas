<?php

$numbers = [1,2,3,4];

$numbers_by_2 = array_map(function($current) {
    return $current * 2;
}, $numbers);

echo "<pre>";


var_dump($numbers_by_2);


$multiplicar_por_3 = function($current) {
    return $current * 3;
};

$numbers_by_3 = array_map($multiplicar_por_3, $numbers_by_2);

echo "<pre>";


var_dump($numbers_by_3);

$michi = "Mr. Michi";

$view_michi_name = function() use ($michi) {
    echo $michi;
};

$view_michi_name();