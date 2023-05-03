<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1984_Again</title>
</head>
<body>
    <form action="response.php" method="GET">
        <h2>>Inserire testo</h2>
        <label for="sentence"></label>
        <textarea cols="30" rows="10" id="sentence" name="sentence"></textarea>

        <h2>>Inserire parola da censurare dal testo</h2>
        <label for="badWord"></label>
        <input id="badWord" type="text" name="badWord">

        <button type="submit">Invia</button>
    </form>
</body>
</html>