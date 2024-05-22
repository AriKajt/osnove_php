<?php

// vjezba 1

$i=1;
while ($i <= 10) {
    echo $i.' ';
    $i++;
}

echo '<br>';

for ($j=1; $j<=50; $j++) {
    echo ($j*2).' ';
}

echo '<br>';

// druga varijanta
for ($j=1; $j<=100; $j++) {
    if ($j%2==0) {
        echo $j.' ';
    }
}

echo '<br>';

//vjezba2

$names = ['William', 'Catherine', 'Michael', 'Nerys', 'Data'];

foreach ($names as $kljuc => $ime) {
    echo $kljuc.' -> '.$ime."\n";
}