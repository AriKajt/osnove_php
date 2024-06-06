<?php

// inicijalizacija praznog niza
$empty1 = []; // cesce koristen, kraci
$empty2 = array(); // stariji nacin, i dalje neki koriste

// inic. arraya (liste, indexed array) s podacima
$names1 = ['Alex','Filip','Nikolina'];
$names2 = array('Alex', 'Filip', 'Tena'); //isto rade oba nacina, see below

// echo $names1; daje upozorenje i onda izbaci "Array": Warning: Array to string conversion in /opt/homebrew/var/www/osnove_php/4.Arrays/inicijalizacija.php on line 11
echo '<pre>';
print_r($names1); // Array ( [0] => Alex [1] => Filip [2] => Nikolina ) 
echo '</pre>'; // ovaj <pre> </pre> tag ga ispise ljepse u redovima

echo $names1[1]; // Filip

echo '<pre>';
print_r($names2); // Array ( [0] => Alex [1] => Filip [2] => Tena ) 
echo '</pre>'; 

echo '<br>';

// inicijalizacija niza (mapa) s podacima -> Associative array
$status = ['name' => 'James Potter'];

echo '<pre>';
print_r($status);
echo '</pre>'; 

echo '<br>';

$status = ['name' => 'James Potter',
'status' => 'dead'
];

echo '<pre>';
print_r($status);
echo '</pre>'; 

echo '<br>';

$fruits = array(
    'name' => 'Banana',
    'cijena' => 1.49.' EUR',
    'klasa' => 'Prva',
    //'name' => 'Jagoda', // ovo ce prepisati bananu, odnosno 'name' ce postati jagoda umjesto banana
);

echo '<pre>';
print_r($fruits);
echo '</pre>'; 

var_dump($fruits);
