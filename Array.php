<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 03</title>
</head>
<body>

<?php

$geolocationOfAnimals = array (
  "Eurasia" => array(
      "Himalayan Bear",
      "Red Wolf"
  ),
  "Africa" => array(
      "Elephan African",
      "giraffe"
  ),
  "North America" => array(
      "Coyote",
      "Puma"
  ),
    "South Americ" => array (
        "7" => "Lama",
        "8" => "Jaguar"
    ),
    "Australia" => array(
        "Tasmanian Devil",
        "Kangaroo"
    ),
    "Antarctica" => array(
        "Seals",
        "Penguins"
    )
);

$animalsTwoWords = array(
    "Himalayan Bear",
    "Red Wolf",
    "Elephan African",
    "Tasmanian Devil"
);

$array = array(
    "Himalayan" => "Bear",
    "Red" => "Wolf",
    "Elephan" => "African",
    "Tasmanian" => "Devil"
);

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

<form action="Array.php" method="POST">
    <input name="myActionName" type="submit" value="Выполнить" />
</form>

</body>
</html>
