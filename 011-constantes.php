<?php

define("MICHI", "Mr. Michi");
// define("MICHI", "Mr. Michi", true); // deprecadO
define("michi", "Otro. Michi");

echo MICHI;

echo "<br>";

echo michi;

echo "<br>";

const PI = 3.14;

echo PI;
echo "<br>";

$desicion = true;

if ($desicion) {
    define('BLOCK_CONSTANT','CONSTANTE EN BLOQUE');
    // const BLOCK_CONSTANT = 'CONSTANTE EN BLOQUE'; // NO permitido
    echo BLOCK_CONSTANT;
    echo "<br>";
}

echo BLOCK_CONSTANT;
echo "<br>";