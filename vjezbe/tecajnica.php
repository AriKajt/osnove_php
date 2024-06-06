<?php
function prettyPrint(array $print) {
    echo "<pre>";
    print_r($print);
    echo "</pre>";
}


const URL = 'https://www.hnb.hr/tecajn-eur/htecajn.htm';

$lista = file(URL);

array_shift($lista);

prettyPrint($lista);

foreach ($lista as $valutniRedak){
    if (str_contains($valutniRedak, 'USD') ){
        break;
    }
}
echo $valutniRedak;

$usdValues = explode('       ', $valutniRedak);

prettyPrint($usdValues);

$usdSrednjiTecaj = $usdValues[2];

?>