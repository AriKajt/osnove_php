<?php

$a = 15;
$b = 10;

echo $a += $b; // isto kao $a=$a+$b, analogno i za ostale
echo '<br>';

echo $a -= $b;
echo '<br>';

echo $a *= $b;
echo '<br>';

echo $a /= $b;
echo '<br>';

echo $a %= $b;
echo '<br>';

echo $a .= $b; // konkatenacija, tj. $a = $a . $b, see example of it's usefulness below, but prob other examples in databases make more sense
echo '<br>';

$ime = 'Ari';
$prezime = 'K';
//$ime += $prezime; greska jer + radi s brojevima, a . je za stringove
$ime .= " ".$prezime; // isto kao $ime = $ime.$prezime;
echo $ime;
echo '<br>';

var_dump($a.$b); // spoji ta 2 broja kao string "510"."10"
echo '<br>';
$c = $a.$b;
var_dump($c); // isto kao iznad
echo '<br>';

$c += 5;
echo $c; // sad ga je opet zbrojilo s 5 kao broj;
echo '<br>';