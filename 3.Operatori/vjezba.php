<?php

$a = 5;
$b = -16;
$c = "rijec";
$d = "16";

echo $a+$b;//-11
echo '<br>';

echo $a-$b;//21
echo '<br>';

echo $a*$b;//-80
echo '<br>';

echo $b/$a;//-3.2
echo '<br>';

echo $b%$a;//-1
echo '<br>';

$f = $c.$d;
echo $f; //rijec16
echo '<br>';

echo $a += $b; //-11 (i to je sad $a)
echo '<br>';

var_dump( $a > $b ); //true; -11 > -16
echo '<br>';

echo ++$a; //-10
echo '<br>';

echo --$b; //-17
