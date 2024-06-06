<?php
//napravit fn koja prima ime, prezime (pERo,peRiC) i kao rezultat vraca P. Peric

function formatName(string $name): string {
    $nameArray = explode(',', $name);

    $name = $nameArray[0];
    $surname = $nameArray[1];

    $surname = ucfirst(mb_strtolower($surname));

    $firstLetter = substr($name, 0, 1);
    $firstLetter = mb_strtoupper($firstLetter);


    return "$firstLetter. $surname";

    prettyPrint($nameArray);
}

$formattedName = formatName('pERo,peRiĆ');
echo $formattedName;

function prettyPrint(array $print) {
    echo "<pre>";
    print_r($print);
    echo "</pre>";
}