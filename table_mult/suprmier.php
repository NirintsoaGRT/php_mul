<?php
    session_start();
    $_SESSION['tour']=2;
    $indice=$_GET['numerao'];
    $_SESSION['ind']=$indice;       
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suppresion d elements </title>
</head>
<body>
    <div id="titre">
        <h1> suppresion des donner</h1>

    </div>
    <div id="afichage">
        <label for="sup">suppresions terminer</label>
        <?php
        echo"<a href=enjana.php?indices=$indice><button id=\"sup\">afficher le resultat</button></a>";

        ?>
    </div>
</body>
</html>