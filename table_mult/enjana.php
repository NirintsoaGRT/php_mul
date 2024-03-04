<?php
            session_start(); 
            echo $indice; 
            if($_SESSION['tour']==0){  /// entrer des donner 
                $_SESSION['sa']=$_GET[('a')];
                $_SESSION['sb']=$_GET[('b')];
                $a=$_SESSION['sa'];
                $b=$_SESSION['sb'];       
                $tableaux=creatTAb($a,$b);
                $_SESSION['table']=$tableaux; 
            }
            $a=$_SESSION['sa'];
            $b=$_SESSION['sb'];     
            if($_SESSION['tour']==1){ //modification 
                $_SESSION['table'][$_SESSION['id']][1]=$_GET[('newa')];
                $_SESSION['table'][$_SESSION['id']][0]=$_GET[('newb')];
            }
            if($_SESSION['tour']==2){ // suppression
                array_splice($_SESSION['table'],$_GET['indices'],1);
                $_SESSION['tour']=1;
            }
            function creatTAb($a,$b){
                $tab[0]=[0,0];
                for($i=0;$i<$b;$i++){
                    $tab[$i]=[$i+1,$a];                      
                }
                return $tab;
                }
            function prints($tableaux){
                echo "<table border=\"1px solid black\">";
                for($i=0;$i<count($tableaux);$i++){                   
                    if($i%2==1){
                        echo "<tr width=\"500px\" height=\"50px\" id=\"coleur\" >";
                        echo "<style>#coleur{background:green;}td{width:150px;</style>";
                    }
                    else{
                        echo "<tr width=\"500px\" height=\"50px\" id=\"coleurs\" >";
                        echo "<style>#coleurs{background:red;}td{width:150px;}</style>";
                    }                   
                    echo "<td>".$tableaux[$i][0]."</td>";
                    echo "<td>".$tableaux[$i][1]."</td>";
                    echo "<td>".$tableaux[$i][0]*$tableaux[$i][1]."</td>";
                    echo "<td ><form action=\"http://localhost/modifaka.php\" method=\"get\"> <button  name=\"numero\"type=\"submit\" value=\"$i\">clrique</button></form></td>";
                    echo "<td><a  href=suprmier.php?numerao=$i>supprimer</a></td>";
                    echo "</tr>";
                }
                echo"</table>";
            }   
            session_write_close();
            ?> 
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Afficahage</title>
                    <link rel="stylesheet" href="style.css">
                </head>
                <body>
                    <div>
                
                     <?php   
                            prints($_SESSION['table']);
                        ?>      
                    </div>    
                </body>
                </html>
              