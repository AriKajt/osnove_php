<?php
//Multidimensional array/niz

$fruits = [
    ['ime' => 'Banana', 'cijena' => 1.49, 'klasa' => 'I'],
    ['ime' => 'Jagoda', 'cijena' => 3.49, 'klasa' => 'I'],
    ['ime' => 'Lubenica', 'cijena' => 0.99, 'klasa' => 
        ['I', 'II', 'III'] // 3-dim array
    ],
];

echo '<pre>';
print_r($fruits);
echo '</pre>'; 

echo $fruits[0]['ime'];

$fruits = [
    'banana'=>['ime' => 'Banana Bonita', 'cijena' => 1.49, 'klasa' => 'I'],
    'jagoda'=>['ime' => 'Jagodica Bobica', 'cijena' => 3.49, 'klasa' => 'I'],
    'lubenica'=>['ime' => 'Slatka Grcka Lubenica', 'cijena' => 0.99, 'klasa' => 
        ['I', 'II', 'III'] // 3-dim array
    ],
];

echo $fruits['banana']['ime'];



//my test

$fNames = ['Banana', 'Jabuka', 'Grozdje'];
$fPrices = [1.49, 2.99, 4.99];
$fClasses = ['I', 'II', 'II'];

$fruits2 = [$fNames, $fPrices, $fClasses]; // not sure what i'd want with this, cant think of where it would be useful

echo '<pre>';
print_r($fruits2);
echo '</pre>'; 

echo $fNames[2].', '.$fPrices[2].' EUR, '.$fClasses[2].' klasa<br>';
echo $fNames[0].', '.$fPrices[0].' EUR, '.$fClasses[0].' klasa<br>';
//this would be good to put into a for loop, for i = 0 to count-1, in place of 0 in the line above, it'd be i
