<?php
$speed = (int) trim(fgets(STDIN));
$zone = trim(fgets(STDIN));


$getSpeedZone = getLimit($zone);

echo getResult($getSpeedZone, $speed);

function getResult ($getSpeedZone, $speed) {
    $difference = $speed - $getSpeedZone;
    $result = '';
    if ($difference < 0) {
        $result = '';
    } elseif ($difference >= 0 && $difference < 20) {
        $result = 'speeding';
    } elseif ($difference >= 20 && $difference <= 40) {
        $result = 'excessive speeding';
    } else {
        $result = 'reckless driving';
    }

    return $result;
}



function getLimit($zone) {
    switch ($zone) {
        case 'motorway':
            $speedLimit = 130;
            break;
        case 'interstate' :
            $speedLimit = 90;
            break;
        case 'city':
            $speedLimit = 50;
            break;
        case 'residential' :
            $speedLimit = 20;
            break;
        default :
            echo 'Not a Valid Input';
            $speedLimit = 1000;
            break;
    }

    return $speedLimit;
}

?>