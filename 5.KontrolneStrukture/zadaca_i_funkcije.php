<?php

//FUNKCIJE - ova ispisuje break line repeat puta
function br(int $repeat = 1) //inace bi to nazvali u skladu s onim sta radi, npr printBreakRow(), da i drugi znaju sta radi
{
    //kad je samo $repeat onda ne mozes zvati br(); vec mora biti br(1);, a ovako je default 1 i moze br();
    //int smo dodali da ne dopustimo da se koristi sa stringovima floatovima i sl., tj. da baci gresku

    /*for ($i=0; $i < $repeat; $i++) { 
        echo '<br>';
    }*/

    echo str_repeat('<br>', $repeat);
    //u praksi bi cesce koristili tipa "return '<br'>", jer zelimo nesto raditi s tim sto dobijemo iz funkcije, 
    //a sad fkt samo skracujemo liniju koda pa je ovo zgodno s echo vec u funkciji, to cemo rjedje raditi
}

// 1. Koristeći petlju while, ispišite prvih deset brojeva.

$i=1;
while ($i <= 10) {
    echo $i.' ';
    $i++;
}

//echo '<br><br>';
br('2'); // moze i ovako jer ce pretvoriti '2' string u 2 int, ali da je 'welkjr' bacio bi gresku

// 2. Koristeći petlju for, ispišite visekratnike broja 3 do 100.

for ($j=1; $j<=33; $j++) {
    echo ($j*3).' ';
}

br();
//echo '<br>';

// drugi nacin:

for ($j=1; $j<=100; $j++) {
    if ($j%3==0) {
        echo "$j ";
    }
}

br();
//echo '<br>';

// treci nacin:

for ($j=3; $j<=100; $j+=3) {
    echo "$j ";
}

br(2);
//echo '<br><br>';

// 3. Tablica množenja: Napiši PHP program koji koristi petlje za generiranje tablice množenja od 1 do 10.
//     Primjer:
//         1 x 1 = 1
//         1 x 2 = 2
//         ...
//         10 x 10 = 100
for ($i=1; $i <= 10; $i++) { 
    for ($j=1; $j <= 10; $j++) { 
        echo "$i x $j = ".$i*$j;//."<br>";
        br();
    }
    //echo '<br>';
    br();
}

br(2);
//echo '<br><br>';

//4. Definirajte varijablu $names i dodijelite joj niz koji sadrži pet imena.
//Koristeći petlju foreach, iz niza ispišite ključeve i pripadajuće im vrijednosti. 

$names = ['William', 'Catherine', 'Michael', 'Nerys', 'Data'];

foreach ($names as $kljuc => $ime) {
    echo $kljuc.' -> '.$ime."\n";
}

//echo '<br><br>';
br(2);

//6. Ispisati imena iz niza $names spojene sa zarezom i razmakom tako da iza zadnjeg imena ne budu zarez i razmak
//Primjer: Harry, Ron, Hermione, Snape

/*
$last = $names[count($names)-1]; // ovo ne koristimo jer vidi gresku u comment ispod

foreach ($names as $name) { //za svako ime iz niza imena ispisi ime  
    if ($name === $last) { //osim zadnjeg, ali pazi, ako imas 2 ista imena, onda ce ga preskociti
        continue;
    }
    echo "$name, ";
}

echo $last;
*/

$last_key = count($names)-1; // ovo je tocnije, tj. izbjeci ce potencijalnu gresku, see note below

foreach ($names as $key => $name) { //za svako ime iz niza imena ispisi ime, a zadnjem ne stavljaj zarez
    if ($last_key == $key){
        echo $name;
    } else {
        echo "$name, ";
    }
}
br(2);

//druga varijanta je sa implode() funkcijom: 
echo implode(', ', $names); 

br(2);
//echo '<br><br>';

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

br(2);
//echo '<br><br>';

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
//echo '<br>';
br();

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
