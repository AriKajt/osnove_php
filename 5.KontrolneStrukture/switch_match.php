<?php

//switch case

$variable = 'ut';

switch ($variable) {
    case 'pon':
       echo "Ponedjeljak";
        break;
    case 'uto':
        echo "Utorak";
        break;
    case 'sri':
        echo "Srijeda";
        break;
    case 'cet':
       echo "Cetvrtak";
        break;
    case 'pet':
        echo "Petak";
        break;
    default:
        echo 'Ne znam koji je dan';
        break;
}

echo '<br><br>';

switch ($variable) {
    case 'pon':
    case 'uto':
    case 'sri':
        echo "Prvi dio tjedna";
        break;
    case 'cet':
    case 'pet':
        echo "Drugi dio tjedna";
        break;
    default:
        echo 'Ne znam koji je dan';
        break;
}

echo '<br><br>';

//match

//umjesto $dan moze i odmah echo, bez dodatne varijable
$dan = match ($variable) {
     'pon' => 'Ponedjeljak',
     'ut' => 'Utorak',
     'sri' => 'Srijeda',
     default => 'Ne znam koji je dan'
};
echo $dan;
//cesto se koristi za umjesto 'Ponedjeljak' i sl, da je tu neka funkcija, objet, path do nekog file-a i sl. 

echo '<br><br>';