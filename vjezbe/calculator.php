<?php

?>

<!DOCTYPE html>
<html>
<body>

    <h2>Kalkulator</h2>

    <form method="POST">

        <label for="input">Unesite izraz:</label><br>
        <input type="text" id="input" name="input"><br><br>
        <?php
            if (!empty($_POST)) {
                echo " = rezultat";
            }
        ?>
        <input type="submit" value="Pošalji">

    </form> 

</body>
</html>