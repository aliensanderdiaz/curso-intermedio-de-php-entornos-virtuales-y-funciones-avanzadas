<?php

$cajero = 10;

$add_cajero = fn($add) => $cajero + $add;

echo $add_cajero(20);
echo "<br>";

# Esto no fnciona... las variables globales no se pueden modificar, solo leer
$add_cajero2 = fn($add) => $cajero += $add;

$add_cajero2(2);
$add_cajero2(20);
$add_cajero2(8);

echo $cajero;

$edades = [5,21,50,9,18];

$mayores_de_edad = array_filter($edades, fn($current) => $current >= 18);
echo "<pre>";
print_r($mayores_de_edad);