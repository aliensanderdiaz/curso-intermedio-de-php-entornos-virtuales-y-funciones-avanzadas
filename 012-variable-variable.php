<?php

$variable = "nombre";
$$variable = "Michi";

echo $nombre;

$nombre = "carlitos";
$edad = 11;
$comida_favorita = "Lasaña";

$variable = "nombre";

echo "<br>";
echo $$variable;

$variable = "edad";

echo "<br>";
echo $$variable;

$variable = "comida_favorita";

echo "<br>";
echo $$variable;