<?php

// United Federation of Planets user database

$users = [
    [
        'ime' => 'Jean Luc',
        'prezime' => 'Picard',
        'dob' => 97,
        'spol' => 'male'
    ],
    [
        'ime' => 'Adira',
        'prezime' => 'Tal',
        'dob' => 18,
        'spol' => 'nonbinary'
    ]
];

echo '<pre>';
print_r($users);
echo '</pre>';

for ($i = 0; $i < count($users); $i++){
    unset($users[$i]['spol']);
}

$users[] = [
    'ime' => 'Seven',
    'prezime' => 'of Nine',
    'dob' => 58
];

echo '<pre>';
print_r($users);
echo '</pre>';