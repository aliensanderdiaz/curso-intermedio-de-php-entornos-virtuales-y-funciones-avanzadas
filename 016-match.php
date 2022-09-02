<?php

function get_country_name_match($country) {
    return match($country) {
        "MX" => "México",
        "COL" => "Colombia",
        default => "Lo siento no encontré tu país"
    };
}

echo get_country_name_match("MX");