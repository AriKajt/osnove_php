<?php
var_dump($_POST);
var_dump($_REQUEST);
var_dump($_GET);
?>

<!-- primjer url-a s get parametrima
get.php?objekt=stolica&koJeZao=Microsoft -->

<!DOCTYPE html>
<html>
<body>

    <h2>GET superglobal</h2>

    <form method="GET"> <!-- po defaultu (ako nema definiran method, onda radi kao get forma) -->

        <label for="first_name">Ime:</label><br>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Prezime:</label><br>
        <input type="text" id="last_name" name="last_name"><br><br>

        <input type="submit" value="Pošalji">

    </form> 

</body>
</html>