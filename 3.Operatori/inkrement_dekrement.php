<?php
$a = 10;
$a++; // doda mu 1
echo $a; //11
echo '<br>';

$b=22;
$b--; // oduzme mu 1
echo $b; //21
echo '<br>';

echo $b--; // ispise 21, a onda od $b oduzme 1, i $b je 20 tek NAKON ispisa
echo '<br>';
echo --$b; // 19; tu ce prvo oduzeti 1 od $b, pa je $b sad 19, pa to ispise
