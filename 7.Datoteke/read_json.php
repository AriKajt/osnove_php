<?php

$books = file_get_contents('podaci/knjige.json'); // da nije odmah u ovom folderu bi stavili punu putanju
//tipa C:\..., (testirat jel radi /, \, ili \\ because normally \ is to ignore the next char) or a website/online file

//ili s potpunom putanjom do toga gdje smo:
//$books = file_get_contents(__DIR__ . '/podaci/knjige.json'); 

echo $books;die();

$books = json_decode($books, true); // pretvori json u php array (true) ili objekt, encode bi pretvorio php array u json string

var_dump($books);
