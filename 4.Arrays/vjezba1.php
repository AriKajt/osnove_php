<?php

$primeNumbers = [2,3,5,7,11];

$ima_treceg = isset($primeNumbers[2]);
var_dump($ima_treceg); // true, jer je treci declared and not null, odnosno na indexu 2 array ima vrijednost;
echo '<br>';
if ($ima_treceg) {
    echo "treci element je $primeNumbers[2]";
} else {
   echo "ne postoji treci element u nizu";
}

$primeNumbers[] = 13;

echo '<br>';
echo count($primeNumbers);

echo '<pre>';
print_r($primeNumbers);
echo '</pre>'; 

rsort($primeNumbers);

echo '<pre>';
print_r($primeNumbers);
echo '</pre>'; 