<?php
$input = trim(fgets(STDIN));

$inputArr = explode(', ', $input);

for ($i = 0; $i < count($inputArr); $i+=3) {
    $x = $inputArr[$i];
    $y = $inputArr[$i + 1];
    $z = $inputArr[$i + 2];

    if (isVolume($x, $y, $z) === true) {
        echo 'inside';
    } else {
        echo 'outside';
    }

    if (! (count($inputArr) - 1 == $i)) {
        echo PHP_EOL;
    }
}

function isVolume ($x, $y, $z) {
    $x1 = 10;
    $x2 = 50;
    $y1 = 20;
    $y2 = 80;
    $z1 = 15;
    $z2 = 50;

    if ($x >= $x1 && $x <= $x2) {
        if ($y >= $y1 && $y <= $y2) {
            if ($z >= $z1 && $z <= $z2) {
                return true;
            }
        }
    }

    return false;
}

?>