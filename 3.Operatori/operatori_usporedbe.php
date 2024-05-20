<?php

$a = 10;
$b = 5;
$c = '10';

var_dump($a > $b); //true
echo '<br>';

var_dump($a < $b); //false
echo '<br>';

var_dump($a == $c); //true, ista vrijednost
echo '<br>';

var_dump($a === $c); //false, nisu identicni (vrijednost i tip podatka)
echo '<br>';

var_dump($a != $c); //false, nisu razliciti; moze i <> umjesto !=; note, postoji i !==, checking if they're identical
echo '<br>';

var_dump($a !== $c); //true, nisu identicni; !== checks if they're identical
echo '<br>';

var_dump($a >= $c); //true, posto su jednaki, onda je i vece ili jednako true
echo '<br>';


