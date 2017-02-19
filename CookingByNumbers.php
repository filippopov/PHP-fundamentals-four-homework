<?php
$number = trim(fgets(STDIN));
$commands = trim(fgets(STDIN));

$commandsArray = explode(', ', $commands);

for ($i = 0; $i < count($commandsArray); $i++) {
    $number = executerCommand($commandsArray[$i], $number);
    echo $number;
    if (! (count($commandsArray) - 1 == $i)) {
        echo PHP_EOL;
    }
}


function executerCommand($command, $number) {
    switch ($command) {
        case 'chop':
            return $number / 2;
        case 'dice':
            return sqrt($number);
        case 'spice':
            return ++$number;
        case 'bake':
            return $number * 3;
        case 'fillet':
            return $number * 0.8;
        default:
            return false;
    }
}

?>