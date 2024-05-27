<?php

function echoIt($string)
{
    echo $string;
}

$fn = 'echoIt';
$fn('test'); //pozove echoIt, to su tzv. call-back functions