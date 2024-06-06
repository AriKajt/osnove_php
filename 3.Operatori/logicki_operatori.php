<?php

$a = 10;
$b = 0;

var_dump(!$a);//false; returns boolean of not a
var_dump($a&&$b);//false; also boolean, of a and b
var_dump($a||$b);//true; also boolean, of a or b

//type casting (promjena tipova podataka)
(string)$a; //stavi da je $a string: "10";
var_dump((bool)$b); // false; stavi da je $b boolean i vrati onda to pomocu var_dump
var_dump((bool)$a); // true; moze i boolval($a), ista stvar kao (bool)$a

// && i ||
var_dump( ($a > $b) && ($b == $a) && ($b <= $a) ); //false (prvi je true, drugi je false, treci je true so false since it isn't that all/both sides of && are true)
var_dump( ($a > $b) || ($b == $a) || ($b <= $a) ); //true (prvi je true, drugi je false, treci je true so true since at least 1 is true)

//Hierarchy / presedance / prednost pri izvodjenju izraza:
// https://www.tutorialspoint.com/php-operator-precedence

// ()
// !
// * /
// %
// + -
// < > <= >=
// != !==
// &&
// ||

// vrijednosti koje vracaju FALSE
$var = false;
$var = 0;
$var = 0.0;
$var = '0';
$var = '';
$var = []; //empty array
$var = NULL;

//primjer jednostavnog if statementa
if (!null) {
    echo 'Izraz je istinit.';
}