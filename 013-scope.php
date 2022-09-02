<?php

$outside_variable = "Esta es una variable externa";

function my_function() {
    global $outside_variable;
    echo $outside_variable;
}

my_function();
echo "<pre>";
print_r($GLOBALS);

function my_function2() {
    echo $GLOBALS["outside_variable"];
}

my_function2();