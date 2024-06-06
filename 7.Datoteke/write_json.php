<?php

const FILE_PATH = __DIR__ . '/podaci/knjige.json';
$books = file_get_contents(FILE_PATH);

$books = json_decode($books, true);
//is_array($books); //provjeri je li array

$books[] = [
    "title"=>"Lord of the Rings",
    "author"=>"J. R. R. Tolkien",
    "available"=>true,
    "pages"=>1187,
    "isbn"=>6782361374049
];

//var_dump($books);

$books = json_encode($books);

var_dump($books);

file_put_contents(FILE_PATH, $books);

//note this is the long way to do it - we stored the whole file in $books, then added an entry, 
//then put the whole file back - not just adding to the end - see read/write CSV files for avoiding that