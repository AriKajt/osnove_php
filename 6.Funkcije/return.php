<?php

$a = 5;
$b = 6;

echo addTwoNumbers($a, $b); // moze se pozvati funkcija koja se kasnije tek definira
//note: varijable moraju prije biti definirane, ne moze nakon sto se pozivanja funkcija u kojoj ih koristimo

function addTwoNumbers(int $a, int $b): int // int na kraju osigurava da se vraca int ili greska
//ispravnije i brze je da se tipizira povratna vrijednost
{
    return $a+$b; //da smo stavili '$a+$b', javio bi gresku jer je to string
}

echo addTwoNumbers(8,16);
$zbroj = addTwoNumbers(2,92);
var_dump($zbroj);

