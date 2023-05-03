<?php
    $sentence = $_GET['sentence'];
    $censorship = $_GET['badWord'];
    $badWord = "***";
    $sentence_replace = str_replace($censorship, $badWord, $sentence);
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
    <h2>Oppressive government version</h2>
   
    <span>
        Il testo corretto è: "
        <?php 
            echo $sentence_replace;
        ?>
        "
    </span>
</body>
</html>