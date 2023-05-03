<?php
    $sentence = $_GET['sentence'];
    $censorship = $_GET['badWord'];
    $badWord = "***";
    $sentence_replace = str_replace($censorship, $badWord, $sentence);
    $sentence_length = strlen($sentence);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censorship</title>
</head>
<body>
    <h1>Oppressive government version</h1>
   
    <p style="font-size: 2rem">
        Il testo corretto è: "
        <?php 
            echo $sentence_replace;
        ?>
        "
    </p>

    <p style="font-size: 2rem">
        Il testo è lungo: 
        <?php
            echo $sentence_length;
        ?>
        caratteri
    </p>
</body>
</html>