<?php

$geolocationOfAnimals = array (
    "Eurasia" => array(
        "Himalayan" => "Bear",
        "Red" => "Wolf"
    ),
    "Africa" => array(
        "Elephan" => "African",
        "4" => "giraffe"
    ),
    "North America" => array(
        "5" => "Coyote",
        "6" => "Puma"
    ),
    "South Americ" => array (
        "7" => "Lama",
        "8" => "Jaguar"
    ),
    "Australia" => array(
        "Tasmanian" => "Devil",
        "10" => "Kangaroo"
    ),
    "Antarctica" => array(
        "11" => "Seals",
        "12" => "Penguins"
    )
);


foreach ($geolocationOfAnimals as $key => $element)
{
    foreach ($element as $key => $element)
    {
        if (!is_numeric($key)) {
            $assoc["Himalayan"] = "Bear";
            $assoc["Red"] = "Wolf";
            $assoc["Elephan"] = "African";
            $assoc["Tasmanian"] = "Devil";
        }
    }
}


$array = $assoc;

function array_quake(&$array) {
    if (is_array($array)) {
        $keys = array_keys($array); // We need this to preserve keys
        $temp = $array;
        $array = NULL;
        shuffle($temp); // Array shuffle
        foreach ($temp as $k => $item) {
            $array[$keys[$k]] = $item;
        }
        return;
    }
    return false;
}

array_quake($array);
foreach ($array as $key => $value){
    echo "$key $value <br>";
}






?>
