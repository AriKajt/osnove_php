<?php

//while petlja

$i = 5;

while ($i <= 10) {
    echo "$i ";
    $i++;
}

echo '<br><br>';

//do-while petlja

$i = 1;

do {
    echo "$i ";
    $i++;
} while ($i <= 10);

echo '<br><br>';

//for petlje
for ($i=0; $i < 10; $i++) { 
    echo "$i ";
}
echo '<br><br>';

for ($i=0; $i < 50; $i++) { 
    echo "$i ";

    if ($i ===5){
        echo "<br>broj 5 je pronadjen";
        break;//izadji iz petlje
    }
}
echo '<br><br>';

for ($i=0; $i < 10; $i++) { 

    if ($i === 5){
        continue;//koristi se u petljama za preskociti/ne izvrsiti dio (zgodno za filtriranje necega), ovdje ne ispise 5
    }
    echo "$i ";
}

echo '<br><br>';

// nested loops, ne koristiti ih ako nije potrebno radi ustede procesora, esp.not nesting several loops

for ($i=1; $i <= 10; $i++) { 
    echo "$i - ";
    for ($j=1; $j <= 10 ; $j++) { 
        echo "$j ";
    }
    echo '<br>';
}

echo '<br><br>';

// for petlje s arrays

$names = ['Harry', 'Ron', 'Hermione'];

for ($i=0; $i < count($names); $i++) { 
    echo "$names[$i], ";
}
echo '<br><br>';

// foreach da radi isto

foreach ($names as $name) { //za svako ime iz niza imena
    echo "$name, "; // ispisi ime
}

echo '<br><br>';

//with keys or for associative arrays
foreach ($names as $key => $name) { 
    echo ++$key." - $name<br>";
}

echo '<br><br>';

$users = [
    [
        "id" => 1,
        "name" => "John Doe",
        "email" => "john@example.com",
        "age" => 30
    ],
    [
        "id" => 2,
        "name" => "Jane Smith",
        "email" => "jane@example.com",
        "age" => 25
    ],
    [
        "id" => 3,
        "name" => "Mike Johnson",
        "email" => "mike@example.com",
        "age" => 35
    ],
    [
        "id" => 4,
        "name" => "Emily Davis",
        "email" => "emily@example.com",
        "age" => 28
    ],
    [
        "id" => 5,
        "name" => "Chris Brown",
        "email" => "chris@example.com",
        "age" => 40
    ]
]; 

foreach ($users as $key => $user) {
    echo ++$key.'. ';
    echo $user['name'].' - '.$user['email'];
    // foreach ($user as $key2 => $value) { //example of nested loops, need to use a new key variable
    //     echo "$key2 => $value";
    // }
    echo '<br>';
}

//sljedeci put iskombinirati s html-om da ispisuje to sve u tablici, vidi foreach_in_html.php