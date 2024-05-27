<?php

$name = "Mirko";

function variableScope() 
{
    $name = 'Svemirko'; // $name ce bit obrisana na kraju fn unless we say "static $name"
    //then it would have the last value it has inside the function even after leaving the function
    //but that's never used, so not necessary to know it in practice

    echo $name;
    //global $name;// bez ovog globalna var nije dostupna unutar fn, ovako ju definiramo da bude dostupna
    //ni to se ne koristi
    //echo $name;
}

echo $name; // Mirko
variableScope(); // Svemirko