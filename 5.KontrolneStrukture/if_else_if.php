<?php
//Uvjetne kontrolne struckture (conditionals - if/elseif/else, switch-case, match)

$primeNumbers = [2, 3, 5, 7, 11];

$ima_treceg = isset($primeNumbers[2]);
var_dump($ima_treceg); // true, jer je treci declared and not null, odnosno na indexu 2 array ima vrijednost;
echo '<br>';

//ako postoji index 2, ispisi postoji
//pseudo-kod:
//ako je (isset($primeNumbers[2])), ispisi 'postoji'
if ($ima_treceg) {
    echo "treci element je $primeNumbers[2]";
} else {
    echo "ne postoji treci element u nizu";
}
//there are also truthy and falsey values - e.g. '', '0' are falsey (all but false or 0), and all but those that are false and true and 1 are "truthy" values
//so we could theoretically go without "isset" in this specific case because it will return a truthy value - something other than 0 or a falsey value,
//though careful if the value in the array there is actually 0 - it's still set, but the value 0 will return false. 
//Also if you ask about $primeNumbers[9], that will give an error without isset, so def.need isset generally
echo '<br>';

// moze i varijanta sa ovom kontrolom:
echo isset($primeNumbers[2]) ? "postoji" : "ne postoji";
echo '<br>';

//if-else-if

$postotakIspita = -55;

if ($postotakIspita >= 80) {
    echo 'Ocjena je 5';
} elseif ($postotakIspita >= 70) {
    echo 'Ocjena je 4';
} elseif ($postotakIspita >= 60) {
    echo 'Ocjena je 3';
} elseif ($postotakIspita >= 50) {
    echo 'Ocjena je 2';
} elseif ($postotakIspita < 50 && $postotakIspita >= 0) {
    echo 'Ocjena je 1';
} else {
    echo 'Nismo mogli izracunati ocjenu';
}
echo '<br>';