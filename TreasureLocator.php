<?php
$coordinates = trim(fgets(STDIN));
$coordinatesArray = explode(', ', $coordinates);

for ($i = 0; $i < count($coordinatesArray); $i+=2) {
    $x = $coordinatesArray[$i];
    $y = $coordinatesArray[$i + 1];
    echo checkCoordinates($x, $y);

    if (! ((count($coordinatesArray) - 2) == $i)) {
        echo PHP_EOL;
    }
}



function checkCoordinates($x, $y) {
    if ($x >= 1 && $x <= 3 && $y >= 1 && $y <= 3) {
        $result = 'Tuvalu';
    } elseif ($x >= 0 && $x <= 2 && $y >= 6 && $y <= 8) {
        $result = 'Tonga';
    } elseif ($x >= 5 && $x <= 7 && $y >= 3 && $y <= 6) {
        $result = 'Samoa';
    } elseif ($x >= 4 && $x <= 9 && $y >= 7 && $y <= 8) {
        $result = 'Cook';
    } elseif ($x >= 8 && $x <= 9 && $y >= 0 && $y <= 1) {
        $result = 'Tokelau';
    } else {
        $result = 'On the bottom of the ocean';
    }

    return $result;
}