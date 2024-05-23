<?php

// vjezba 1

$i=1;
while ($i <= 10) {
    echo $i.' ';
    $i++;
}

echo '<br>';

// visekratnici od 3 (umjesto parni brojevi):

for ($j=1; $j<=33; $j++) {
    echo ($j*3).' ';
}

echo '<br>';

// drugi nacin:

for ($j=1; $j<=100; $j++) {
    if ($j%3==0) {
        echo $j.' ';
    }
}

echo '<br>';

//vjezba2

$names = ['William', 'Catherine', 'Michael', 'Nerys', 'Data'];

foreach ($names as $kljuc => $ime) {
    echo $kljuc.' -> '.$ime."\n";
}