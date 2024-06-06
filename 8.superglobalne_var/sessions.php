<?php

session_start();

$_SESSION['user'] = [
    'ime' => 'Ari',
    'adresa' => 'Ulica 1'
];

var_dump($_SESSION);