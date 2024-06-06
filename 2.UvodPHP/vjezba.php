<?php
$cijeli = -89;
$realni = -3.6;
$tekst = 'ovo je string';
$logika = false;

echo 'Cijeli broj je ' . $cijeli . ', realni je ' . $realni . ', tekst je: "' . $tekst . '", a logicka vrijednost je ' . $logika . '.';

const PI = 3.14;
const FREEZE = 4; // stupnjeva celzijuvih
const OSOBA = "human person";

echo '<br>';
echo 'The value of pi is ' . PI . ', the freezing point for water is ' . FREEZE . ' degrees Celsius' . ', and an osoba is a ' . OSOBA . '.';

$a = 13;
$b = &$a;
echo '<br>';
echo 'Vrijednost varijable b je ' . $b . '.';

$a = 9153;
echo ' Sada je vrijednost varijable b ' . $b . '.';

echo '<br>';
var_dump($cijeli);

echo '<br>';
var_dump($realni);

echo '<br>';
var_dump($tekst);

echo '<br>';
var_dump($logika);

echo '<br>';
echo $logika ? 'DA' : 'NE';