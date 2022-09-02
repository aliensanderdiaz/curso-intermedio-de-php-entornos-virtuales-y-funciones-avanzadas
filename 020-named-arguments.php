<?php

# solo en version 8

function get_person_info($name, $age, $country) {
    echo "$name tiene $age años y vive en $country";
}

get_person_info(
    age: 18,
    country: 'Colombia',
    name: 'Juliana'
);