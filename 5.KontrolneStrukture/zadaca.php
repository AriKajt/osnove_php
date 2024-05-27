<?php

// 1. Koristeći petlju while, ispišite prvih deset brojeva.

$i=1;
while ($i <= 10) {
    echo $i.' ';
    $i++;
}

echo '<br><br>';

// 2. Koristeći petlju for, ispišite visekratnike broja 3 do 100.

for ($j=1; $j<=33; $j++) {
    echo ($j*3).' ';
}

echo '<br>';

// drugi nacin:

for ($j=1; $j<=100; $j++) {
    if ($j%3==0) {
        echo "$j ";
    }
}

echo '<br>';

// treci nacin:

for ($j=3; $j<=100; $j+=3) {
    echo "$j ";
}

echo '<br><br>';

// 3. Tablica množenja: Napiši PHP program koji koristi petlje za generiranje tablice množenja od 1 do 10.
//     Primjer:
//         1 x 1 = 1
//         1 x 2 = 2
//         ...
//         10 x 10 = 100
for ($i=1; $i <= 10; $i++) { 
    for ($j=1; $j <= 10; $j++) { 
        echo "$i x $j = ".$i*$j."<br>";
    }
}

echo '<br><br>';

//4. Definirajte varijablu $names i dodijelite joj niz koji sadrži pet imena.
//Koristeći petlju foreach, iz niza ispišite ključeve i pripadajuće im vrijednosti. 

$names = ['William', 'Catherine', 'Michael', 'Nerys', 'Data'];

foreach ($names as $kljuc => $ime) {
    echo $kljuc.' -> '.$ime."\n";
}

echo '<br><br>';

//6. Ispisati imena iz niza $names spojene sa zarezom i razmakom tako da iza zadnjeg imena ne budu zarez i razmak
//Primjer: Harry, Ron, Hermione, Snape


$last = $names[count($names)-1];

foreach ($names as $name) { //za svako ime iz niza imena
    if ($name === $last) { //osim zadnjeg
        continue;
    }
    echo "$name, "; // ispisi ime
}

echo $last;

echo '<br><br>';

//7. Definirajte varijable a, b i c, te im istim redoslijedom dodijelite vrijednosti 5,10 i 15.
// Koristeći uvjetovani tip kontrolne strukture provjerite je li vrijednost b između a i c.
// Ako je uvjet istinit, ispišite da je b između a i c, a ako je uvjet lažan ispišite da nije.
// Kod mora raditi i ako zamijenimo vrijednosti u varijablama a i c. 

$a = 5;
$b = 10;
$c = 15;

if ( ( $b > $a && $b < $c ) || ( $b < $a && $b > $c ) ) {
    echo "b ($b) je izmedju a ($a) i c ($c)";
} else {
    echo "b ($b) nije izmedju a ($a) i c ($c)";
}

echo '<br><br>';

//8. Koristeći uvjetovani tip kontrolne strukture switch ili match ispišite koji je trenutno dan u tjednu.
//Za ispravno izvršenu vježbu koristite PHP funkciju date(). Nazivi dana moraju biti na hrvatskom jeziku.

date_default_timezone_set('Europe/Zagreb');

//date('D') returns one of MonTueWedThuFriSatSun
//date('N') returns days of the week as string 1-7
//date('l') returns days as Monday, Tuesday, ...


//sa switch
switch (date('N')) {
    case 1 :
        echo "Danas je ponedjeljak";
        break;
    case 2 :
        echo "Danas je utorak";
        break;
    case 3 :
        echo 'Danas je srijeda';
        break;
    case 4 :
        echo 'Danas je cetvrtak';
        break;
    case 5 :
        echo 'Danas je petak';
        break;
    case 6 : 
        echo 'Danas je subota';
        break;
    case 7 :
        echo 'Danas je nedjelja';
        break;
    default:
        echo 'Greska pri odredjivanju dana';
        break;
}
echo '<br>';

//sa match

$danas = match (date('N')) {
     '1' => "Danas je ponedjeljak",
     '2' => "Danas je utorak",
     '3' => "Danas je srijeda",
     '4' => "Danas je cetvrtak",
     '5' => "Danas je petak",
     '6' => "Danas je subota",
     '7' => "Danas je nedjelja",
     default => 'Greska pri odredjivanju dana'
};
echo $danas;
