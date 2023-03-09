<?php
    $paragraph_length = strlen($_GET["usertext"])
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risposte Form</title>
</head>
<body>
    <h1>PARAGRAFO:</h1>
    <p>
        <?php echo $_GET["usertext"]?>
        . Il paragrafo è lungo 
        <?php echo $paragraph_length ?>
        caratteri.
    </p>

    <hr>

    <h2>PAROLA DA CENSURARE:</h2>
    <p>
        <?php echo $_GET["badwords"] ?>
    </p>
</body>
</html>