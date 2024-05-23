<?php

//vjezba1

$a = 5;
$b = 10;
$c = 15;

if ( ( $b > $a && $b < $c ) || ( $b < $a && $b > $c ) ) {
    echo "b je izmedju a i c";
} else {
    echo "b nije izmedju a i c";
}

echo '<br>';

//vjezba2

date_default_timezone_set('Europe/Zagreb');

//date('D') returns one of MonTueWedThuFriSatSun

switch (date('D')) {
    case 'Mon' :
        echo "Danas je ponedjeljak";
        break;
    case 'Tue' :
        echo "Danas je utorak";
        break;
    case 'Wed' :
        echo 'Danas je srijeda';
        break;
    case 'Thu' :
        echo 'Danas je cetvrtak';
        break;
    case 'Fri' :
        echo 'Danas je petak';
        break;
    case 'Sat' : 
        echo 'Danas je subota';
        break;
    case 'Sun' :
        echo 'Danas je nedjelja';
        break;
    default:
        echo 'Greska';
        break;
}
