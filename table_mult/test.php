<?php
session_start();
$_SESSION['tour']=0;
$_SESSION['id']=0;
?>
  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoir</title>
</head>
<body>
    <div>
        <form action="http://localhost/enjana.php" method="get">
            <label for="valeurA">entre A</label>
            <input type="text" id ="valeurA" name="a">
            <br>
            <br>
            <label for="ValeurB">entre valeur B</label>
            <input type="text" id="valeurB" name="b">
            <input type="submit" value="cliquer">
        </form>
    </div>
</body>
</html>