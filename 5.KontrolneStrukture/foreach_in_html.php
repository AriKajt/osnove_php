<?php

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

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach - HTML</title>
</head>
<body>
<h1>Foreach in HTML</h1>
<table border="1">  
       <thead>
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Email</th>
            <th>Dob</th>
        </tr>
       </thead> 
       <tbody>

        <?php
        foreach ($users as $user) {/* umjesto { moze :, tj. bilo bi :> */
        ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['age'] ?></td>
            </tr>
        <?php
        }/* ako je gore : onda umjesto } moze endforeach, tj. <?php endforeach ?> */
        ?>
        
       </tbody>          
</table>
</body>
</html>