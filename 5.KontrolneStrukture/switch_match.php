<?php

//switch case

$variable = date('N');

switch ($variable) {
    case 1:
       echo "Ponedjeljak";
        break;
    case 2:
        echo "Utorak";
        break;
    case 3:
        echo "Srijeda";
        break;
    case 4:
       echo "Cetvrtak";
        break;
    case 5:
        echo "Petak";
        break;
    default:
        echo 'Ne znam koji je dan';
        break;
}

echo '<br><br>';

switch ($variable) {
    case 1:
    case 2:
    case 3:
        echo "Prvi dio tjedna";
        break;
    case 4:
    case 5:
        echo "Drugi dio tjedna";
        break;
    default:
        echo 'Ne znam koji je dan';
        break;
}

echo '<br><br>';

//match, s tim da mora bit isto string kao i $variable: 
//Unlike switch, the comparison is an identity check (===) rather than a weak equality check (==)

//umjesto $dan moze i odmah echo, bez dodatne varijable
$dan = match ($variable) {
     '1' => 'Ponedjeljak',
     '2' => 'Utorak',
     '3' => 'Srijeda',
     '4' => 'Cetvrtak',
     '5' => 'Petak',
     '6' => 'Subota',
     '7' => 'Nedjelja',
     default => 'Ne znam koji je dan'
};
echo $dan;
//cesto se koristi za umjesto 'Ponedjeljak' i sl, da je tu neka funkcija, objet, path do nekog file-a i sl. 

echo '<br><br>';