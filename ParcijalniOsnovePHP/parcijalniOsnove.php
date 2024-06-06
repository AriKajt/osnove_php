<!-- Treba kreirati aplikaciju koja će iz datoteke words.json 
u desnu tablicu ispisati sve riječi koje su analizirane.
 S lijeve strane treba kreirati obrazac kroz koji će se unositi nova riječ.
 Unesenu riječ treba obraditi na sljedeći način:
 polje ne smije biti prazno
 izbrojiti broj slova u riječi
 izbrojiti suglasnike i samoglasnike u riječi (za ovu funkcionalnost kreirajte funkcije).
 Obrađenu riječ treba zapisati u words.json datoteku. -->

<?php

const FILE_PATH = __DIR__ . '/words.json';
$postData = $_POST;
$errors = [];
$words = [];

if (file_exists(FILE_PATH)) {
    $words = file_get_contents(FILE_PATH);
    $words = json_decode($words, true);
}

function countVowels(string $text): int
{
    $cnt = 0;
    $cnt += substr_count($text, 'a');
    $cnt += substr_count($text, 'e');
    $cnt += substr_count($text, 'i');
    $cnt += substr_count($text, 'o');
    $cnt += substr_count($text, 'u');
    $cnt += substr_count($text, 'A');
    $cnt += substr_count($text, 'E');
    $cnt += substr_count($text, 'I');
    $cnt += substr_count($text, 'O');
    $cnt += substr_count($text, 'U');
    return $cnt;
}


if (!empty($postData["word"])) {
    //makni whitespace na pocetku/kraju rijeci
    $word = trim($postData["word"]);

    if (!preg_match('/^[\p{Latin}]+$/u', $word)) {
    //provjeri jesu samo slova unesena, ako ne, spremi gresku
        $errors['word'] = "Niste upisali ispravnu riječ.";
    } else {
        $length = mb_strlen($word); //mb = prilagodjeno za nasa slova, inace ih racuna duplo
        $samoglasnici = countVowels($word);
        $suglasnici = $length - $samoglasnici;
        $words[] = [
            "word" => $word,
            "length" => $length,
            "consonants" => $suglasnici,
            "vowels" => $samoglasnici,
        ];
        $allWords = json_encode($words); 
        //novi variable $allWords je string, da nam $words ostane array zbog ispisa dole
        file_put_contents(FILE_PATH, $allWords);
    }
} elseif (isset($postData["word"])) {
    //poslana prazna rijec
    $errors['word'] = "Unesi riječ za obradu.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni Ispit - Osnove PHP-a</title>
</head>

<body>

    <h2>Obrada riječi</h2>

    <div id="parent" style="display: flex;">

        <div id="left" style="flex-basis: 50%;">
            <form method="POST">

                <label for="word">Riječ:</label><br>
                <input type="text" id="word" name="word"><br>

                <p style="color:red">
                    <?php
                    if (!empty($errors)) {
                        foreach ($errors as $key => $error) {
                            echo "$error";
                        }
                    }
                    ?>
                </p>


                <input type="submit" value="Pošalji">

            </form>
            <p><a href='parcijalniOsnove.php'>Obrada nove riječi</a></p>
        </div>

        <div id="right" style="flex-basis: 50%;">
            <br>
            <table border="1">
                <tr align="left">
                    <th>Riječ</th>
                    <th>Broj slova</th>
                    <th>Broj suglasnika</th>
                    <th>Broj samoglasnika</th>
                </tr>

                <?php
                if (!empty($words)) {
                    foreach ($words as $word) {
                ?>
                        <tr>
                            <td><?= $word["word"] ?></td>
                            <td><?= $word["length"] ?></td>
                            <td><?= $word["consonants"] ?></td>
                            <td><?= $word["vowels"] ?></td>
                        </tr>
                <?php
                    }
                }
                ?>

            </table>

        </div>

    </div>

</body>

</html>