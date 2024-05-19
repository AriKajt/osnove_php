<?php
// imena varijabli su osjetljiva na velika i mala slova
$ime = 'alex';
$Ime = 'Alex';

echo $ime;
echo '<br>';
echo $Ime;

// primjer neispravne definicije imena varijable
// $123ime;
// $-ime;
// $ ime;

// Nakon zanaka $ ime varijable moze zapoceti sa slovom ili _ (donja crta)
// primjer ispravne definicije imena varijable
$_ime;
$ime123;
$ime_prezime_i_adresa; // -> snake case
$imePrezimeIAdresa; // Camel Case

// KONSTANTE
// treba ih pisati velikim slovima
define("PI", 3.141592653); // -> stariji nacin definiranja konstanti
const OIB = '12345678901'; // -> noviji nacin

echo '<br>';
echo PI;
echo '<br>';
echo 'Vas OIB je ' . OIB . ' a ime je ' . $Ime . '.';