<?php

$names = ['Alex', 'Filip', 'Marko'];
//$names[5] = 'Robert'; // dodaje ga na index 5, ali nema smisla to raditi, stvaramo prazna mjesta 3 i 4
$names[] = 'Angelo'; // dodaje ga na kraj arraya

echo '<pre>';
print_r($names);
echo '</pre>'; 

$fruits = array(
    'ime' => 'Banana',
    'cijena' => 1.49.' EUR',
    'klasa' => 'Prva',
);

$fruits['masa'] = 2;
$fruits['klasa'] = 'Druga';

echo '<pre>';
print_r($fruits);
echo '</pre>'; 

//Uklanjanje elementa iz niza
unset($fruits['ime']);

echo '<pre>';
print_r($fruits);
echo '</pre>'; 
