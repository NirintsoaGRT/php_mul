<?php

    session_start();
   
    $_SESSION['tour']=1;        
  //print_r($_SESSION['table'][0][0]);
    $indice=$_GET['numero'];
    $_SESSION['id']=$indice;
    $_SESSION['indice']=$indice;
  session_write_close();
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
        <form action="http://localhost/enjana.php" method="get" >
            <label for="newA">entre A</label>
            <input type="text" id ="newA" name="newa" value="<?php echo $_SESSION['table'][$indice][1];?>">
            <br>
            <br>
            <label for="newB" >entre valeur B</label>
            <input type="text" id="newB" name="newb" value="<?php echo $_SESSION['table'][$indice][0];?>">
            <input type="submit" value="changer">
          
        </form>

    </div
