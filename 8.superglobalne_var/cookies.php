<?php

var_dump(time());

$expiresIn = time() + 60*60; // za 1 sat

setcookie('user', 'Ari', $expiresIn, '/'); // npr. 86400*30 = 60*60*24*30 (mjesec dana)

var_dump($_COOKIE);

setcookie('user', 'jfwlekj', time()-1, '/');//u proslosti je, pa ga vise nema, 
//u firefoxu check u inspect, storage, cookies; u chromeu je u apps umjesto storage