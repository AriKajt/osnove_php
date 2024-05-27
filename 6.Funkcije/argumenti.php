<?php

function addNumbers(int $a, int $b, bool $printResult = false): ?int // ?int znaci da mora vratiti null or int
{
    $sum = $a + $b;
    if ($printResult) {
        echo "The result is: $sum";
        return null; // da ne vrati sumu nego null u slucaju kad samo ispisuje
    }
    return $sum;
}

$sum = addNumbers(3, 4, false);
var_dump($sum);
echo '<br>';

$sum = addNumbers(3, 4, true);
var_dump($sum);
echo '<br>';

$sum = addNumbers(3,4); // vrati 7
var_dump($sum);
