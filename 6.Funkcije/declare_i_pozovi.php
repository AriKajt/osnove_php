<?php

//fn w/o parameters

function writeAlex() 
{
    echo "Hello Alex! <br>";
}

//fn w parameters

function writeName(string $name): void // da naznacimo da ne vraca nista
{
    echo "Hello $name! <br>";
}

writeAlex();
writeName('Ari');