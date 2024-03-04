<?php
function affichage($tabs,$dim){
    for($i =0;$i<$dim;$i++){
        for($j=0;$j<$dim;$j++){
            
            echo $tabs[$i][$j]," "," ";
            //$tabs[$i][$j]=$i+$j;
        }
        echo"<br>";
    }
    echo "<br>";

}

function transfo($tabs,$dim){
    for($i =0;$i<$dim;$i++){
        for($j=0;$j<$dim;$j++){
            
           $tabs[$i][$j]=$i+$j;
        }
        
    }
    return $tabs;

}
