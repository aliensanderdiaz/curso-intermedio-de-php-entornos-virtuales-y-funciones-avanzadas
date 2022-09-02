<?php

$cat = "Meow";

function make_a_cat_bark(&$cat_dog) {
    $cat_dog = "Guau";
}

make_a_cat_bark($cat);

echo $cat;