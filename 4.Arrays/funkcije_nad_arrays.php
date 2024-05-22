<?php

$empty_array = [];
$nista;
$names = ['Alex', 'Marko', 'Filip', 'Marko'];
$names2 = ['Ivana', 'Luka'];

// funkcije empty i isset

$is_variable_empty = empty($empty_array);
var_dump($is_variable_empty); //bool, true

$is_variable_empty = empty($names); // tu smo mi dodijelili vrijednost koju vrati funkcija u varijablu
var_dump($is_variable_empty); //bool, false

echo '<br>';
var_dump(isset($welkrjcj)); //false, nije postavljena varijabla

echo '<br>';
var_dump(isset($names)); //true

echo '<br>';
var_dump(isset($empty_array)); //true, jer je postavljena s praznim nizom, nije NULL

echo '<br>';
var_dump(isset($nista)); //false, jer je NULL

echo '<br>';

//Trazenje elemenata, in_array i array_search:

echo '<br>';
var_dump(in_array('Alex', $names)); // true, postoji Alex u arrayu
var_dump(in_array('alex', $names)); // false, ne postoji alex u arrayu

echo '<br>';
var_dump(array_search('Alex', $names)); // 0, jer je Alex u arrayu na indexu 0;
var_dump(array_search('alex', $names)); // false, ne postoji alex u arrayu
var_dump(array_search('Filip', $names)); // 2, jer je Filip u arrayu na indexu 2;
var_dump(array_search('Marko', $names)); // 1, jer je Marko u arrayu po prvi putna indexu 1;

// Sortiranje

asort($names); //sortira isto kao ovaj ispod, al zadrzi kljuceve/indekse kao u originalu umjesto da ih reset

echo '<pre>';
print_r($names);
echo '</pre>'; 

sort($names); // paziti, jer automatski sortira $names, tj. promijeni vrijednost te varijable, sama funkcija ne vraca nista - time se gube keys/indeksi, odnosno resetiraju se da opet idu od 0, 1, 2 nakon sortiranja

echo '<pre>';
print_r($names);
echo '</pre>'; 

rsort($names); // reverse sort, isto, samo descending umjesto ascending


echo '<pre>';
print_r($names);
echo '</pre>'; 

// na php.net ima u documentation drugih sorting opcija objasnjeno, usort, ksort, itd.

//push, pop, shift funkcije
array_push($names, 'Mario'); // dodaje 'Mario' na kraj $names
$zadnje_ime = array_pop($names); //makne i vraca zadnji zapis u $names (vraca null ako je array prazan)
echo $zadnje_ime; // Mario
echo '<br>';

echo '<pre>';
print_r($names); // nema vise Mario u $names
echo '</pre>'; 
echo '<br>';

array_shift($names); // vrati prvi element u arrayu, makne ga, i sifta kljuceve da opet krecu od 0

echo '<pre>';
print_r($names); // nema vise Mario u $names
echo '</pre>'; 
echo '<br>';


// array_keys, array_values, count, merge
var_dump(array_keys($names)); //vraca kljuceve
echo '<br>';

var_dump(array_values($names)); // vraca vrijednosti
echo '<br>';

var_dump(count($names)); // vraca duljinu arraya, odn koliko ima elemenata
echo '<br>';

$merged = array_merge($names, $names2);
var_dump($merged);
echo '<br>';