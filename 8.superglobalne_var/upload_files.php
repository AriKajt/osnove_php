<?php

function prettyPrint(array $print) {
    echo "<pre>";
    print_r($print);
    echo "</pre>";
}

prettyPrint($_FILES);

$uploadsDir = __DIR__ . '/uploads';

if (!empty($_FILES)) {
    if (!is_dir($uploadsDir)){
        mkdir($uploadsDir);
    }
}
$fileName = $_FILES['datoteka']['name'];
$filePath = $uploadsDir . '/' . $fileName;
if (move_uploaded_file($_FILES['datoteka']['tmp_name'], $filePath)) {
    echo "File dodan";
    echo "<a href=uploads/$fileName>Prikazi</a>";
} else {
    echo "Problem kod uploada";
}


?>

<!DOCTYPE html>
<html>
<body>

    <h2>File Upload</h2>

    <form method="POST" enctype="multipart/form-data">

        <label for="datoteka">Datoteka:</label><br>
        <input type="file" id="datoteka" name="datoteka" required><br>

        <input type="submit" value="Pošalji">

    </form> 

</body>
</html>