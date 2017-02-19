<?php
$coordinates = trim(fgets(STDIN));

$coordinatesArray = explode(', ', $coordinates);

$distance1 = findDistance((int) $coordinatesArray[0],(int) $coordinatesArray[1], 0, 0);
returnResult($distance1, $coordinatesArray[0], $coordinatesArray[1], 0, 0);
echo PHP_EOL;
$distance2 = findDistance((int) $coordinatesArray[2],(int) $coordinatesArray[3], 0, 0);
returnResult($distance2, $coordinatesArray[2], $coordinatesArray[3], 0, 0);
echo PHP_EOL;
$distance3 = findDistance($coordinatesArray[0], $coordinatesArray[1], $coordinatesArray[2], $coordinatesArray[3]);
returnResult($distance3, $coordinatesArray[0], $coordinatesArray[1], $coordinatesArray[2], $coordinatesArray[3]);


function returnResult($distance, $x1, $x2, $y1, $y2) {
    if ((int) $distance == $distance) {
        echo "{{$x1}}, {{$x2}} to {{$y1}}, {{$y2}} is valid";
    } else {
        echo "{{$x1}}, {{$x2}} to {{$y1}}, {{$y2}} is invalid";
    }
}

function findDistance($x1, $y1, $x2, $y2) {
    $distance = sqrt((($x2 - $x1) * ($x2 - $x1)) + (($y2 - $y1) * ($y2 - $y1)));
    return $distance;
}
?>