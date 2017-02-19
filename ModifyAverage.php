<?php
$numbers = trim(fgets(STDIN));

$checkValue = isAverageNumbersGreaterThanFive($numbers);

while (! $checkValue) {
    $checkValue = isAverageNumbersGreaterThanFive($numbers);
    if (! $checkValue) {
        $numbers .= '9';
    }
}
echo $numbers;

function isAverageNumbersGreaterThanFive($numbers) {
    $counter = 0;
    $numbersSum = 0;
    for ($i = 0; $i < strlen($numbers); $i++) {
        $counter++;
        $numbersSum += $numbers[$i];
    }

    return ($numbersSum / $counter) > 5;
}

?>