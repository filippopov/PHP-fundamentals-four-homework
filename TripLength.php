<?php
$numbers = trim(fgets(STDIN));
$numbersArr = explode(', ', $numbers);
//
//$firstPoint = [$numbersArr[0], $numbersArr[1]];
//$secondPoint = [$numbersArr[2], $numbersArr[3]];
//$thirdPoint = [$numbersArr[4], $numbersArr[5]];
//
//
//$findDistanceFirstAndSecondPoint = findDistance($numbersArr[0], $numbersArr[1], $numbersArr[2], $numbersArr[3]);
//echo $findDistanceFirstAndSecondPoint . PHP_EOL;
//$findDistanceFirstAndThirdPoint = findDistance($numbersArr[0], $numbersArr[1], $numbersArr[4], $numbersArr[5]);
//echo $findDistanceFirstAndThirdPoint . PHP_EOL;
//$findDistanceSecondAndThirdPoint = findDistance($numbersArr[2], $numbersArr[3], $numbersArr[4], $numbersArr[5]);
//echo $findDistanceSecondAndThirdPoint . PHP_EOL;

$resultArray = [
    'first' => [
        'distance' => findDistance($numbersArr[0], $numbersArr[1], $numbersArr[2], $numbersArr[3]),
        'position' => 1
    ],
    'second' => [
        'distance' => findDistance($numbersArr[2], $numbersArr[3], $numbersArr[4], $numbersArr[5]),
        'position' => 2
    ],
    'third' => [
        'distance' => findDistance($numbersArr[0], $numbersArr[1], $numbersArr[4], $numbersArr[5]),
        'position' => 3
    ],

];

usort($resultArray, function ($a, $b) {
    $temPos = $a['distance'] > $b['distance'];
    return $temPos;
});
$end = ($resultArray[0]['distance'] + $resultArray[1]['distance']);
if ($resultArray[0]['position'] > $resultArray[2]['position'] && ($resultArray[0]['distance'] + $resultArray[1]['distance']) == ($resultArray[1]['distance'] + $resultArray[2]['distance'])) {
    $temp = $resultArray[0];
    $resultArray[0] = $resultArray[2];
    $resultArray[2] = $temp;
}

$result = $resultArray[0]['position'] .'->' . $resultArray[1]['position'] .'->' . $resultArray[2]['position'] .': ' . $end;
echo $result;

function findDistance($x1, $y1, $x2, $y2) {
    $distance = sqrt((($x2 - $x1) * ($x2 - $x1)) + (($y2 - $y1) * ($y2 - $y1)));
    return $distance;
}
?>